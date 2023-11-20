/* jshint indent: 2 */

const Sequelize = require('sequelize');
module.exports = function(sequelize, DataTypes) {
  return sequelize.define('user_controls', {
    id_user: {
      type: DataTypes.UUID,
      allowNull: false,
      primaryKey: true,
    },
    is_login: {
      type: DataTypes.BOOLEAN,
      allowNull: true,
      defaultValue: false
    },
    last_login: {
      type: DataTypes.DATE,
      allowNull: true
    },
    last_logout: {
      type: DataTypes.DATE,
      allowNull: true
    },
    fcm_token: {
      type: DataTypes.TEXT,
      allowNull: true
    }
  }, {
    sequelize,
    tableName: 'user_controls',
    schema: 'user',
    timestamps: false
  });
};
