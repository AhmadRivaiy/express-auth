const { Op, Model, QueryTypes, DataTypes, Sequelize } = require('sequelize');
const sequelize = new Sequelize(process.env.DATABASE_CONN);
const initModels = require('../models/init-models');
var models = initModels(sequelize);


class UsersControllers {
    findInfoAccount(data, att) {
        return new Promise((resolve, reject) => {
            try {
                models.master_account.findOne({
                    where: {
                        [Op.or]: {
                            email: data.email, // user email
                            username: data.email // user username
                        }
                    }
                }).then(async (response) => {
                    if (!response) {
                        resolve(false);
                    } else {
                        const cond = await response.validPassword(data.password)
                        if (!cond) {
                            resolve(false);
                        } else {
                            delete response.dataValues.password
                            resolve(response.dataValues)
                        }
                    }
                })
                    .catch((err) => {
                        reject(err);
                    })
            } catch (error) {
                const response = {
                    status: 500,
                    data: {},
                    error: {
                        message: "user match failed"
                    }
                };
                reject(response);
            }
        })
    }

    findInfoAccountBySSO(data, att) {
        return new Promise((resolve, reject) => {
            try {
                models.master_account.findOne({
                    where: {
                        [Op.or]: {
                            email: data.email, // user email
                            username: data.email // user username
                        }
                    }
                }).then(async (response) => {
                    resolve(response.dataValues)
                })
                    .catch((err) => {
                        reject(err);
                    })
            } catch (error) {
                const response = {
                    status: 500,
                    data: {},
                    error: {
                        message: "user match failed"
                    }
                };
                reject(response);
            }
        })
    }

    findInfoAccountV2(data, att) {
        return new Promise((resolve, reject) => {
            try {
                models.master_account.findOne({
                    where: {
                        email: data.email,
                        id_user: data.id_user,
                        is_admin: data.is_admin
                    }
                }).then(async (response) => {
                    if (!response) {
                        resolve(false);
                    } else {
                        const cond = await response.validPassword(data.password)
                        if (!cond) {
                            resolve(false);
                        } else {
                            delete response.dataValues.password
                            resolve(response.dataValues)
                        }
                    }
                })
                    .catch((err) => {
                        reject(err);
                    })
            } catch (error) {
                const response = {
                    status: 500,
                    data: {},
                    error: {
                        message: "user match failed"
                    }
                };
                reject(response);
            }
        })
    }

    findUsersAuth(data, att) {
        return models.master_account.findOne({
            where: {
                ...data
            }
        })
    }

    findInfoUser(data, att) {
        return models.master_user.findOne({
            attributes: {
                include: [
                    [sequelize.col('master_accounts.email'), 'email'],
                ]
            },
            where: {
                ...data
            },
            include: [
                {
                    model: models.master_account,
                    as: 'master_accounts',
                    attributes: ['email']
                },
            ],
            raw: true
        })
    }

    createAccountUser(data, att) {
        return new Promise((resolve, reject) => {
            try {
                models.master_account.findOne({
                    where: {
                        username: data.username,
                        email: data.email
                    }
                }).then(async (response) => {
                    if (response) {
                        resolve(false);
                    } else {
                        models.master_account.create({
                            ...data
                        })
                            .then((response) => {
                                resolve(response.dataValues)
                            })
                    }
                }).catch((err) => {
                    reject(err);
                })
            } catch (error) {
                reject(error);
            }
        })
    }

    updateUserControls(values, condition) {
        return models.user_controls.findOne({ where: condition })
            .then(function (obj) {
                // update
                if (obj)
                    return obj.update(values);
                // insert
                return models.user_controls.create(values);
            })
    }

    updateUsers(data, hooks) {
        return models.master_user.update({
            ...data
        }, {
            where: {
                id_user: data.id_user
            },
            individualHooks: hooks,
        })
    }


    updateUsersAccount(data, hooks) {
        return models.master_account.update({
            ...data
        }, {
            where: {
                id_user: data.id_user
            },
            individualHooks: hooks,
        })
    }
}

module.exports = UsersControllers;