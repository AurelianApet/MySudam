var path = require('path');

var BUILD_DIR = path.resolve(__dirname, "../../../../../webroot/chat/js/client");
var APP_DIR = path.resolve(__dirname, './');

const webpack = require('webpack');

module.exports = function(configName) {
    var config ;
    switch(configName) {
        case 'webpack':
            config =  {
                entry:{
                    //'vendor':['react','react-dom','whatwg-fetch'],
                    'mooChat': APP_DIR +'/main.js',
                    'mooChat-mobile': APP_DIR +'/main-mobile.js',


                },
                output: {
                    path: BUILD_DIR,
                    filename: '[name].js',
                    //filename: '[chunkhash].[name].bundle.js'
                    libraryTarget: "umd"
                },
                module : {
                    loaders : [
                        {
                            test : /\.js?/,
                            include : APP_DIR,
                            exclude: /(node_modules|bower_components)/,
                            loader : 'babel-loader'
                        }
                    ]
                }
            };
            break;
        case 'BUILD_DIR':
            config = BUILD_DIR;
            break;
        case 'APP_DIR':
            config = APP_DIR;
            break;
        default:
            config = {};
    }
    return config;
}