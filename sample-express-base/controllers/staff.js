const { Op, Model, DataTypes, Sequelize, QueryTypes } = require('sequelize');
const sequelize = new Sequelize(process.env.DATABASE_CONN);
const initModels = require('../models/init-models');
var models = initModels(sequelize);

class AdminModel {
    getAllUser = (data) => {
        return models.master_user.findAll({
            include: [
                {
                    model: models.master_account,
                    as: 'master_accounts',
                    required: true,
                    attributes: ['id_account']
                }
            ],
            where: {
                soft_delete: 0
            },
            order:[
                ['nama_user', 'ASC']
            ]
        });
    }

    getDetailUser = (data, dataWhere) => {
        return models.master_user.findOne({
            include: [
                {
                    model: models.master_account,
                    as: 'master_accounts',
                    required: true,
                    attributes: ['id_account', 'email']
                },
            ],
            where: {
                soft_delete: 0,
                ...dataWhere
            }
        });
    }

    createMasterUser = (data) => {
        return models.master_user.create({
            nama_user: data.nama_user,
            no_telepon: data.no_telepon,
            tanggal_lahir: data.tanggal_lahir,
            tempat_lahir: data.tempat_lahir,
            gelar: data.gelar,
            soft_delete: 0
        });
    }

    createAuthUser = (data) => {
        return models.master_account.create({
            id_user: data.id_user,
            email: data.email,
            password: data.password
        });
    }
    
    updateUser = (data) => {
        return models.master_user.update({
            nama_user: data.nama_user,
            no_telepon: data.no_telepon,
            tanggal_lahir: data.tanggal_lahir,
            tempat_lahir: data.tempat_lahir,
            gelar: data.gelar,
            last_update: new Date()
        }, {
            where: {
                id_user: data.id_user
            }
        });
    }

    updateAccount = (data) => {
        return models.master_account.update({
            email: data.email,
            last_update: new Date()
        }, {
            where: {
                id_user: data.id_user,
                email: data.old_email,
            }
        });
    }

    checkDuplicate = (data) => {
        return models.master_account.findAll({
            where: {
                email: data.email
            }
        });
    }

    deleteMasterUser = (data) => {
        return models.master_user.update({
            soft_delete: 1,
            last_update: new Date()
        }, {
            where: {
                id_user: data.id_user
            }
        });
    }

    deleteMasterAccount = (data) => {
        return models.master_user.findOne({
            where: { id_user: data.id_user }
        }).then((result) => {
            return models.master_account.destroy({
                where: {
                    id_user: data.id_user,
                    id_account: {
                        [Op.in]: data?.master_accounts ? data?.master_accounts?.map(x => x?.id_account) : []
                    }
                }
            })
            .then((u) => { return result });
        });
    }
}
module.exports = AdminModel;