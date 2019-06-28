<html>
<head>
    <link rel="shortcut icon" href="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <style>
        ul, li {
            padding: 0;
            margin: 0;
            list-style: none
        }

        li {
            color: red;
        }
    </style>
</head>
<body>
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">+C+</h1>
        </div>
        <h3>欢迎使用cms后台系统</h3>
        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif
        <form class="m-t" id="formss" role="form" method="post" action="/admin/login">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="uname" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码" required="">
            </div>
            <button type="submit" id="dologin" class="btn btn-primary block full-width m-b">登 录
            </button>
        </form>
    </div>
</div>
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<!-- layer javascript -->
<script src="{{ asset('admin/js/layer/layer.min.js') }}"></script>
</body>
</html>