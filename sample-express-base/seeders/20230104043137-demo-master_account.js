'use strict';

const bcrypt = require('bcrypt');
/** @type {import('sequelize-cli').Migration} */
module.exports = {
  async up(queryInterface, Sequelize) {
    /**
     * Add seed commands here.
     *
     * Example:
     * await queryInterface.bulkInsert('People', [{
     *   name: 'John Doe',
     *   isBetaMember: false
     * }], {});
    */
    const salt = await bcrypt.genSalt(10, 'a');
    const _pass = await bcrypt.hash('admin123', salt);
    await queryInterface.bulkInsert({ tableName: 'master_account', schema: 'user' }, [
      {
        id_account: Sequelize.Sequelize.fn('uuid_generate_v4'),
        id_user: '17892460-693e-4e33-81e1-501b63ab91a6',
        email: 'admin@dev.com',
        username: 'admin',
        password: _pass,
        level: 1
      }
    ]);
  },

  async down(queryInterface, Sequelize) {
    /**
     * Add commands to revert seed here.
     *
     * Example:
     * await queryInterface.bulkDelete('People', null, {});
     */
    await queryInterface.bulkDelete({ tableName: 'master_user', schema: 'user' }, null, {});
  }
};
