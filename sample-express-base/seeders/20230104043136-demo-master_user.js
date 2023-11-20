'use strict';

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
    await queryInterface.bulkInsert({ tableName: 'master_user', schema: 'user' }, [
      {
        id_user: '17892460-693e-4e33-81e1-501b63ab91a6',
        nama_user: 'Andi',
        no_telepon: '081234567891',
        tanggal_lahir: '2000-01-01',
        tempat_lahir: 'Bandung',
        gelar: 'S.Kom., M.Kom.',
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
