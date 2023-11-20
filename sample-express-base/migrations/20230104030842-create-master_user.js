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
    await queryInterface.createTable('master_user', {
      id_user: {
        type: Sequelize.UUID,
        allowNull: false,
        defaultValue: Sequelize.UUIDV4,
        primaryKey: true
      },
      nama_user: {
        type: Sequelize.STRING(255),
        allowNull: true
      },
      no_telepon: {
        type: Sequelize.BIGINT,
        allowNull: true
      },
      tanggal_lahir: {
        type: Sequelize.DATEONLY,
        allowNull: true
      },
      tempat_lahir: {
        type: Sequelize.STRING(50),
        allowNull: true
      },
      gelar: {
        type: Sequelize.STRING(100),
        allowNull: true
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
      soft_delete: {
        type: Sequelize.INTEGER,
        allowNull: true,
        defaultValue: 0
      }
    }, {
      tableName: 'master_user',
      schema: 'user',
      timestamps: false,
      indexes: [
        {
          name: "master_user_no_telepon_key",
          unique: true,
          fields: [
            { name: "no_telepon" },
          ]
        },
        {
          name: "master_user_pkey",
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
    await queryInterface.dropTable({tableName: 'master_user', schema: 'user'});
  }
};
