/* jshint indent: 2 */

const Sequelize = require('sequelize');
module.exports = function(sequelize, DataTypes) {
  return sequelize.define('log_notification', {
    id_log_notification: {
      type: DataTypes.UUID,
      allowNull: false,
      primaryKey: true
    },
    id_user: {
      type: DataTypes.UUID,
      allowNull: true
    },
    tag: {
      type: DataTypes.STRING(255),
      allowNull: true
    },
    routes_to: {
      type: DataTypes.STRING(255),
      allowNull: true
    },
    is_viewed: {
      type: DataTypes.INTEGER,
      allowNull: true
    },
    title: {
      type: DataTypes.TEXT,
      allowNull: true
    },
    message: {
      type: DataTypes.TEXT,
      allowNull: true
    },
    create_date: {
      type: DataTypes.DATE,
      allowNull: true,
      defaultValue: Sequelize.fn('now')
    }
  }, {
    sequelize,
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
};
