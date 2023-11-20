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
    await queryInterface.createTable({ tableName: 'log_notification', schema: 'user' }, {
      id_log_notification: {
        type: Sequelize.UUID,
        allowNull: false,
        defaultValue: Sequelize.UUIDV4,
        primaryKey: true
      },
      id_user: {
        type: Sequelize.UUID,
        allowNull: true,
        references: {
          model: {
            tableName: 'master_user',
            schema: 'user',
          },
          key: 'id_user'
        }
      },
      tag: {
        type: Sequelize.STRING,
        allowNull: true
      },
      routes_to: {
        type: Sequelize.STRING,
        allowNull: true
      },
      is_viewed: {
        type: Sequelize.INTEGER,
        allowNull: true
      },
      title: {
        type: Sequelize.TEXT,
        allowNull: true
      },
      message: {
        type: Sequelize.TEXT,
        allowNull: true
      },
      create_date: {
        type: Sequelize.DATE,
        allowNull: true,
        defaultValue: Sequelize.Sequelize.fn('now')
      },
    }, {
      tableName: 'log_notification',
      schema: 'user',
      timestamps: false,
      indexes: [
        {
          name: "log_notification_pkey",
          unique: true,
          fields: [
            { name: "id_log_notification" },
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
    await queryInterface.dropTable({ tableName: 'log_notification', schema: 'user' });
  }
};
