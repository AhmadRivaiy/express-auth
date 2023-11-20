const Sequelize = require('sequelize');
const bcrypt = require('bcrypt');

module.exports = function (sequelize, DataTypes) {
  var masterAccount = sequelize.define('master_account', {
    id_account: {
      type: DataTypes.UUID,
      allowNull: false,
      primaryKey: true,
      defaultValue: Sequelize.fn('"user".uuid_generate_v4')
    },
    id_user: {
      type: DataTypes.UUID,
      allowNull: false
    },
    email: {
      type: DataTypes.STRING(255),
      allowNull: true
    },
    password: {
      type: DataTypes.TEXT,
      allowNull: true
    },
    create_date: {
      type: DataTypes.DATE,
      allowNull: true,
      defaultValue: Sequelize.fn('now')
    },
    last_update: {
      type: DataTypes.DATE,
      allowNull: true
    },
    username: {
      type: DataTypes.STRING(255),
      allowNull: true
    },
    level: {
      type: DataTypes.BIGINT,
      allowNull: true
    }
  }, {
    sequelize,
    tableName: 'master_account',
    schema: 'user',
    timestamps: false,
    indexes: [
      {
        name: "master_account_pkey",
        unique: true,
        fields: [
          { name: "id_account" },
        ]
      },
    ],
    hooks: {
      beforeCreate: async function (user) {
        const salt = await bcrypt.genSalt(10, 'a');
        user.password = await bcrypt.hash(user.password, salt);
      },
      beforeUpdate: async function (user) {
        if (user.changed('password')) {
          const salt = await bcrypt.genSalt(10, 'a');
          user.password = await bcrypt.hash(user.get('password'), salt);
        }
      },
    },
  });

  masterAccount.prototype.validPassword = async function (password) {
    return await bcrypt.compare(password, this.password);
  }

  return masterAccount;
};