const { query, body, validationResult, param, header, oneOf } = require('express-validator');

exports.validate = (method) => {
    switch (method) {
        case 'check_token': {
            return [
                body('token', 'token harus ada').notEmpty(),
            ]
        }
        case 'check_token_sso': {
            return [
                query('redirect_token', 'redirect_token harus ada').notEmpty(),
            ]
        }
        case 'check_auth': {
            return [
                body('email_or_username', 'email harus diinput').notEmpty(),
                body('password', 'password harus diinput').notEmpty(),
            ]
        }
        case 'check_register': {
            return [
                body('email', 'email harus diinput').notEmpty(),
                body('password', 'password harus diinput').notEmpty(),
                body('username', 'username harus diinput').notEmpty(),
                body('id_user', 'id_user harus diinput').notEmpty(),
            ]
        }
        case 'check_update': {
            return [
                body('email', 'username -or').optional(),
                body('password', 'password -or').optional(),
                body('old_password', 'old_password -or').notEmpty(),
            ]
        }
        case 'check_logout': {
            return [
                body('email_or_username', 'username -or email').optional(),
                body('fcm_token', 'fcm_token -or email').optional(),
            ]
        }
    }
}

exports.verify = (req, res, next) => {
    try {
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            res.status(422).json({
                errors: errors.array()
            })
            return;
        } else {
            return next();
        }
    } catch (err) {
        return next(err);
    }
}