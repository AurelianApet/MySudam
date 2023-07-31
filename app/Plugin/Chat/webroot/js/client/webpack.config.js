var webpack = require('webpack');
var path = require('path');

var BUILD_DIR = path.resolve(__dirname, 'src/client/public/');
var APP_DIR = path.resolve(__dirname, '');
console.log(BUILD_DIR);
var config = {
    entry: APP_DIR + '/main.js',
    output: {
        path: BUILD_DIR,
        filename: 'mooChat.js'
    },
    module : {
        loaders : [
            {
                test : /\.js?/,
                include : APP_DIR,
                loader : 'babel',
                query: {compact: false}
            }
        ]
    },
    plugins: [
        /*
        new webpack.DefinePlugin({
            'process.env': {
                'NODE_ENV': JSON.stringify('production')
            }
        })
        */
    ]
};

module.exports = config;