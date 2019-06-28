<!DOCTYPE html>
{{--后台蓝色皮肤布局页--}}
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title> 模块后台展示 </title>
    <meta name="keywords" content="">
    <meta name="description" content=" ">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="{{ asset('admin/images/profile_small.jpg') }}"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">

                            <li><a href="/admin/logout">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                @foreach($tree as $t)
                    @if(empty($t['child']))
                        <li>
                            <a class="J_menuItem" href="{{ $t['route'] }}" data-index="{{ $t['id'] }}"><i
                                        class="{{ $t['icon'] }}"></i> <span
                                        class="nav-label">{{$t['title']}}</span></a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $t['route'] }}" data-index="{{ $t['id'] }}">
                                <i class="{{ $t['icon'] }}"></i>
                                <span class="nav-label">{{$t['stitle']}}</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a data-index="{{ $t['id'] }}" class="J_menuItem"
                                       href="{{ $t['route'] }}">{{$t['title']}}</a>
                                </li>
                                @foreach($t['child'] as $v)
                                    <li>
                                        <a class="J_menuItem" data-index="{{$v['id']}}"
                                           href="{{ $v['route'] }}">{{$v['title']}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search"
                                   id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    {{--<li class="hidden-xs">--}}
                        {{--<a onclick='window.open("{:url('index/index/index')}")' target="_blank" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i> 前台首页</a>--}}
                    {{--</li>--}}
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 主题
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="javascript:void(0);" class="skin" data-skin="index" style="color: #409eff;">深蓝</a></li>
                            <li><a href="javascript:void(0);" class="skin" data-skin="layout" style="color: #67c23a;">深绿</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="{:url('admin/index/index')}">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>
                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="/admin/logout" class="roll-nav roll-right J_tabExit"><i
                        class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="" frameborder="0"
                    data-id="{url('admin/index/mains')}" seamless>
            </iframe>
        </div>
        <div class="footer">
            <div class="pull-right"></a>
            </div>
        </div>
    </div>
    <!--右侧边栏结束-->
</div>
<!-- 全局js -->
<script src="{{ asset('admin/js/jquery-1.9.1.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- 自定义js -->
<script src="{{ asset('admin/js/hplus.js') }}"></script>
<script src="{{ asset('admin/js/contabs.js') }}"></script>
<script>
</script>
<!-- 第三方插件 -->
<script src="{{ asset('admin/js/plugins/pace/pace.min.js') }}"></script>
<script>
    $(function(){
        $(document).on('click','.skin',function(){
            $.ajax({
                url:'/admin/skin',
                type:'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{skin:$(this).data('skin')},
                success:function(re){
                    window.location.reload();
                },
                error:function(err){
                    alert('网路错误，切换失败');
                }
            })
        })
    })
</script>
</body>
</html>
