<!DOCTYPE html>
{{--后台蓝色皮肤继承页--}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title','默认标题')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <style>
        .fade-enter-active, .fade-leave-active {
            transition: opacity .5s;
        }

        .fade-enter, .fade-leave-to /* .fade-leave-active 在低于版本 2.1.8 中 */
        {
            opacity: 0;
        }

        [v-cloak] {
            display: none;
        }

        .create-menu {
            background-color: #1ab394;
            border-color: #1ab394;
            float: right;
            padding: 5px 3px
        }

        .el-button--primary {
            background-color: #1ab394;
            border-color: #1ab394;
        }

        .fa {
            cursor: pointer;
        }

        .el-dropdown-menu__item a {
            color: #606266;
        }

        .el-input input:focus {
            border-color: #1ab394;
        }
    </style>
    @section('style')
    @show
</head>
<body>
<div id="app">
    <transition name="fade" mode="out-in">
        @yield('content')
    </transition>
</div>
<script src="{{ asset('/js/manifest.js') }}"></script>
<script src="{{ asset('/js/vendor.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    // 添加响应拦截器
    axios.interceptors.response.use(function (response) {
        // 对响应数据做点什么
        //return response;
        return Promise.resolve(response)
    }, function (error) {
        // 对响应错误做点什么
        //所有错误信息在这里提示
        var errorMsg='';
        switch(error.response.status){
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
                Object.keys(error.response.data.errors).forEach(function(key){
                    Vue.prototype.$message({
                        message:error.response.data.errors[key][0],
                        type:'error'
                    })
                });
                break;
            default:
                errorMsg = '网络错误';
                break;
        }
        if(errorMsg !== ''){
            Vue.prototype.$message({
                message:errorMsg,
                type:'error'
            });
        }
        return Promise.reject(error);
    });
</script>

@section('script')
@show
</body>
</html>
