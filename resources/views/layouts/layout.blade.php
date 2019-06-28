<!DOCTYPE html>
{{--后台绿色皮肤继承页--}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title','默认标题')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/css/index.css') }}">
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
    @section('style')
    @show
</head>
<body>
<script src="{{ asset('/js/manifest.js') }}"></script>
<script src="{{ asset('/js/vendor.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<div id="app" class="app-wrapper">
    <div id="setSidebar" class="openSidebar">
        @include('admin.components.sidebar.index')
        <div class="main-container">
            @include('admin.components.nav')
            @include('admin.components.tag')
            <section id="app-main" class="app-main">
                <transition name="fade-transform" mode="out-in">
                    <keep-alive>
                        @yield('content')
                    </keep-alive>
                </transition>
            </section>
        </div>
    </div>
</div>
<script>
    // 添加响应拦截器
    axios.interceptors.response.use(function (response) {
        // 对响应数据做点什么
        //return response;
        return Promise.resolve(response)
    }, function (error) {
        // 对响应错误做点什么
        //所有错误信息在这里提示
        var errorMsg = '';
        switch (error.response.status) {
            case 401:
                errorMsg = '没有权限';
                break;
            case 403:
                errorMsg = '操作不允许';
                break;
            case 404:
                errorMsg = '服务端错误：404';
                break;
            case 405:
                errorMsg = '服务端错误：404';
                break;
            case 500:
                errorMsg = '服务端出现错误：500';
                break;
            case 422:
                Object.keys(error.response.data.errors).forEach(function (key) {
                    Vue.prototype.$message({
                        message: error.response.data.errors[key][0],
                        type: 'error'
                    })
                });
                break;
            default:
                errorMsg = '网络错误';
                break;
        }
        if (errorMsg !== '') {
            Vue.prototype.$message({
                message: errorMsg,
                type: 'error'
            });
        }
        return Promise.reject(error);
    });
</script>
//左侧菜单栏收缩
<script>
    window.onload = function () {
        const { body } = document;
        const WIDTH = 1024;
        const RATIO = 3;
        var c = {
            isMobile: function () {
                const rect = body.getBoundingClientRect();
                return rect.width - RATIO < WIDTH
            },
            resizeHandler: function () {
                if (!document.hidden) {
                    setTimeout(function () { //防止频繁操作导致页面卡顿
                        const isMobile = c.isMobile();
                        if (isMobile) {
                            c.hideSidebar();
                        } else {
                            c.openSidebar();
                        }
                    }, 400);
                }
            },
            hideSidebar:function(){
                const setSidebar = document.getElementById('setSidebar');
                setSidebar.classList.add("hideSidebar");
                setSidebar.classList.remove("openSidebar");
                sideinde.$data.isCollapse = true; console.log(sideinde);
            },
            openSidebar:function(){
                const setSidebar = document.getElementById('setSidebar');
                setSidebar.classList.add("openSidebar");
                setSidebar.classList.remove("hideSidebar");
                sideinde.$data.isCollapse = false;
                console.log(sideinde);
            },
            hamburger:function(){
                const setSidebar = document.getElementById('setSidebar');
                if(setSidebar.classList.value.indexOf('openSidebar') > -1){
                    c.hideSidebar();
                }else if(setSidebar.classList.value.indexOf('hideSidebar') > -1){
                    c.openSidebar();
                }
            }
        };
        //监听页面尺寸变化
        window.addEventListener('resize', c.resizeHandler);
        //初始化
        c.resizeHandler();
        //nav 三横点击
        document.getElementById("hamburger").onclick = c.hamburger;

    }
</script>
@section('script')

@show
</body>
</html>