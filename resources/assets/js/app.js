
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');



//vue相关包都可以写在这个文件中
window.Vue = require('vue');
window.Element = require('element-ui') ;
window.upperFirst = require('lodash/upperFirst');//首字母大写
window.camelCase = require('lodash/camelCase'); //驼峰
window.kebabCase = require('lodash/kebabCase'); //短横线连接
Vue.use(Element);
// // 注册全局组件
const requireComponent = require.context(
    // components 文件夹的相对路径
    './components',
    // 是否查找子文件夹
    true,
    // 用于匹配组件文件名的正则表达式
    /[A-Z]\w+\.(vue)$/
);
//以下部分代码在vue手册组件部分拷贝
//组件名为 目录名-文件名  没有目录则省略
requireComponent.keys().forEach(fileName => {
    // 获取组件配置
    const componentConfig = requireComponent(fileName)

    // 取得组件的 Pascal 式命名
    const componentName = kebabCase(
        upperFirst(
            camelCase(
                // 将文件名前面的 `./` 和扩展名剥离
                fileName.replace(/^\.\/(.*)\.\w+$/, '$1')
            )
        )
    );

// 以全局方式注册组件
Vue.component(
    componentName,
    // 如果组件是通过 `export default` 导出，
    // 则在 `.default` 中，查找组件选项，
    // 否则回退至模块根对象中，查找组件选项
    componentConfig.default || componentConfig
);
//异步组件 使用时才加载
})
// const app = new Vue({
//     el: '#app'
// });

