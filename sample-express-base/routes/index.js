const express = require('express');
const router = express.Router();

//Define Root Auth
const routerAuth = require('./v1/auth/auth');

//Define Root SSO
const routerAuthSSO = require('./v1/auth/sso');

//Define Validasi Auth 
const authChecker = require('../services/auth_check');

//Define API /auth
router.use('/v1/auth', (req, res, next) => {
    next();
}, routerAuth);

//Define API /user
router.use('/v1/user', authChecker.checkAuthAdmin, (req, res, next) => {
    next();
}, routerAuth);

//Define API /sso
router.use('/v1/sso', (req, res, next) => {
    next();
}, routerAuthSSO);

//Define API /sso/app
router.use('/v1/sso/app', authChecker.checkAuthSSO, (req, res, next) => {
    next();
}, routerAuthSSO);

//Define API /admin/settings
// router.use('/v1/admin', authChecker.checkAuthAdmin, (req, res, next) => {
//     next();
// }, routerAdmin);


//Sample Route
/**
  * @swagger
  * /:
  *   get:
  *     description: Returns the homepage
  *     responses:
  *       200:
  *         description: hello world
  * definitions:
  *     Auth:
  *         type: "object"
  *         properties:
  *             token:
  *                 type: "string"
  *         xml:
  *             name: "Auth"
  */
router.get('/', (req, res, next) => {
    res.send({
        message: 'Service Dev SSO',
        url: req.originalUrl
    })
});
//End Sample

//exports
module.exports = router;