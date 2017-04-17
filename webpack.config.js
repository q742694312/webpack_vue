/**
 * Created by t on 2017/4/10.
 */

module.exports = {
    //入口文件
    entry: './src/js/main.js',
    output: {
        //输出目录，没有则新建
        path : __dirname+'/build/',
        //文件名
        filename: 'build.js'
    },
    resolve: {
        alias: {vue: 'vue/dist/vue.js'}
    },
    module: {
        loaders: [
            //用来解析vue后缀的文件
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            //用babel来解析js文件并把es6的语法转换成浏览器认识的语法
            {
                test: /\.js$/,
                loader: 'babel-loader',
                /* 排除模块安装目录的文件 */
                exclude: /node_modules/
            },
            //解析图片
            {
                test: /\.(png|jpg)$/,
                loader: 'url-loader?limit=8192'
            },
            //解析svg
            {
                test: /\.svg$/,
                loader: 'svg-url-loader?limit=8192'
            }
        ]
    },
    devServer : {
        contentBase : './build',
        colors : true,
        inline : true
    }
};