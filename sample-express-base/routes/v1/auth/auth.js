const express = require('express');
const router = express.Router();
const async_utils = require('async')

const UsersControllers = require('../../../controllers/users');
const models = new UsersControllers();
const validator = require('./authValidator');
const authChecker = require('../../../services/auth_check');
const { Op } = require("sequelize");

// const RefreshToken = require('../../models/refreshToken');
/**
  * @swagger
  * /auth:
  *   post:
  *     description: Auth Login
  *     responses:
  *       200:
  *         description: Logged
  *         body:
  *             data:
  *                 token: Headers
  *       401:
  *         description: Unauthorized
  *       422:
  *         description: Data Body Missing
  *     consumes:
  *      - application/json
  *     produces:
  *      - application/json
  *     parameters:
  *         - name: body
  *           description: Data Body
  *           required: true
  *           type: string
  *           in: body
  *           schema:
  *             type: "object"
  *             properties:
  *                 email_or_username:
  *                     type: "string"
  *                 password:
  *                     type: "string"
  */

router.post('/', validator.validate("check_auth"), validator.verify, (req, res, next) => {
    var _data = {
        email: req.body.email_or_username,
        password: req.body.password,
        token: req.body.token ?? null
    }
    async_utils.waterfall([
        function (callback) {
            models.findInfoAccount(_data).then(x => {
                if (x) {
                    callback(null, x);
                } else {
                    res.status(401).send({
                        message: 'Email atau Password Salah!'
                    })
                }
            }).catch(err => {
                var details = {
                    parent: err.parent,
                    name: err.name,
                    message: err.message
                }
                var error = new Error("Error pada server");
                error.status = 500;
                error.data = {
                    date: new Date(),
                    route: req.originalUrl,
                    details: details
                };
                next(error);
            });
        },
        function (arg, callback) {
            models.findInfoUser({ id_user: arg.id_user, soft_delete: 0 }).then(x => {
                if (x) {
                    callback(null, arg, x);
                } else {
                    res.status(401).send({
                        message: 'User Tidak Ditemukan!'
                    })
                }
            }).catch(err => {
                var details = {
                    parent: err.parent,
                    name: err.name,
                    message: err.message
                }
                var error = new Error("Error pada server");
                error.status = 500;
                error.data = {
                    date: new Date(),
                    route: req.originalUrl,
                    details: details
                };
                next(error);
            });
        },
        function (arg, infoUser, callback) {
            models.updateUserControls({ id_user: arg.id_user, is_login: true, last_login: new Date(), last_logout: null, fcm_token: _data.token }, { id_user: arg.id_user }).then(x => {
                callback(null, arg, infoUser);
            }).catch(err => {
                var details = {
                    parent: err.parent,
                    name: err.name,
                    message: err.message
                }
                var error = new Error("Error pada server");
                error.status = 500;
                error.data = {
                    date: new Date(),
                    route: req.originalUrl,
                    details: details
                };
                next(error);
            });
        },
    ], function (err, result, infoUser) {
        var toToken = {
            id_user: result.id_user,
            level: result.level,
        }
        res.send({
            status: 200,
            message: 'Service Auth',
            route: '/auth_service/auth',
            data: {
                nama: infoUser.nama_user,
                email: infoUser.email,
            },
            accessToken: authChecker.generateToken(toToken)
        })
    });
});

//Logout action
router.delete('/logout', validator.validate("check_logout"), validator.verify, (req, res, next) => {
    var _data = {
        id_user: req.user_data.id_user,
    }
    async_utils.waterfall([
        function (callback) {
            models.findUsersAuth(_data).then(x => {
                if (x) {
                    callback(null, x);
                } else {
                    callback(null, {id_user: null});
                }
            }).catch(err => {
                var details = {
                    parent: err.parent,
                    name: err.name,
                    message: err.message
                }
                var error = new Error("Error pada server");
                error.status = 500;
                error.data = {
                    date: new Date(),
                    route: req.originalUrl,
                    details: details
                };
                next(error);
            });
        },
        function (arg, callback) {
            models.updateUserControls({ is_login: false, last_logout: new Date(), fcm_token: null }, {
                [Op.or]: [
                    { id_user: arg.id_user },
                    { fcm_token: req.body.fcm_token ?? null }
                ]
            }).then(x => {
                callback(null, arg);
            }).catch(err => {
                var details = {
                    parent: err.parent,
                    name: err.name,
                    message: err.message
                }
                var error = new Error("Error pada server");
                error.status = 500;
                error.data = {
                    date: new Date(),
                    route: req.originalUrl,
                    details: details
                };
                next(error);
            });
        }
    ], function (err, result) {
        res.send({
            status: 200,
            message: 'Logout Sukses!',
            route: '/logout/',
        })
    });
})

router.post('/register/secret', validator.validate("check_register"), validator.verify, (req, res, next) => {
    var _data = {
        email: req.body.email,
        password: req.body.password,
        username: req.body.username,
        id_user: req.body.id_user
    }
    if (req.query.key && req.query.key === 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9') {
        models.createAccountUser(_data).then(x => {
            res.send({
                message: 'Sukses!',
                data: x
            })
        }).catch(err => {
            var details = {
                parent: err.parent,
                name: err.name,
                message: err.message
            }
            next(err);
        });
    } else {
        res.status(403).send({
            message: 'Not Allowed',
            data: []
        })
    }
});


//exports
module.exports = router;