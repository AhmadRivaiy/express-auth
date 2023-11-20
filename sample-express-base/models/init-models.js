var DataTypes = require("sequelize").DataTypes;
var _log_notification = require("./log_notification");
var _master_account = require("./master_accountv2");
var _master_user = require("./master_user");
var _user_controls = require("./user_controls");

function initModels(sequelize) {
  var log_notification = _log_notification(sequelize, DataTypes);
  var master_account = _master_account(sequelize, DataTypes);
  var master_user = _master_user(sequelize, DataTypes);
  var user_controls = _user_controls(sequelize, DataTypes);

  log_notification.belongsTo(master_user, { foreignKey: "id_user"});
  master_user.hasMany(log_notification, { foreignKey: "id_user"});
  master_account.belongsTo(master_user, { foreignKey: "id_user"});
  master_user.hasMany(master_account, { foreignKey: "id_user"});
  user_controls.belongsTo(master_user, { foreignKey: "id_user"});
  master_user.hasOne(user_controls, { foreignKey: "id_user"});

  return {
    log_notification,
    master_account,
    master_user,
    user_controls,
  };
}
module.exports = initModels;
module.exports.initModels = initModels;
module.exports.default = initModels;
