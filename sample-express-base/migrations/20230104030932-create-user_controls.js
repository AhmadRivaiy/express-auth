'use strict';

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  async up(queryInterface, Sequelize) {
    /**
     * Add altering commands here.
     *
     * Example:
     * await queryInterface.createTable('users', { id: Sequelize.INTEGER });
     */
    await queryInterface.createTable('user_controls', {
      id_user: {
        type: Sequelize.UUID,
        allowNull: false,
        primaryKey: true,
        references: {
          model: {
            tableName: 'master_user',
            schema: 'user',
          },
          key: 'id_user'
        }
      },
      is_login: {
        type: Sequelize.BOOLEAN,
        allowNull: true,
        defaultValue: false
      },
      last_login: {
        type: Sequelize.DATE,
        allowNull: true
      },
      last_logout: {
        type: Sequelize.DATE,
        allowNull: true
      },
      fcm_token: {
        type: Sequelize.TEXT,
        allowNull: true
      }
    }, {
      tableName: 'user_controls',
      schema: 'user',
      timestamps: false,
      indexes: [
        {
          name: "user_controls_pkey",
          unique: true,
          fields: [
            { name: "id_user" },
          ]
        },
      ]
    });
  },

  async down(queryInterface, Sequelize) {
    /**
     * Add reverting commands here.
     *
     * Example:
     * await queryInterface.dropTable('users');
     */
    await queryInterface.dropTable({tableName: 'user_controls', schema: 'user'});
  }
};
