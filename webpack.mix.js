let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/index.scss', 'public/admin/css') //后台专用
    .extract(['vue', 'element-ui', 'axios']);
//严格的加载顺序
//public/js/manifest.js: Webpack 运行的内容清单
//public/js/vendor.js: 依赖库
//public/js/app.js: 应用代码

