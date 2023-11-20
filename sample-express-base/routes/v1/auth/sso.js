const express = require('express');
const router = express.Router();
const bcrypt = require('bcryptjs');
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
router.get('/', (req, res, next) => {
    res.send({
        message: 'Service Auth Dashboard Pendikan SSO',
        route: '/auth_service/sso',
        access: true,
        status: 200,
    })
})

router.post('/access', (req, res, next) => {
    try {
        let _bearer = req.headers['authorization'].split(";")[0].replace("Bearer ", "");
        let _nik = req.body.username;
        let _anotation_key = req.body.anotation_key;
    
    
        const validUntil = new Date(_anotation_key * 1000)
        const diffInMinune = Math.abs((new Date() - validUntil) / 1000 / 60);
    
        if(diffInMinune > 1){
            res.status(440).send({
                status: false,
                message: 'timeout',
                data: false
            })
        }

        bcrypt.compare( _nik + process.env.JWT_CONF_TOKEN_SSO, _bearer, function (err, result) {
            console.log(result);
            if(err){
                console.log(err);
                res.send({
                    status: false,
                    message: 'fail',
                    data: false
                })
            }
            if(result){
                models.findInfoAccountBySSO({
                    email: _nik
                }).then(x => {
                    if (x) {
                        res.send({
                            status: true,
                            message: 'success',
                            data: true
                        
                        })
                    } else {
                        res.send({
                            status: false,
                            message: 'fail',
                            data: false
                        
                        })
                    }
                })
                .catch((err) => {
                    res.send({
                        status: false,
                        message: 'fail',
                        data: false
                    
                    })
                })
            } else {
                res.send({
                    status: false,
                    message: 'fail',
                    data: false
                })
            }
        })
    } catch (err) {
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
    }
});

router.post('/autologin', (req, res, next) => {
    try {
        let _bearer = req.headers['authorization'].split(";")[0].replace("Bearer ", "");
        let _nik = req.body.username;
        let _anotation_key = req.body.anotation_key;
    
    
        const validUntil = new Date(_anotation_key * 1000)
        const diffInMinune = Math.abs((new Date() - validUntil) / 1000 / 60);
    
        if(diffInMinune > 1){
            res.status(440).send({
                status: false,
                message: 'timeout',
                data: false
            })
        }

        bcrypt.compare( _nik + process.env.JWT_CONF_TOKEN_SSO, _bearer, function (err, result) {
            if(err){
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
            }
            if(result){
                models.findInfoAccountBySSO({
                    email: _nik
                }).then(x => {
                    if (x) {
                        var toToken = {
                            id_user: x.id_user,
                            level: x.level,
                        }
                        res.send({
                            status: true,
                            message: 'success',
                            data: {
                                redirect: `${process.env.URL_FRONTEND_SSO}?token=${authChecker.generateTokenSSO(toToken, 60)}&redirect=true&sso=true`
                            }
                        })
                    } else {
                        res.send({
                            status: false,
                            message: 'fail',
                            data: false
                        })
                    }
                })
                .catch((err) => {
                    res.send({
                        status: false,
                        message: 'fail',
                        data: false
                    })
                })
            } else {
                res.send({
                    status: false,
                    message: 'fail',
                    data: false
                })
            }
        })
    } catch (err) {
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
    }
});

router.post('/auto-login', validator.validate("check_token_sso"), validator.verify, (req, res, next) => {
    
    var arg = {
        id_user: req.user_data.id_user,
        level: req.user_data.level,
        token: req.body.firebase_token ?? null
    }
    async_utils.waterfall([
        function (callback) {
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
            models.updateUserControls({ id_user: arg.id_user, is_login: true, last_login: new Date(), last_logout: null, fcm_token: arg.token }, { id_user: arg.id_user }).then(x => {
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
        [Op.or]: [
            { username: req.user_data.username },
            { email: req.body.email },
            { username: req.body.username }
        ]
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
                    { fcm_token: req.body.fcm_token }
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
});


//exports
module.exports = router;