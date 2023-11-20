/* jshint indent: 2 */

const Sequelize = require('sequelize');
module.exports = function(sequelize, DataTypes) {
  return sequelize.define('master_user', {
    id_user: {
      type: DataTypes.UUID,
      allowNull: false,
      primaryKey: true,
      defaultValue: Sequelize.fn('"user".uuid_generate_v4')
    },
    nama_user: {
      type: DataTypes.STRING(255),
      allowNull: true
    },
    no_telepon: {
      type: DataTypes.BIGINT,
      allowNull: true
    },
    tanggal_lahir: {
      type: DataTypes.DATEONLY,
      allowNull: true
    },
    tempat_lahir: {
      type: DataTypes.STRING(50),
      allowNull: true
    },
    gelar: {
      type: DataTypes.STRING(100),
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
    soft_delete: {
      type: DataTypes.INTEGER,
      allowNull: true,
      defaultValue: 0
    },
    nip: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    sequelize,
    tableName: 'master_user',
    schema: 'user',
    timestamps: false
  });
};
