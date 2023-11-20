var jwt = require('jsonwebtoken');
const { query, body, param, validationResult, header } = require('express-validator');
const config = require("../config/auth.config");

exports.checkAuthAdmin = (req, res, next) => {
    var headers = req.headers;
    if (typeof headers['authorization'] !== 'undefined') {
        if (headers['authorization']) {
            jwt.verify(headers['authorization'].split(";")[0].replace("Bearer ", ""), process.env.JWT_CONF_TOKEN, (err, decoded) => {
                if (!err) {
                    req.user_data = decoded;
                    return next();
                } else {
                    res.status(401).send({ message: 'Not Authorized' })
                }
            });
        } else {
            res.status(400).send({ message: 'Auth detected, but no token detected' })
        }
    } else {
        res.status(401).send({
            message: "Token Required"
        })
    }
}

exports.checkAuthSSO = (req, res, next) => {
    var query = req.query;
    //CHECK QUERY redirect_token
    if (typeof query['redirect_token'] !== 'undefined') {
        if (query['redirect_token']) {
            jwt.verify(query['redirect_token'].split(";")[0].replace("Bearer ", ""), process.env.JWT_CONF_TOKEN_SSO, (err, decoded) => {
                if (!err) {
                    req.user_data = decoded;
                    return next();
                } else {
                    res.status(401).send({ message: 'Not Authorized' })
                }
            });
        } else {
            res.status(400).send({ message: 'Auth detected, but no token detected' })
        }
    } else {
        res.status(401).send({
            message: "Redirect Token Required"
        })
    }
}

exports.generateToken = (data) => {
    var tokenKey = process.env.JWT_CONF_TOKEN;
    return jwt.sign(data, tokenKey, {
        expiresIn: config.jwtExpiration
    });
    //return jwt.sign(data, process.env.JWT_CONF_TOKEN);
}

exports.generateTokenSSO = (data, expiration = 1000) => {
    var tokenKey = process.env.JWT_CONF_TOKEN_SSO;
    return jwt.sign(data, tokenKey, {
        expiresIn: expiration
    });
    //return jwt.sign(data, process.env.JWT_CONF_TOKEN);
}