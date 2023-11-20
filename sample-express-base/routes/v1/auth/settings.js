const express = require('express');
const router = express.Router();
const UsersControllers = require('../../../controllers/users');
const models = new UsersControllers();
const validator = require('./authValidator');
const authChecker = require('../../../services/auth_check');
const { filterObj } = require('../../../includes/helper');
const async_utils = require('async')

//Sample Route
router.get('/', (req, res, next) => {
    res.json({
        message: 'Tes'
    })
});

router.put('/update-user', validator.validate("check_update"), validator.verify, (req, res, next) => {
    const allowed = ['email', 'old_password', 'password', 'password_confirmation'];
    const filtered = filterObj(req.body, allowed);
    
    filtered['id_user'] = req.user_data.id_user;
    if (filtered.password === filtered.password_confirmation) {
        async_utils.waterfall([
            function (callback) {
                models.findInfoAccountV2({
                    email: filtered.email,
                    id_user: filtered.id_user,
                    password: filtered.old_password,
                    is_admin: false
                })
                    .then((result) => {
                        if (result) {
                            callback(null);
                        } else {
                            res.status(422).send({
                                message: 'Password lama tidak sesuai'
                            })
                        }
                    })
            },
            function (callback) {
                var _data = {
                    password: filtered.password,
                    id_user: filtered.id_user
                }
                models.updateUsersAccount(_data, true).then(x => {
                    res.status(201).send({
                        message: 'Sukses Update Data!',
                        route: '/auth/update-user'
                    })
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
        ])
    } else {
        res.status(422).send({
            message: 'Password baru tidak sama'
        })
    }
});
//End

//exports
module.exports = router;