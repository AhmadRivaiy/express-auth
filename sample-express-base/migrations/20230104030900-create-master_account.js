'use strict';
const bcrypt = require('bcrypt');

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  async up(queryInterface, Sequelize) {
    /**
     * Add altering commands here.
     *
     * Example:
     * await queryInterface.createTable('users', { id: Sequelize.INTEGER });
     */
    await queryInterface.createTable({ tableName: 'master_account', schema: 'user' }, {
      id_account: {
        type: Sequelize.UUID,
        allowNull: false,
        defaultValue: Sequelize.UUIDV4,
        primaryKey: true
      },
      id_user: {
        type: Sequelize.UUID,
        allowNull: false,
        references: {
          model: {
            tableName: 'master_user',
            schema: 'user',
          },
          key: 'id_user'
        }
      },
      email: {
        type: Sequelize.STRING(255),
        allowNull: true
      },
      username: {
        type: Sequelize.STRING(255),
        allowNull: true,
        unique: true
      },
      password: {
        type: Sequelize.TEXT,
        allowNull: true,
        validate: {
          min: {
            args: 6,
            msg: "Password must be more than 6 characters"
          }
        }
      },
      create_date: {
        type: Sequelize.DATE,
        allowNull: true,
        defaultValue: Sequelize.Sequelize.fn('now')
      },
      last_update: {
        type: Sequelize.DATE,
        allowNull: true
      },
      level: {
        type: Sequelize.INTEGER,
        allowNull: true
      }
    }, {
      tableName: 'master_account',
      schema: 'user',
      timestamps: false,
      indexes: [
        {
          name: "master_account_email_key",
          unique: true,
          fields: [
            { name: "email" },
          ]
        },
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
  },

  async down(queryInterface, Sequelize) {
    /**
     * Add reverting commands here.
     *
     * Example:
     * await queryInterface.dropTable('users');
     */
    await queryInterface.dropTable({ tableName: 'master_account', schema: 'user' });
  }
};
