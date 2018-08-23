cordova.define('cordova/plugin_list', function(require, exports, module) {
module.exports = [
  {
    "id": "com.cordova.plugins.cookiemaster.cookieMaster",
    "file": "plugins/com.cordova.plugins.cookiemaster/www/cookieMaster.js",
    "pluginId": "com.cordova.plugins.cookiemaster",
    "clobbers": [
      "cookieMaster"
    ]
  },
  {
    "id": "cordova-plugin-cookieemperor.cookieEmperor",
    "file": "plugins/cordova-plugin-cookieemperor/www/cookieEmperor.js",
    "pluginId": "cordova-plugin-cookieemperor",
    "clobbers": [
      "cookieEmperor"
    ]
  },
  {
    "id": "cordova-plugin-statusbar.statusbar",
    "file": "plugins/cordova-plugin-statusbar/www/statusbar.js",
    "pluginId": "cordova-plugin-statusbar",
    "clobbers": [
      "window.StatusBar"
    ]
  }
];
module.exports.metadata = 
// TOP OF METADATA
{
  "com.cordova.plugins.cookiemaster": "1.0.0",
  "cordova-plugin-cookieemperor": "1.0.0",
  "cordova-plugin-statusbar": "2.4.1",
  "cordova-plugin-whitelist": "1.3.3"
};
// BOTTOM OF METADATA
});