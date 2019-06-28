{{--
2019/05/23 15:34
luther@apjfx.com
依赖 vue element-ui font-awesome
vue 中使用 setFontAwesome 方法接收 值为例:fa-address-book-o
--}}
<template>
    <div>
        <el-button @click.native="showFont">图标</el-button>
        <el-dialog
                :visible.sync="dialogVisible_fontAwesome"
                element-loading-text="拼命加载中"
                element-loading-spinner="el-icon-loading"
                element-loading-background="rgba(0, 0, 0, 0.8)"
                width="80%">
            <div class="container">
                <el-dropdown trigger="click">
                    <el-button class="el-dropdown-link">
                        图标
                    </el-button>
                    <el-dropdown-menu slot="dropdown">
                        <el-dropdown-item>&nbsp; <a href="#new">图标</a></el-dropdown-item>
                        <li class="divider"></li>
                        <el-dropdown-item>&nbsp;<a href="#new"> 4.7.0版新增</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp;<a href="#web-application">网页</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp;<a href="#hand">手势</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#accessibility">辅助功能</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#transportation">运输</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#gender">性别</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#file-type">文件类型</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#spinner">可旋转</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp;<a href="#form-control">表单</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#payment">支付</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp;<a href="#chart">图表</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#currency">货币</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#text-editor">文本编辑</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#directional">指示方向</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#video-player">视频播放</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#brand">标志</a></el-dropdown-item>
                        <el-dropdown-item>&nbsp; <a href="#medical">医疗</a></el-dropdown-item>
                    </el-dropdown-menu>
                </el-dropdown>
                <div id="new" class="mainParts">
                    <h2 class="page-header">4.7.0版新增41个全新的图标</h2>
                    <el-row>
                        <el-col :span="1">
                            <el-col :span="1"><i title="fa-address-book" @click="setFontAwesome('fa fa-address-book')" class="fa fa-address-book" aria-hidden="true"></i></el-col>
                        </el-col>
                        <el-col :span="1"><i title="fa-address-book-o" @click="setFontAwesome('fa fa-address-book-o')" class="fa fa-address-book-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-address-card" @click="setFontAwesome('fa fa-address-card')" class="fa fa-address-card" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-address-card-o" @click="setFontAwesome('fa fa-address-card-o')" class="fa fa-address-card-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-bandcamp" @click="setFontAwesome('fa fa-bandcamp')" class="fa fa-bandcamp" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-bath" @click="setFontAwesome('fa fa-bath')" class="fa fa-bath" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-bathtub" @click="setFontAwesome('fa fa-bathtub')" class="fa fa-bathtub" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-drivers-license" @click="setFontAwesome('fa fa-drivers-license')" class="fa fa-drivers-license" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-drivers-license-o" @click="setFontAwesome('fa fa-drivers-license-o')" class="fa fa-drivers-license-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-eercast" @click="setFontAwesome('fa fa-eercast')" class="fa fa-eercast" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-envelope-open" @click="setFontAwesome('fa fa-envelope-open')" class="fa fa-envelope-open" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-envelope-open-o" @click="setFontAwesome('fa fa-envelope-open-o')" class="fa fa-envelope-open-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-etsy" @click="setFontAwesome('fa fa-etsy')" class="fa fa-etsy" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-free-code-camp" @click="setFontAwesome('fa fa-free-code-camp')" class="fa fa-free-code-camp" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-grav" @click="setFontAwesome('fa fa-grav')" class="fa fa-grav" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-handshake-o" @click="setFontAwesome('fa fa-handshake-o')" class="fa fa-handshake-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-id-badge" @click="setFontAwesome('fa fa-id-badge')" class="fa fa-id-badge" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-id-card" @click="setFontAwesome('fa fa-id-card')" class="fa fa-id-card" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-id-card-o" @click="setFontAwesome('fa fa-id-card-o')" class="fa fa-id-card-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-imdb" @click="setFontAwesome('fa fa-imdb')" class="fa fa-imdb" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-linode" @click="setFontAwesome('fa fa-linode')" class="fa fa-linode" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-meetup" @click="setFontAwesome('fa fa-meetup')" class="fa fa-meetup" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-microchip" @click="setFontAwesome('fa fa-microchip')" class="fa fa-microchip" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-podcast" @click="setFontAwesome('fa fa-podcast')" class="fa fa-podcast" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-quora" @click="setFontAwesome('fa fa-quora')" class="fa fa-quora" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-ravelry" @click="setFontAwesome('fa fa-ravelry')" class="fa fa-ravelry" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-s15" @click="setFontAwesome('fa fa-s15')" class="fa fa-s15" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-shower" @click="setFontAwesome('fa fa-shower')" class="fa fa-shower" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-snowflake-o" @click="setFontAwesome('fa fa-snowflake-o')" class="fa fa-snowflake-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-superpowers" @click="setFontAwesome('fa fa-superpowers')" class="fa fa-superpowers" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-telegram" @click="setFontAwesome('fa fa-telegram')" class="fa fa-telegram" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer" @click="setFontAwesome('fa fa-thermometer')" class="fa fa-thermometer" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-0" @click="setFontAwesome('fa fa-thermometer-0')" class="fa fa-thermometer-0" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-1" @click="setFontAwesome('fa fa-thermometer-1')" class="fa fa-thermometer-1" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-2" @click="setFontAwesome('fa fa-thermometer-2')" class="fa fa-thermometer-2" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-3" @click="setFontAwesome('fa fa-thermometer-3')" class="fa fa-thermometer-3" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-4" @click="setFontAwesome('fa fa-thermometer-4')" class="fa fa-thermometer-4" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-empty" @click="setFontAwesome('fa fa-thermometer-empty')" class="fa fa-thermometer-empty" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-full" @click="setFontAwesome('fa fa-thermometer-full')" class="fa fa-thermometer-full" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-half" @click="setFontAwesome('fa fa-thermometer-half')" class="fa fa-thermometer-half" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-quarter" @click="setFontAwesome('fa fa-thermometer-quarter')" class="fa fa-thermometer-quarter" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-thermometer-three-quarters" @click="setFontAwesome('fa fa-thermometer-three-quarters')" class="fa fa-thermometer-three-quarters" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-times-rectangle" @click="setFontAwesome('fa fa-times-rectangle')" class="fa fa-times-rectangle" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-times-rectangle-o" @click="setFontAwesome('fa fa-times-rectangle-o')" class="fa fa-times-rectangle-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-user-circle" @click="setFontAwesome('fa fa-user-circle')" class="fa fa-user-circle" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-user-circle-o" @click="setFontAwesome('fa fa-user-circle-o')" class="fa fa-user-circle-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-user-o" @click="setFontAwesome('fa fa-user-o')" class="fa fa-user-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-vcard" @click="setFontAwesome('fa fa-vcard')" class="fa fa-vcard" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-vcard-o" @click="setFontAwesome('fa fa-vcard-o')" class="fa fa-vcard-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-window-close" @click="setFontAwesome('fa fa-window-close')" class="fa fa-window-close" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-window-close-o" @click="setFontAwesome('fa fa-window-close-o')" class="fa fa-window-close-o" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-window-maximize" @click="setFontAwesome('fa fa-window-maximize')" class="fa fa-window-maximize" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-window-minimize" @click="setFontAwesome('fa fa-window-minimize')" class="fa fa-window-minimize" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-window-restore" @click="setFontAwesome('fa fa-window-restore')" class="fa fa-window-restore" aria-hidden="true"></i></el-col>
                        <el-col :span="1"><i title="fa-wpexplorer" @click="setFontAwesome('fa fa-wpexplorer')" class="fa fa-wpexplorer" aria-hidden="true"></i></el-col>
                    </el-row>
                </div>
                <div>
                    <section id="web-application" class="mainParts">
                        <h2 class="page-header">网页</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-address-book" @click="setFontAwesome('fa fa-address-book')" class="fa fa-address-book" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-address-book-o" @click="setFontAwesome('fa fa-address-book-o')" class="fa fa-address-book-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-address-card" @click="setFontAwesome('fa fa-address-card')" class="fa fa-address-card" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-address-card-o" @click="setFontAwesome('fa fa-address-card-o')" class="fa fa-address-card-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-adjust" @click="setFontAwesome('fa fa-adjust')" class="fa fa-adjust" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-american-sign-language-interpreting" @click="setFontAwesome('fa fa-american-sign-language-interpreting')" class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-anchor" @click="setFontAwesome('fa fa-anchor')" class="fa fa-anchor" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-archive" @click="setFontAwesome('fa fa-archive')" class="fa fa-archive" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-area-chart" @click="setFontAwesome('fa fa-area-chart')" class="fa fa-area-chart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrows" @click="setFontAwesome('fa fa-arrows')" class="fa fa-arrows" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrows-h" @click="setFontAwesome('fa fa-arrows-h')" class="fa fa-arrows-h" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrows-v" @click="setFontAwesome('fa fa-arrows-v')" class="fa fa-arrows-v" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-asl-interpreting" @click="setFontAwesome('fa fa-asl-interpreting')" class="fa fa-asl-interpreting" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-assistive-listening-systems" @click="setFontAwesome('fa fa-assistive-listening-systems')" class="fa fa-assistive-listening-systems" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-asterisk" @click="setFontAwesome('fa fa-asterisk')" class="fa fa-asterisk" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-at" @click="setFontAwesome('fa fa-at')" class="fa fa-at" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-audio-description" @click="setFontAwesome('fa fa-audio-description')" class="fa fa-audio-description" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-automobile" @click="setFontAwesome('fa fa-automobile')" class="fa fa-automobile" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-balance-scale" @click="setFontAwesome('fa fa-balance-scale')" class="fa fa-balance-scale" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ban" @click="setFontAwesome('fa fa-ban')" class="fa fa-ban" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bank" @click="setFontAwesome('fa fa-bank')" class="fa fa-bank" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bar-chart" @click="setFontAwesome('fa fa-bar-chart')" class="fa fa-bar-chart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bar-chart-o" @click="setFontAwesome('fa fa-bar-chart-o')" class="fa fa-bar-chart-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-barcode" @click="setFontAwesome('fa fa-barcode')" class="fa fa-barcode" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bars" @click="setFontAwesome('fa fa-bars')" class="fa fa-bars" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bath" @click="setFontAwesome('fa fa-bath')" class="fa fa-bath" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bathtub" @click="setFontAwesome('fa fa-bathtub')" class="fa fa-bathtub" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery" @click="setFontAwesome('fa fa-battery')" class="fa fa-battery" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-0" @click="setFontAwesome('fa fa-battery-0')" class="fa fa-battery-0" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-1" @click="setFontAwesome('fa fa-battery-1')" class="fa fa-battery-1" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-2" @click="setFontAwesome('fa fa-battery-2')" class="fa fa-battery-2" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-3" @click="setFontAwesome('fa fa-battery-3')" class="fa fa-battery-3" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-4" @click="setFontAwesome('fa fa-battery-4')" class="fa fa-battery-4" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-empty" @click="setFontAwesome('fa fa-battery-empty')" class="fa fa-battery-empty" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-full" @click="setFontAwesome('fa fa-battery-full')" class="fa fa-battery-full" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-half" @click="setFontAwesome('fa fa-battery-half')" class="fa fa-battery-half" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-quarter" @click="setFontAwesome('fa fa-battery-quarter')" class="fa fa-battery-quarter" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-battery-three-quarters" @click="setFontAwesome('fa fa-battery-three-quarters')" class="fa fa-battery-three-quarters" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bed" @click="setFontAwesome('fa fa-bed')" class="fa fa-bed" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-beer" @click="setFontAwesome('fa fa-beer')" class="fa fa-beer" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bell" @click="setFontAwesome('fa fa-bell')" class="fa fa-bell" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bell-o" @click="setFontAwesome('fa fa-bell-o')" class="fa fa-bell-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bell-slash" @click="setFontAwesome('fa fa-bell-slash')" class="fa fa-bell-slash" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bell-slash-o" @click="setFontAwesome('fa fa-bell-slash-o')" class="fa fa-bell-slash-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bicycle" @click="setFontAwesome('fa fa-bicycle')" class="fa fa-bicycle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-binoculars" @click="setFontAwesome('fa fa-binoculars')" class="fa fa-binoculars" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-birthday-cake" @click="setFontAwesome('fa fa-birthday-cake')" class="fa fa-birthday-cake" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-blind" @click="setFontAwesome('fa fa-blind')" class="fa fa-blind" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bluetooth" @click="setFontAwesome('fa fa-bluetooth')" class="fa fa-bluetooth" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bluetooth-b" @click="setFontAwesome('fa fa-bluetooth-b')" class="fa fa-bluetooth-b" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bolt" @click="setFontAwesome('fa fa-bolt')" class="fa fa-bolt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bomb" @click="setFontAwesome('fa fa-bomb')" class="fa fa-bomb" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-book" @click="setFontAwesome('fa fa-book')" class="fa fa-book" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bookmark" @click="setFontAwesome('fa fa-bookmark')" class="fa fa-bookmark" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bookmark-o" @click="setFontAwesome('fa fa-bookmark-o')" class="fa fa-bookmark-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-braille" @click="setFontAwesome('fa fa-braille')" class="fa fa-braille" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-briefcase" @click="setFontAwesome('fa fa-briefcase')" class="fa fa-briefcase" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bug" @click="setFontAwesome('fa fa-bug')" class="fa fa-bug" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-building" @click="setFontAwesome('fa fa-building')" class="fa fa-building" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-building-o" @click="setFontAwesome('fa fa-building-o')" class="fa fa-building-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bullhorn" @click="setFontAwesome('fa fa-bullhorn')" class="fa fa-bullhorn" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bullseye" @click="setFontAwesome('fa fa-bullseye')" class="fa fa-bullseye" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bus" @click="setFontAwesome('fa fa-bus')" class="fa fa-bus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cab" @click="setFontAwesome('fa fa-cab')" class="fa fa-cab" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-calculator" @click="setFontAwesome('fa fa-calculator')" class="fa fa-calculator" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-calendar" @click="setFontAwesome('fa fa-calendar')" class="fa fa-calendar" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-calendar-check-o" @click="setFontAwesome('fa fa-calendar-check-o')" class="fa fa-calendar-check-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-calendar-minus-o" @click="setFontAwesome('fa fa-calendar-minus-o')" class="fa fa-calendar-minus-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-calendar-o" @click="setFontAwesome('fa fa-calendar-o')" class="fa fa-calendar-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-calendar-plus-o" @click="setFontAwesome('fa fa-calendar-plus-o')" class="fa fa-calendar-plus-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-calendar-times-o" @click="setFontAwesome('fa fa-calendar-times-o')" class="fa fa-calendar-times-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-camera" @click="setFontAwesome('fa fa-camera')" class="fa fa-camera" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-camera-retro" @click="setFontAwesome('fa fa-camera-retro')" class="fa fa-camera-retro" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-car" @click="setFontAwesome('fa fa-car')" class="fa fa-car" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-down" @click="setFontAwesome('fa fa-caret-square-o-down')" class="fa fa-caret-square-o-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-left" @click="setFontAwesome('fa fa-caret-square-o-left')" class="fa fa-caret-square-o-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-right" @click="setFontAwesome('fa fa-caret-square-o-right')" class="fa fa-caret-square-o-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-up" @click="setFontAwesome('fa fa-caret-square-o-up')" class="fa fa-caret-square-o-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cart-arrow-down" @click="setFontAwesome('fa fa-cart-arrow-down')" class="fa fa-cart-arrow-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cart-plus" @click="setFontAwesome('fa fa-cart-plus')" class="fa fa-cart-plus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc" @click="setFontAwesome('fa fa-cc')" class="fa fa-cc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-certificate" @click="setFontAwesome('fa fa-certificate')" class="fa fa-certificate" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-check" @click="setFontAwesome('fa fa-check')" class="fa fa-check" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-check-circle" @click="setFontAwesome('fa fa-check-circle')" class="fa fa-check-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-check-circle-o" @click="setFontAwesome('fa fa-check-circle-o')" class="fa fa-check-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-check-square" @click="setFontAwesome('fa fa-check-square')" class="fa fa-check-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-check-square-o" @click="setFontAwesome('fa fa-check-square-o')" class="fa fa-check-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-child" @click="setFontAwesome('fa fa-child')" class="fa fa-child" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-circle" @click="setFontAwesome('fa fa-circle')" class="fa fa-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-circle-o" @click="setFontAwesome('fa fa-circle-o')" class="fa fa-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-circle-o-notch" @click="setFontAwesome('fa fa-circle-o-notch')" class="fa fa-circle-o-notch" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-circle-thin" @click="setFontAwesome('fa fa-circle-thin')" class="fa fa-circle-thin" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-clock-o" @click="setFontAwesome('fa fa-clock-o')" class="fa fa-clock-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-clone" @click="setFontAwesome('fa fa-clone')" class="fa fa-clone" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-close" @click="setFontAwesome('fa fa-close')" class="fa fa-close" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cloud" @click="setFontAwesome('fa fa-cloud')" class="fa fa-cloud" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cloud-download" @click="setFontAwesome('fa fa-cloud-download')" class="fa fa-cloud-download" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cloud-upload" @click="setFontAwesome('fa fa-cloud-upload')" class="fa fa-cloud-upload" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-code" @click="setFontAwesome('fa fa-code')" class="fa fa-code" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-code-fork" @click="setFontAwesome('fa fa-code-fork')" class="fa fa-code-fork" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-coffee" @click="setFontAwesome('fa fa-coffee')" class="fa fa-coffee" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cog" @click="setFontAwesome('fa fa-cog')" class="fa fa-cog" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cogs" @click="setFontAwesome('fa fa-cogs')" class="fa fa-cogs" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-comment" @click="setFontAwesome('fa fa-comment')" class="fa fa-comment" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-comment-o" @click="setFontAwesome('fa fa-comment-o')" class="fa fa-comment-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-commenting" @click="setFontAwesome('fa fa-commenting')" class="fa fa-commenting" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-commenting-o" @click="setFontAwesome('fa fa-commenting-o')" class="fa fa-commenting-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-comments" @click="setFontAwesome('fa fa-comments')" class="fa fa-comments" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-comments-o" @click="setFontAwesome('fa fa-comments-o')" class="fa fa-comments-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-compass" @click="setFontAwesome('fa fa-compass')" class="fa fa-compass" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-copyright" @click="setFontAwesome('fa fa-copyright')" class="fa fa-copyright" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-creative-commons" @click="setFontAwesome('fa fa-creative-commons')" class="fa fa-creative-commons" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-credit-card" @click="setFontAwesome('fa fa-credit-card')" class="fa fa-credit-card" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-credit-card-alt" @click="setFontAwesome('fa fa-credit-card-alt')" class="fa fa-credit-card-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-crop" @click="setFontAwesome('fa fa-crop')" class="fa fa-crop" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-crosshairs" @click="setFontAwesome('fa fa-crosshairs')" class="fa fa-crosshairs" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cube" @click="setFontAwesome('fa fa-cube')" class="fa fa-cube" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cubes" @click="setFontAwesome('fa fa-cubes')" class="fa fa-cubes" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cutlery" @click="setFontAwesome('fa fa-cutlery')" class="fa fa-cutlery" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dashboard" @click="setFontAwesome('fa fa-dashboard')" class="fa fa-dashboard" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-database" @click="setFontAwesome('fa fa-database')" class="fa fa-database" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-deaf" @click="setFontAwesome('fa fa-deaf')" class="fa fa-deaf" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-deafness" @click="setFontAwesome('fa fa-deafness')" class="fa fa-deafness" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-desktop" @click="setFontAwesome('fa fa-desktop')" class="fa fa-desktop" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-diamond" @click="setFontAwesome('fa fa-diamond')" class="fa fa-diamond" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dot-circle-o" @click="setFontAwesome('fa fa-dot-circle-o')" class="fa fa-dot-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-download" @click="setFontAwesome('fa fa-download')" class="fa fa-download" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-drivers-license" @click="setFontAwesome('fa fa-drivers-license')" class="fa fa-drivers-license" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-drivers-license-o" @click="setFontAwesome('fa fa-drivers-license-o')" class="fa fa-drivers-license-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-edit" @click="setFontAwesome('fa fa-edit')" class="fa fa-edit" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ellipsis-h" @click="setFontAwesome('fa fa-ellipsis-h')" class="fa fa-ellipsis-h" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ellipsis-v" @click="setFontAwesome('fa fa-ellipsis-v')" class="fa fa-ellipsis-v" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-envelope" @click="setFontAwesome('fa fa-envelope')" class="fa fa-envelope" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-envelope-o" @click="setFontAwesome('fa fa-envelope-o')" class="fa fa-envelope-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-envelope-open" @click="setFontAwesome('fa fa-envelope-open')" class="fa fa-envelope-open" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-envelope-open-o" @click="setFontAwesome('fa fa-envelope-open-o')" class="fa fa-envelope-open-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-envelope-square" @click="setFontAwesome('fa fa-envelope-square')" class="fa fa-envelope-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eraser" @click="setFontAwesome('fa fa-eraser')" class="fa fa-eraser" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-exchange" @click="setFontAwesome('fa fa-exchange')" class="fa fa-exchange" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-exclamation" @click="setFontAwesome('fa fa-exclamation')" class="fa fa-exclamation" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-exclamation-circle" @click="setFontAwesome('fa fa-exclamation-circle')" class="fa fa-exclamation-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-exclamation-triangle" @click="setFontAwesome('fa fa-exclamation-triangle')" class="fa fa-exclamation-triangle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-external-link" @click="setFontAwesome('fa fa-external-link')" class="fa fa-external-link" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-external-link-square" @click="setFontAwesome('fa fa-external-link-square')" class="fa fa-external-link-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eye" @click="setFontAwesome('fa fa-eye')" class="fa fa-eye" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eye-slash" @click="setFontAwesome('fa fa-eye-slash')" class="fa fa-eye-slash" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eyedropper" @click="setFontAwesome('fa fa-eyedropper')" class="fa fa-eyedropper" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fax" @click="setFontAwesome('fa fa-fax')" class="fa fa-fax" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-feed" @click="setFontAwesome('fa fa-feed')" class="fa fa-feed" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-female" @click="setFontAwesome('fa fa-female')" class="fa fa-female" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fighter-jet" @click="setFontAwesome('fa fa-fighter-jet')" class="fa fa-fighter-jet" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-archive-o" @click="setFontAwesome('fa fa-file-archive-o')" class="fa fa-file-archive-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-audio-o" @click="setFontAwesome('fa fa-file-audio-o')" class="fa fa-file-audio-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-code-o" @click="setFontAwesome('fa fa-file-code-o')" class="fa fa-file-code-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-excel-o" @click="setFontAwesome('fa fa-file-excel-o')" class="fa fa-file-excel-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-image-o" @click="setFontAwesome('fa fa-file-image-o')" class="fa fa-file-image-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-movie-o" @click="setFontAwesome('fa fa-file-movie-o')" class="fa fa-file-movie-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-pdf-o" @click="setFontAwesome('fa fa-file-pdf-o')" class="fa fa-file-pdf-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-photo-o" @click="setFontAwesome('fa fa-file-photo-o')" class="fa fa-file-photo-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-picture-o" @click="setFontAwesome('fa fa-file-picture-o')" class="fa fa-file-picture-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-powerpoint-o" @click="setFontAwesome('fa fa-file-powerpoint-o')" class="fa fa-file-powerpoint-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-sound-o" @click="setFontAwesome('fa fa-file-sound-o')" class="fa fa-file-sound-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-video-o" @click="setFontAwesome('fa fa-file-video-o')" class="fa fa-file-video-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-word-o" @click="setFontAwesome('fa fa-file-word-o')" class="fa fa-file-word-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-zip-o" @click="setFontAwesome('fa fa-file-zip-o')" class="fa fa-file-zip-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-film" @click="setFontAwesome('fa fa-film')" class="fa fa-film" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-filter" @click="setFontAwesome('fa fa-filter')" class="fa fa-filter" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fire" @click="setFontAwesome('fa fa-fire')" class="fa fa-fire" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fire-extinguisher" @click="setFontAwesome('fa fa-fire-extinguisher')" class="fa fa-fire-extinguisher" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-flag" @click="setFontAwesome('fa fa-flag')" class="fa fa-flag" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-flag-checkered" @click="setFontAwesome('fa fa-flag-checkered')" class="fa fa-flag-checkered" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-flag-o" @click="setFontAwesome('fa fa-flag-o')" class="fa fa-flag-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-flash" @click="setFontAwesome('fa fa-flash')" class="fa fa-flash" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-flask" @click="setFontAwesome('fa fa-flask')" class="fa fa-flask" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-folder" @click="setFontAwesome('fa fa-folder')" class="fa fa-folder" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-folder-o" @click="setFontAwesome('fa fa-folder-o')" class="fa fa-folder-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-folder-open" @click="setFontAwesome('fa fa-folder-open')" class="fa fa-folder-open" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-folder-open-o" @click="setFontAwesome('fa fa-folder-open-o')" class="fa fa-folder-open-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-frown-o" @click="setFontAwesome('fa fa-frown-o')" class="fa fa-frown-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-futbol-o" @click="setFontAwesome('fa fa-futbol-o')" class="fa fa-futbol-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gamepad" @click="setFontAwesome('fa fa-gamepad')" class="fa fa-gamepad" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gavel" @click="setFontAwesome('fa fa-gavel')" class="fa fa-gavel" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gear" @click="setFontAwesome('fa fa-gear')" class="fa fa-gear" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gears" @click="setFontAwesome('fa fa-gears')" class="fa fa-gears" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gift" @click="setFontAwesome('fa fa-gift')" class="fa fa-gift" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-glass" @click="setFontAwesome('fa fa-glass')" class="fa fa-glass" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-globe" @click="setFontAwesome('fa fa-globe')" class="fa fa-globe" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-graduation-cap" @click="setFontAwesome('fa fa-graduation-cap')" class="fa fa-graduation-cap" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-group" @click="setFontAwesome('fa fa-group')" class="fa fa-group" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-grab-o" @click="setFontAwesome('fa fa-hand-grab-o')" class="fa fa-hand-grab-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-lizard-o" @click="setFontAwesome('fa fa-hand-lizard-o')" class="fa fa-hand-lizard-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-paper-o" @click="setFontAwesome('fa fa-hand-paper-o')" class="fa fa-hand-paper-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-peace-o" @click="setFontAwesome('fa fa-hand-peace-o')" class="fa fa-hand-peace-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-pointer-o" @click="setFontAwesome('fa fa-hand-pointer-o')" class="fa fa-hand-pointer-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-rock-o" @click="setFontAwesome('fa fa-hand-rock-o')" class="fa fa-hand-rock-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-scissors-o" @click="setFontAwesome('fa fa-hand-scissors-o')" class="fa fa-hand-scissors-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-spock-o" @click="setFontAwesome('fa fa-hand-spock-o')" class="fa fa-hand-spock-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-stop-o" @click="setFontAwesome('fa fa-hand-stop-o')" class="fa fa-hand-stop-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-handshake-o" @click="setFontAwesome('fa fa-handshake-o')" class="fa fa-handshake-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hard-of-hearing" @click="setFontAwesome('fa fa-hard-of-hearing')" class="fa fa-hard-of-hearing" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hashtag" @click="setFontAwesome('fa fa-hashtag')" class="fa fa-hashtag" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hdd-o" @click="setFontAwesome('fa fa-hdd-o')" class="fa fa-hdd-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-headphones" @click="setFontAwesome('fa fa-headphones')" class="fa fa-headphones" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-heart" @click="setFontAwesome('fa fa-heart')" class="fa fa-heart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-heart-o" @click="setFontAwesome('fa fa-heart-o')" class="fa fa-heart-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-heartbeat" @click="setFontAwesome('fa fa-heartbeat')" class="fa fa-heartbeat" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-history" @click="setFontAwesome('fa fa-history')" class="fa fa-history" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-home" @click="setFontAwesome('fa fa-home')" class="fa fa-home" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hotel" @click="setFontAwesome('fa fa-hotel')" class="fa fa-hotel" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass" @click="setFontAwesome('fa fa-hourglass')" class="fa fa-hourglass" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass-1" @click="setFontAwesome('fa fa-hourglass-1')" class="fa fa-hourglass-1" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass-2" @click="setFontAwesome('fa fa-hourglass-2')" class="fa fa-hourglass-2" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass-3" @click="setFontAwesome('fa fa-hourglass-3')" class="fa fa-hourglass-3" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass-end" @click="setFontAwesome('fa fa-hourglass-end')" class="fa fa-hourglass-end" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass-half" @click="setFontAwesome('fa fa-hourglass-half')" class="fa fa-hourglass-half" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass-o" @click="setFontAwesome('fa fa-hourglass-o')" class="fa fa-hourglass-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hourglass-start" @click="setFontAwesome('fa fa-hourglass-start')" class="fa fa-hourglass-start" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-i-cursor" @click="setFontAwesome('fa fa-i-cursor')" class="fa fa-i-cursor" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-id-badge" @click="setFontAwesome('fa fa-id-badge')" class="fa fa-id-badge" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-id-card" @click="setFontAwesome('fa fa-id-card')" class="fa fa-id-card" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-id-card-o" @click="setFontAwesome('fa fa-id-card-o')" class="fa fa-id-card-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-image" @click="setFontAwesome('fa fa-image')" class="fa fa-image" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-inbox" @click="setFontAwesome('fa fa-inbox')" class="fa fa-inbox" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-industry" @click="setFontAwesome('fa fa-industry')" class="fa fa-industry" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-info" @click="setFontAwesome('fa fa-info')" class="fa fa-info" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-info-circle" @click="setFontAwesome('fa fa-info-circle')" class="fa fa-info-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-institution" @click="setFontAwesome('fa fa-institution')" class="fa fa-institution" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-key" @click="setFontAwesome('fa fa-key')" class="fa fa-key" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-keyboard-o" @click="setFontAwesome('fa fa-keyboard-o')" class="fa fa-keyboard-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-language" @click="setFontAwesome('fa fa-language')" class="fa fa-language" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-laptop" @click="setFontAwesome('fa fa-laptop')" class="fa fa-laptop" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-leaf" @click="setFontAwesome('fa fa-leaf')" class="fa fa-leaf" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-legal" @click="setFontAwesome('fa fa-legal')" class="fa fa-legal" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-lemon-o" @click="setFontAwesome('fa fa-lemon-o')" class="fa fa-lemon-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-level-down" @click="setFontAwesome('fa fa-level-down')" class="fa fa-level-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-level-up" @click="setFontAwesome('fa fa-level-up')" class="fa fa-level-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-life-bouy" @click="setFontAwesome('fa fa-life-bouy')" class="fa fa-life-bouy" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-life-buoy" @click="setFontAwesome('fa fa-life-buoy')" class="fa fa-life-buoy" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-life-ring" @click="setFontAwesome('fa fa-life-ring')" class="fa fa-life-ring" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-life-saver" @click="setFontAwesome('fa fa-life-saver')" class="fa fa-life-saver" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-lightbulb-o" @click="setFontAwesome('fa fa-lightbulb-o')" class="fa fa-lightbulb-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-line-chart" @click="setFontAwesome('fa fa-line-chart')" class="fa fa-line-chart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-location-arrow" @click="setFontAwesome('fa fa-location-arrow')" class="fa fa-location-arrow" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-lock" @click="setFontAwesome('fa fa-lock')" class="fa fa-lock" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-low-vision" @click="setFontAwesome('fa fa-low-vision')" class="fa fa-low-vision" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-magic" @click="setFontAwesome('fa fa-magic')" class="fa fa-magic" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-magnet" @click="setFontAwesome('fa fa-magnet')" class="fa fa-magnet" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mail-forward" @click="setFontAwesome('fa fa-mail-forward')" class="fa fa-mail-forward" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mail-reply" @click="setFontAwesome('fa fa-mail-reply')" class="fa fa-mail-reply" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mail-reply-all" @click="setFontAwesome('fa fa-mail-reply-all')" class="fa fa-mail-reply-all" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-male" @click="setFontAwesome('fa fa-male')" class="fa fa-male" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-map" @click="setFontAwesome('fa fa-map')" class="fa fa-map" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-map-marker" @click="setFontAwesome('fa fa-map-marker')" class="fa fa-map-marker" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-map-o" @click="setFontAwesome('fa fa-map-o')" class="fa fa-map-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-map-pin" @click="setFontAwesome('fa fa-map-pin')" class="fa fa-map-pin" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-map-signs" @click="setFontAwesome('fa fa-map-signs')" class="fa fa-map-signs" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-meh-o" @click="setFontAwesome('fa fa-meh-o')" class="fa fa-meh-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-microchip" @click="setFontAwesome('fa fa-microchip')" class="fa fa-microchip" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-microphone" @click="setFontAwesome('fa fa-microphone')" class="fa fa-microphone" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-microphone-slash" @click="setFontAwesome('fa fa-microphone-slash')" class="fa fa-microphone-slash" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-minus" @click="setFontAwesome('fa fa-minus')" class="fa fa-minus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-minus-circle" @click="setFontAwesome('fa fa-minus-circle')" class="fa fa-minus-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-minus-square" @click="setFontAwesome('fa fa-minus-square')" class="fa fa-minus-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-minus-square-o" @click="setFontAwesome('fa fa-minus-square-o')" class="fa fa-minus-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mobile" @click="setFontAwesome('fa fa-mobile')" class="fa fa-mobile" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mobile-phone" @click="setFontAwesome('fa fa-mobile-phone')" class="fa fa-mobile-phone" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-money" @click="setFontAwesome('fa fa-money')" class="fa fa-money" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-moon-o" @click="setFontAwesome('fa fa-moon-o')" class="fa fa-moon-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mortar-board" @click="setFontAwesome('fa fa-mortar-board')" class="fa fa-mortar-board" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-motorcycle" @click="setFontAwesome('fa fa-motorcycle')" class="fa fa-motorcycle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mouse-pointer" @click="setFontAwesome('fa fa-mouse-pointer')" class="fa fa-mouse-pointer" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-music" @click="setFontAwesome('fa fa-music')" class="fa fa-music" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-navicon" @click="setFontAwesome('fa fa-navicon')" class="fa fa-navicon" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-newspaper-o" @click="setFontAwesome('fa fa-newspaper-o')" class="fa fa-newspaper-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-object-group" @click="setFontAwesome('fa fa-object-group')" class="fa fa-object-group" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-object-ungroup" @click="setFontAwesome('fa fa-object-ungroup')" class="fa fa-object-ungroup" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paint-brush" @click="setFontAwesome('fa fa-paint-brush')" class="fa fa-paint-brush" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paper-plane" @click="setFontAwesome('fa fa-paper-plane')" class="fa fa-paper-plane" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paper-plane-o" @click="setFontAwesome('fa fa-paper-plane-o')" class="fa fa-paper-plane-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paw" @click="setFontAwesome('fa fa-paw')" class="fa fa-paw" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pencil" @click="setFontAwesome('fa fa-pencil')" class="fa fa-pencil" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pencil-square" @click="setFontAwesome('fa fa-pencil-square')" class="fa fa-pencil-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pencil-square-o" @click="setFontAwesome('fa fa-pencil-square-o')" class="fa fa-pencil-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-percent" @click="setFontAwesome('fa fa-percent')" class="fa fa-percent" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-phone" @click="setFontAwesome('fa fa-phone')" class="fa fa-phone" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-phone-square" @click="setFontAwesome('fa fa-phone-square')" class="fa fa-phone-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-photo" @click="setFontAwesome('fa fa-photo')" class="fa fa-photo" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-picture-o" @click="setFontAwesome('fa fa-picture-o')" class="fa fa-picture-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pie-chart" @click="setFontAwesome('fa fa-pie-chart')" class="fa fa-pie-chart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plane" @click="setFontAwesome('fa fa-plane')" class="fa fa-plane" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plug" @click="setFontAwesome('fa fa-plug')" class="fa fa-plug" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plus" @click="setFontAwesome('fa fa-plus')" class="fa fa-plus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plus-circle" @click="setFontAwesome('fa fa-plus-circle')" class="fa fa-plus-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plus-square" @click="setFontAwesome('fa fa-plus-square')" class="fa fa-plus-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plus-square-o" @click="setFontAwesome('fa fa-plus-square-o')" class="fa fa-plus-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-podcast" @click="setFontAwesome('fa fa-podcast')" class="fa fa-podcast" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-power-off" @click="setFontAwesome('fa fa-power-off')" class="fa fa-power-off" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-print" @click="setFontAwesome('fa fa-print')" class="fa fa-print" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-puzzle-piece" @click="setFontAwesome('fa fa-puzzle-piece')" class="fa fa-puzzle-piece" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-qrcode" @click="setFontAwesome('fa fa-qrcode')" class="fa fa-qrcode" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-question" @click="setFontAwesome('fa fa-question')" class="fa fa-question" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-question-circle" @click="setFontAwesome('fa fa-question-circle')" class="fa fa-question-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-question-circle-o" @click="setFontAwesome('fa fa-question-circle-o')" class="fa fa-question-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-quote-left" @click="setFontAwesome('fa fa-quote-left')" class="fa fa-quote-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-quote-right" @click="setFontAwesome('fa fa-quote-right')" class="fa fa-quote-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-random" @click="setFontAwesome('fa fa-random')" class="fa fa-random" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-recycle" @click="setFontAwesome('fa fa-recycle')" class="fa fa-recycle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-refresh" @click="setFontAwesome('fa fa-refresh')" class="fa fa-refresh" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-registered" @click="setFontAwesome('fa fa-registered')" class="fa fa-registered" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-remove" @click="setFontAwesome('fa fa-remove')" class="fa fa-remove" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-reorder" @click="setFontAwesome('fa fa-reorder')" class="fa fa-reorder" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-reply" @click="setFontAwesome('fa fa-reply')" class="fa fa-reply" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-reply-all" @click="setFontAwesome('fa fa-reply-all')" class="fa fa-reply-all" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-retweet" @click="setFontAwesome('fa fa-retweet')" class="fa fa-retweet" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-road" @click="setFontAwesome('fa fa-road')" class="fa fa-road" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rocket" @click="setFontAwesome('fa fa-rocket')" class="fa fa-rocket" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rss" @click="setFontAwesome('fa fa-rss')" class="fa fa-rss" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rss-square" @click="setFontAwesome('fa fa-rss-square')" class="fa fa-rss-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-s15" @click="setFontAwesome('fa fa-s15')" class="fa fa-s15" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-search" @click="setFontAwesome('fa fa-search')" class="fa fa-search" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-search-minus" @click="setFontAwesome('fa fa-search-minus')" class="fa fa-search-minus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-search-plus" @click="setFontAwesome('fa fa-search-plus')" class="fa fa-search-plus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-send" @click="setFontAwesome('fa fa-send')" class="fa fa-send" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-send-o" @click="setFontAwesome('fa fa-send-o')" class="fa fa-send-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-server" @click="setFontAwesome('fa fa-server')" class="fa fa-server" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-share" @click="setFontAwesome('fa fa-share')" class="fa fa-share" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-share-alt" @click="setFontAwesome('fa fa-share-alt')" class="fa fa-share-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-share-alt-square" @click="setFontAwesome('fa fa-share-alt-square')" class="fa fa-share-alt-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-share-square" @click="setFontAwesome('fa fa-share-square')" class="fa fa-share-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-share-square-o" @click="setFontAwesome('fa fa-share-square-o')" class="fa fa-share-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-shield" @click="setFontAwesome('fa fa-shield')" class="fa fa-shield" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ship" @click="setFontAwesome('fa fa-ship')" class="fa fa-ship" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-shopping-bag" @click="setFontAwesome('fa fa-shopping-bag')" class="fa fa-shopping-bag" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-shopping-basket" @click="setFontAwesome('fa fa-shopping-basket')" class="fa fa-shopping-basket" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-shopping-cart" @click="setFontAwesome('fa fa-shopping-cart')" class="fa fa-shopping-cart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-shower" @click="setFontAwesome('fa fa-shower')" class="fa fa-shower" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sign-in" @click="setFontAwesome('fa fa-sign-in')" class="fa fa-sign-in" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sign-language" @click="setFontAwesome('fa fa-sign-language')" class="fa fa-sign-language" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sign-out" @click="setFontAwesome('fa fa-sign-out')" class="fa fa-sign-out" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-signal" @click="setFontAwesome('fa fa-signal')" class="fa fa-signal" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-signing" @click="setFontAwesome('fa fa-signing')" class="fa fa-signing" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sitemap" @click="setFontAwesome('fa fa-sitemap')" class="fa fa-sitemap" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sliders" @click="setFontAwesome('fa fa-sliders')" class="fa fa-sliders" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-smile-o" @click="setFontAwesome('fa fa-smile-o')" class="fa fa-smile-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-snowflake-o" @click="setFontAwesome('fa fa-snowflake-o')" class="fa fa-snowflake-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-soccer-ball-o" @click="setFontAwesome('fa fa-soccer-ball-o')" class="fa fa-soccer-ball-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort" @click="setFontAwesome('fa fa-sort')" class="fa fa-sort" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-alpha-asc" @click="setFontAwesome('fa fa-sort-alpha-asc')" class="fa fa-sort-alpha-asc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-alpha-desc" @click="setFontAwesome('fa fa-sort-alpha-desc')" class="fa fa-sort-alpha-desc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-amount-asc" @click="setFontAwesome('fa fa-sort-amount-asc')" class="fa fa-sort-amount-asc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-amount-desc" @click="setFontAwesome('fa fa-sort-amount-desc')" class="fa fa-sort-amount-desc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-asc" @click="setFontAwesome('fa fa-sort-asc')" class="fa fa-sort-asc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-desc" @click="setFontAwesome('fa fa-sort-desc')" class="fa fa-sort-desc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-down" @click="setFontAwesome('fa fa-sort-down')" class="fa fa-sort-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-numeric-asc" @click="setFontAwesome('fa fa-sort-numeric-asc')" class="fa fa-sort-numeric-asc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-numeric-desc" @click="setFontAwesome('fa fa-sort-numeric-desc')" class="fa fa-sort-numeric-desc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sort-up" @click="setFontAwesome('fa fa-sort-up')" class="fa fa-sort-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-space-shuttle" @click="setFontAwesome('fa fa-space-shuttle')" class="fa fa-space-shuttle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-spinner" @click="setFontAwesome('fa fa-spinner')" class="fa fa-spinner" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-spoon" @click="setFontAwesome('fa fa-spoon')" class="fa fa-spoon" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-square" @click="setFontAwesome('fa fa-square')" class="fa fa-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-square-o" @click="setFontAwesome('fa fa-square-o')" class="fa fa-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-star" @click="setFontAwesome('fa fa-star')" class="fa fa-star" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-star-half" @click="setFontAwesome('fa fa-star-half')" class="fa fa-star-half" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-star-half-empty" @click="setFontAwesome('fa fa-star-half-empty')" class="fa fa-star-half-empty" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-star-half-full" @click="setFontAwesome('fa fa-star-half-full')" class="fa fa-star-half-full" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-star-half-o" @click="setFontAwesome('fa fa-star-half-o')" class="fa fa-star-half-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-star-o" @click="setFontAwesome('fa fa-star-o')" class="fa fa-star-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sticky-note" @click="setFontAwesome('fa fa-sticky-note')" class="fa fa-sticky-note" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sticky-note-o" @click="setFontAwesome('fa fa-sticky-note-o')" class="fa fa-sticky-note-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-street-view" @click="setFontAwesome('fa fa-street-view')" class="fa fa-street-view" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-suitcase" @click="setFontAwesome('fa fa-suitcase')" class="fa fa-suitcase" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sun-o" @click="setFontAwesome('fa fa-sun-o')" class="fa fa-sun-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-support" @click="setFontAwesome('fa fa-support')" class="fa fa-support" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tablet" @click="setFontAwesome('fa fa-tablet')" class="fa fa-tablet" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tachometer" @click="setFontAwesome('fa fa-tachometer')" class="fa fa-tachometer" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tag" @click="setFontAwesome('fa fa-tag')" class="fa fa-tag" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tags" @click="setFontAwesome('fa fa-tags')" class="fa fa-tags" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tasks" @click="setFontAwesome('fa fa-tasks')" class="fa fa-tasks" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-taxi" @click="setFontAwesome('fa fa-taxi')" class="fa fa-taxi" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-television" @click="setFontAwesome('fa fa-television')" class="fa fa-television" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-terminal" @click="setFontAwesome('fa fa-terminal')" class="fa fa-terminal" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer" @click="setFontAwesome('fa fa-thermometer')" class="fa fa-thermometer" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-0" @click="setFontAwesome('fa fa-thermometer-0')" class="fa fa-thermometer-0" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-1" @click="setFontAwesome('fa fa-thermometer-1')" class="fa fa-thermometer-1" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-2" @click="setFontAwesome('fa fa-thermometer-2')" class="fa fa-thermometer-2" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-3" @click="setFontAwesome('fa fa-thermometer-3')" class="fa fa-thermometer-3" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-4" @click="setFontAwesome('fa fa-thermometer-4')" class="fa fa-thermometer-4" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-empty" @click="setFontAwesome('fa fa-thermometer-empty')" class="fa fa-thermometer-empty" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-full" @click="setFontAwesome('fa fa-thermometer-full')" class="fa fa-thermometer-full" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-half" @click="setFontAwesome('fa fa-thermometer-half')" class="fa fa-thermometer-half" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-quarter" @click="setFontAwesome('fa fa-thermometer-quarter')" class="fa fa-thermometer-quarter" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thermometer-three-quarters" @click="setFontAwesome('fa fa-thermometer-three-quarters')" class="fa fa-thermometer-three-quarters" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumb-tack" @click="setFontAwesome('fa fa-thumb-tack')" class="fa fa-thumb-tack" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-down" @click="setFontAwesome('fa fa-thumbs-down')" class="fa fa-thumbs-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-o-down" @click="setFontAwesome('fa fa-thumbs-o-down')" class="fa fa-thumbs-o-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-o-up" @click="setFontAwesome('fa fa-thumbs-o-up')" class="fa fa-thumbs-o-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-up" @click="setFontAwesome('fa fa-thumbs-up')" class="fa fa-thumbs-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ticket" @click="setFontAwesome('fa fa-ticket')" class="fa fa-ticket" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-times" @click="setFontAwesome('fa fa-times')" class="fa fa-times" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-times-circle" @click="setFontAwesome('fa fa-times-circle')" class="fa fa-times-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-times-circle-o" @click="setFontAwesome('fa fa-times-circle-o')" class="fa fa-times-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-times-rectangle" @click="setFontAwesome('fa fa-times-rectangle')" class="fa fa-times-rectangle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-times-rectangle-o" @click="setFontAwesome('fa fa-times-rectangle-o')" class="fa fa-times-rectangle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tint" @click="setFontAwesome('fa fa-tint')" class="fa fa-tint" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-down" @click="setFontAwesome('fa fa-toggle-down')" class="fa fa-toggle-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-left" @click="setFontAwesome('fa fa-toggle-left')" class="fa fa-toggle-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-off" @click="setFontAwesome('fa fa-toggle-off')" class="fa fa-toggle-off" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-on" @click="setFontAwesome('fa fa-toggle-on')" class="fa fa-toggle-on" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-right" @click="setFontAwesome('fa fa-toggle-right')" class="fa fa-toggle-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-up" @click="setFontAwesome('fa fa-toggle-up')" class="fa fa-toggle-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-trademark" @click="setFontAwesome('fa fa-trademark')" class="fa fa-trademark" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-trash" @click="setFontAwesome('fa fa-trash')" class="fa fa-trash" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-trash-o" @click="setFontAwesome('fa fa-trash-o')" class="fa fa-trash-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tree" @click="setFontAwesome('fa fa-tree')" class="fa fa-tree" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-trophy" @click="setFontAwesome('fa fa-trophy')" class="fa fa-trophy" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-truck" @click="setFontAwesome('fa fa-truck')" class="fa fa-truck" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tty" @click="setFontAwesome('fa fa-tty')" class="fa fa-tty" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tv" @click="setFontAwesome('fa fa-tv')" class="fa fa-tv" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-umbrella" @click="setFontAwesome('fa fa-umbrella')" class="fa fa-umbrella" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-universal-access" @click="setFontAwesome('fa fa-universal-access')" class="fa fa-universal-access" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-university" @click="setFontAwesome('fa fa-university')" class="fa fa-university" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-unlock" @click="setFontAwesome('fa fa-unlock')" class="fa fa-unlock" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-unlock-alt" @click="setFontAwesome('fa fa-unlock-alt')" class="fa fa-unlock-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-unsorted" @click="setFontAwesome('fa fa-unsorted')" class="fa fa-unsorted" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-upload" @click="setFontAwesome('fa fa-upload')" class="fa fa-upload" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user" @click="setFontAwesome('fa fa-user')" class="fa fa-user" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user-circle" @click="setFontAwesome('fa fa-user-circle')" class="fa fa-user-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user-circle-o" @click="setFontAwesome('fa fa-user-circle-o')" class="fa fa-user-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user-o" @click="setFontAwesome('fa fa-user-o')" class="fa fa-user-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user-plus" @click="setFontAwesome('fa fa-user-plus')" class="fa fa-user-plus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user-secret" @click="setFontAwesome('fa fa-user-secret')" class="fa fa-user-secret" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user-times" @click="setFontAwesome('fa fa-user-times')" class="fa fa-user-times" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-users" @click="setFontAwesome('fa fa-users')" class="fa fa-users" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-vcard" @click="setFontAwesome('fa fa-vcard')" class="fa fa-vcard" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-vcard-o" @click="setFontAwesome('fa fa-vcard-o')" class="fa fa-vcard-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-video-camera" @click="setFontAwesome('fa fa-video-camera')" class="fa fa-video-camera" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-volume-control-phone" @click="setFontAwesome('fa fa-volume-control-phone')" class="fa fa-volume-control-phone" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-volume-down" @click="setFontAwesome('fa fa-volume-down')" class="fa fa-volume-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-volume-off" @click="setFontAwesome('fa fa-volume-off')" class="fa fa-volume-off" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-volume-up" @click="setFontAwesome('fa fa-volume-up')" class="fa fa-volume-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-warning" @click="setFontAwesome('fa fa-warning')" class="fa fa-warning" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair" @click="setFontAwesome('fa fa-wheelchair')" class="fa fa-wheelchair" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair-alt" @click="setFontAwesome('fa fa-wheelchair-alt')" class="fa fa-wheelchair-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wifi" @click="setFontAwesome('fa fa-wifi')" class="fa fa-wifi" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-window-close" @click="setFontAwesome('fa fa-window-close')" class="fa fa-window-close" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-window-close-o" @click="setFontAwesome('fa fa-window-close-o')" class="fa fa-window-close-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-window-maximize" @click="setFontAwesome('fa fa-window-maximize')" class="fa fa-window-maximize" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-window-minimize" @click="setFontAwesome('fa fa-window-minimize')" class="fa fa-window-minimize" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-window-restore" @click="setFontAwesome('fa fa-window-restore')" class="fa fa-window-restore" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wrench" @click="setFontAwesome('fa fa-wrench')" class="fa fa-wrench" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="accessibility">
                        <h2 class="page-header">辅助功能</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-american-sign-language-interpreting" @click="setFontAwesome('fa fa-american-sign-language-interpreting')" class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-asl-interpreting" @click="setFontAwesome('fa fa-asl-interpreting')" class="fa fa-asl-interpreting" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-assistive-listening-systems" @click="setFontAwesome('fa fa-assistive-listening-systems')" class="fa fa-assistive-listening-systems" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-audio-description" @click="setFontAwesome('fa fa-audio-description')" class="fa fa-audio-description" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-blind" @click="setFontAwesome('fa fa-blind')" class="fa fa-blind" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-braille" @click="setFontAwesome('fa fa-braille')" class="fa fa-braille" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc" @click="setFontAwesome('fa fa-cc')" class="fa fa-cc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-deaf" @click="setFontAwesome('fa fa-deaf')" class="fa fa-deaf" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-deafness" @click="setFontAwesome('fa fa-deafness')" class="fa fa-deafness" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hard-of-hearing" @click="setFontAwesome('fa fa-hard-of-hearing')" class="fa fa-hard-of-hearing" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-low-vision" @click="setFontAwesome('fa fa-low-vision')" class="fa fa-low-vision" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-question-circle-o" @click="setFontAwesome('fa fa-question-circle-o')" class="fa fa-question-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sign-language" @click="setFontAwesome('fa fa-sign-language')" class="fa fa-sign-language" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-signing" @click="setFontAwesome('fa fa-signing')" class="fa fa-signing" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tty" @click="setFontAwesome('fa fa-tty')" class="fa fa-tty" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-universal-access" @click="setFontAwesome('fa fa-universal-access')" class="fa fa-universal-access" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-volume-control-phone" @click="setFontAwesome('fa fa-volume-control-phone')" class="fa fa-volume-control-phone" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair" @click="setFontAwesome('fa fa-wheelchair')" class="fa fa-wheelchair" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair-alt" @click="setFontAwesome('fa fa-wheelchair-alt')" class="fa fa-wheelchair-alt" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="hand" class="mainParts">
                        <h2 class="page-header">手势</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-hand-grab-o" @click="setFontAwesome('fa fa-hand-grab-o')" class="fa fa-hand-grab-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-lizard-o" @click="setFontAwesome('fa fa-hand-lizard-o')" class="fa fa-hand-lizard-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-down" @click="setFontAwesome('fa fa-hand-o-down')" class="fa fa-hand-o-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-left" @click="setFontAwesome('fa fa-hand-o-left')" class="fa fa-hand-o-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-right" @click="setFontAwesome('fa fa-hand-o-right')" class="fa fa-hand-o-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-up" @click="setFontAwesome('fa fa-hand-o-up')" class="fa fa-hand-o-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-paper-o" @click="setFontAwesome('fa fa-hand-paper-o')" class="fa fa-hand-paper-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-peace-o" @click="setFontAwesome('fa fa-hand-peace-o')" class="fa fa-hand-peace-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-pointer-o" @click="setFontAwesome('fa fa-hand-pointer-o')" class="fa fa-hand-pointer-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-rock-o" @click="setFontAwesome('fa fa-hand-rock-o')" class="fa fa-hand-rock-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-scissors-o" @click="setFontAwesome('fa fa-hand-scissors-o')" class="fa fa-hand-scissors-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-spock-o" @click="setFontAwesome('fa fa-hand-spock-o')" class="fa fa-hand-spock-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-stop-o" @click="setFontAwesome('fa fa-hand-stop-o')" class="fa fa-hand-stop-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-down" @click="setFontAwesome('fa fa-thumbs-down')" class="fa fa-thumbs-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-o-down" @click="setFontAwesome('fa fa-thumbs-o-down')" class="fa fa-thumbs-o-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-o-up" @click="setFontAwesome('fa fa-thumbs-o-up')" class="fa fa-thumbs-o-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-thumbs-up" @click="setFontAwesome('fa fa-thumbs-up')" class="fa fa-thumbs-up" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="transportation" class="mainParts">
                        <h2 class="page-header">运输</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-ambulance" @click="setFontAwesome('fa fa-ambulance')" class="fa fa-ambulance" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-automobile" @click="setFontAwesome('fa fa-automobile')" class="fa fa-automobile" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bicycle" @click="setFontAwesome('fa fa-bicycle')" class="fa fa-bicycle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bus" @click="setFontAwesome('fa fa-bus')" class="fa fa-bus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cab" @click="setFontAwesome('fa fa-cab')" class="fa fa-cab" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-car" @click="setFontAwesome('fa fa-car')" class="fa fa-car" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fighter-jet" @click="setFontAwesome('fa fa-fighter-jet')" class="fa fa-fighter-jet" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-motorcycle" @click="setFontAwesome('fa fa-motorcycle')" class="fa fa-motorcycle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plane" @click="setFontAwesome('fa fa-plane')" class="fa fa-plane" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rocket" @click="setFontAwesome('fa fa-rocket')" class="fa fa-rocket" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ship" @click="setFontAwesome('fa fa-ship')" class="fa fa-ship" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-space-shuttle" @click="setFontAwesome('fa fa-space-shuttle')" class="fa fa-space-shuttle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-subway" @click="setFontAwesome('fa fa-subway')" class="fa fa-subway" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-taxi" @click="setFontAwesome('fa fa-taxi')" class="fa fa-taxi" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-train" @click="setFontAwesome('fa fa-train')" class="fa fa-train" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-truck" @click="setFontAwesome('fa fa-truck')" class="fa fa-truck" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair" @click="setFontAwesome('fa fa-wheelchair')" class="fa fa-wheelchair" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair-alt" @click="setFontAwesome('fa fa-wheelchair-alt')" class="fa fa-wheelchair-alt" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="gender" class="mainParts">
                        <h2 class="page-header">性别</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-genderless" @click="setFontAwesome('fa fa-genderless')" class="fa fa-genderless" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-intersex" @click="setFontAwesome('fa fa-intersex')" class="fa fa-intersex" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mars" @click="setFontAwesome('fa fa-mars')" class="fa fa-mars" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mars-double" @click="setFontAwesome('fa fa-mars-double')" class="fa fa-mars-double" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mars-stroke" @click="setFontAwesome('fa fa-mars-stroke')" class="fa fa-mars-stroke" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mars-stroke-h" @click="setFontAwesome('fa fa-mars-stroke-h')" class="fa fa-mars-stroke-h" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mars-stroke-v" @click="setFontAwesome('fa fa-mars-stroke-v')" class="fa fa-mars-stroke-v" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mercury" @click="setFontAwesome('fa fa-mercury')" class="fa fa-mercury" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-neuter" @click="setFontAwesome('fa fa-neuter')" class="fa fa-neuter" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-transgender" @click="setFontAwesome('fa fa-transgender')" class="fa fa-transgender" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-transgender-alt" @click="setFontAwesome('fa fa-transgender-alt')" class="fa fa-transgender-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-venus" @click="setFontAwesome('fa fa-venus')" class="fa fa-venus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-venus-double" @click="setFontAwesome('fa fa-venus-double')" class="fa fa-venus-double" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-venus-mars" @click="setFontAwesome('fa fa-venus-mars')" class="fa fa-venus-mars" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="file-type" class="mainParts">
                        <h2 class="page-header">文件类型</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-file" @click="setFontAwesome('fa fa-file')" class="fa fa-file" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-archive-o" @click="setFontAwesome('fa fa-file-archive-o')" class="fa fa-file-archive-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-audio-o" @click="setFontAwesome('fa fa-file-audio-o')" class="fa fa-file-audio-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-code-o" @click="setFontAwesome('fa fa-file-code-o')" class="fa fa-file-code-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-excel-o" @click="setFontAwesome('fa fa-file-excel-o')" class="fa fa-file-excel-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-image-o" @click="setFontAwesome('fa fa-file-image-o')" class="fa fa-file-image-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-movie-o" @click="setFontAwesome('fa fa-file-movie-o')" class="fa fa-file-movie-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-o" @click="setFontAwesome('fa fa-file-o')" class="fa fa-file-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-pdf-o" @click="setFontAwesome('fa fa-file-pdf-o')" class="fa fa-file-pdf-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-photo-o" @click="setFontAwesome('fa fa-file-photo-o')" class="fa fa-file-photo-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-picture-o" @click="setFontAwesome('fa fa-file-picture-o')" class="fa fa-file-picture-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-powerpoint-o" @click="setFontAwesome('fa fa-file-powerpoint-o')" class="fa fa-file-powerpoint-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-sound-o" @click="setFontAwesome('fa fa-file-sound-o')" class="fa fa-file-sound-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-text" @click="setFontAwesome('fa fa-file-text')" class="fa fa-file-text" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-text-o" @click="setFontAwesome('fa fa-file-text-o')" class="fa fa-file-text-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-video-o" @click="setFontAwesome('fa fa-file-video-o')" class="fa fa-file-video-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-word-o" @click="setFontAwesome('fa fa-file-word-o')" class="fa fa-file-word-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-zip-o" @click="setFontAwesome('fa fa-file-zip-o')" class="fa fa-file-zip-o" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="spinner" class="mainParts">
                        <h2 class="page-header">可旋转</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-circle-o-notch" @click="setFontAwesome('fa fa-circle-o-notch')" class="fa fa-circle-o-notch" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cog" @click="setFontAwesome('fa fa-cog')" class="fa fa-cog" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gear" @click="setFontAwesome('fa fa-gear')" class="fa fa-gear" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-refresh" @click="setFontAwesome('fa fa-refresh')" class="fa fa-refresh" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-spinner" @click="setFontAwesome('fa fa-spinner')" class="fa fa-spinner" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="form-control" class="mainParts">
                        <h2 class="page-header">表单</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-check-square" @click="setFontAwesome('fa fa-check-square')" class="fa fa-check-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-check-square-o" @click="setFontAwesome('fa fa-check-square-o')" class="fa fa-check-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-circle" @click="setFontAwesome('fa fa-circle')" class="fa fa-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-circle-o" @click="setFontAwesome('fa fa-circle-o')" class="fa fa-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dot-circle-o" @click="setFontAwesome('fa fa-dot-circle-o')" class="fa fa-dot-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-minus-square" @click="setFontAwesome('fa fa-minus-square')" class="fa fa-minus-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-minus-square-o" @click="setFontAwesome('fa fa-minus-square-o')" class="fa fa-minus-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plus-square" @click="setFontAwesome('fa fa-plus-square')" class="fa fa-plus-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plus-square-o" @click="setFontAwesome('fa fa-plus-square-o')" class="fa fa-plus-square-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-square" @click="setFontAwesome('fa fa-square')" class="fa fa-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-square-o" @click="setFontAwesome('fa fa-square-o')" class="fa fa-square-o" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="payment" class="mainParts">
                        <h2 class="page-header">支付</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-cc-amex" @click="setFontAwesome('fa fa-cc-amex')" class="fa fa-cc-amex" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-diners-club" @click="setFontAwesome('fa fa-cc-diners-club')" class="fa fa-cc-diners-club" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-discover" @click="setFontAwesome('fa fa-cc-discover')" class="fa fa-cc-discover" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-jcb" @click="setFontAwesome('fa fa-cc-jcb')" class="fa fa-cc-jcb" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-mastercard" @click="setFontAwesome('fa fa-cc-mastercard')" class="fa fa-cc-mastercard" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-paypal" @click="setFontAwesome('fa fa-cc-paypal')" class="fa fa-cc-paypal" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-stripe" @click="setFontAwesome('fa fa-cc-stripe')" class="fa fa-cc-stripe" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-visa" @click="setFontAwesome('fa fa-cc-visa')" class="fa fa-cc-visa" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-credit-card" @click="setFontAwesome('fa fa-credit-card')" class="fa fa-credit-card" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-credit-card-alt" @click="setFontAwesome('fa fa-credit-card-alt')" class="fa fa-credit-card-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-google-wallet" @click="setFontAwesome('fa fa-google-wallet')" class="fa fa-google-wallet" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paypal" @click="setFontAwesome('fa fa-paypal')" class="fa fa-paypal" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="chart" class="mainParts">
                        <h2 class="page-header">图表</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-area-chart" @click="setFontAwesome('fa fa-area-chart')" class="fa fa-area-chart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bar-chart" @click="setFontAwesome('fa fa-bar-chart')" class="fa fa-bar-chart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bar-chart-o" @click="setFontAwesome('fa fa-bar-chart-o')" class="fa fa-bar-chart-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-line-chart" @click="setFontAwesome('fa fa-line-chart')" class="fa fa-line-chart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pie-chart" @click="setFontAwesome('fa fa-pie-chart')" class="fa fa-pie-chart" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="currency" class="mainParts">
                        <h2 class="page-header">货币</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-bitcoin" @click="setFontAwesome('fa fa-bitcoin')" class="fa fa-bitcoin" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-btc" @click="setFontAwesome('fa fa-btc')" class="fa fa-btc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cny" @click="setFontAwesome('fa fa-cny')" class="fa fa-cny" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dollar" @click="setFontAwesome('fa fa-dollar')" class="fa fa-dollar" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eur" @click="setFontAwesome('fa fa-eur')" class="fa fa-eur" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-euro" @click="setFontAwesome('fa fa-euro')" class="fa fa-euro" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gbp" @click="setFontAwesome('fa fa-gbp')" class="fa fa-gbp" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gg" @click="setFontAwesome('fa fa-gg')" class="fa fa-gg" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gg-circle" @click="setFontAwesome('fa fa-gg-circle')" class="fa fa-gg-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ils" @click="setFontAwesome('fa fa-ils')" class="fa fa-ils" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-inr" @click="setFontAwesome('fa fa-inr')" class="fa fa-inr" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-jpy" @click="setFontAwesome('fa fa-jpy')" class="fa fa-jpy" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-krw" @click="setFontAwesome('fa fa-krw')" class="fa fa-krw" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-money" @click="setFontAwesome('fa fa-money')" class="fa fa-money" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rmb" @click="setFontAwesome('fa fa-rmb')" class="fa fa-rmb" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rouble" @click="setFontAwesome('fa fa-rouble')" class="fa fa-rouble" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rub" @click="setFontAwesome('fa fa-rub')" class="fa fa-rub" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ruble" @click="setFontAwesome('fa fa-ruble')" class="fa fa-ruble" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rupee" @click="setFontAwesome('fa fa-rupee')" class="fa fa-rupee" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-shekel" @click="setFontAwesome('fa fa-shekel')" class="fa fa-shekel" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sheqel" @click="setFontAwesome('fa fa-sheqel')" class="fa fa-sheqel" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-try" @click="setFontAwesome('fa fa-try')" class="fa fa-try" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-turkish-lira" @click="setFontAwesome('fa fa-turkish-lira')" class="fa fa-turkish-lira" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-usd" @click="setFontAwesome('fa fa-usd')" class="fa fa-usd" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-won" @click="setFontAwesome('fa fa-won')" class="fa fa-won" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-yen" @click="setFontAwesome('fa fa-yen')" class="fa fa-yen" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="text-editor" class="mainParts">
                        <h2 class="page-header">文本编辑</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-align-center" @click="setFontAwesome('fa fa-align-center')" class="fa fa-align-center" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-align-justify" @click="setFontAwesome('fa fa-align-justify')" class="fa fa-align-justify" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-align-left" @click="setFontAwesome('fa fa-align-left')" class="fa fa-align-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-align-right" @click="setFontAwesome('fa fa-align-right')" class="fa fa-align-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bold" @click="setFontAwesome('fa fa-bold')" class="fa fa-bold" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chain" @click="setFontAwesome('fa fa-chain')" class="fa fa-chain" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chain-broken" @click="setFontAwesome('fa fa-chain-broken')" class="fa fa-chain-broken" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-clipboard" @click="setFontAwesome('fa fa-clipboard')" class="fa fa-clipboard" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-columns" @click="setFontAwesome('fa fa-columns')" class="fa fa-columns" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-copy" @click="setFontAwesome('fa fa-copy')" class="fa fa-copy" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cut" @click="setFontAwesome('fa fa-cut')" class="fa fa-cut" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dedent" @click="setFontAwesome('fa fa-dedent')" class="fa fa-dedent" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eraser" @click="setFontAwesome('fa fa-eraser')" class="fa fa-eraser" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file" @click="setFontAwesome('fa fa-file')" class="fa fa-file" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-o" @click="setFontAwesome('fa fa-file-o')" class="fa fa-file-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-text" @click="setFontAwesome('fa fa-file-text')" class="fa fa-file-text" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-file-text-o" @click="setFontAwesome('fa fa-file-text-o')" class="fa fa-file-text-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-files-o" @click="setFontAwesome('fa fa-files-o')" class="fa fa-files-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-floppy-o" @click="setFontAwesome('fa fa-floppy-o')" class="fa fa-floppy-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-font" @click="setFontAwesome('fa fa-font')" class="fa fa-font" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-header" @click="setFontAwesome('fa fa-header')" class="fa fa-header" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-indent" @click="setFontAwesome('fa fa-indent')" class="fa fa-indent" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-italic" @click="setFontAwesome('fa fa-italic')" class="fa fa-italic" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-link" @click="setFontAwesome('fa fa-link')" class="fa fa-link" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-list" @click="setFontAwesome('fa fa-list')" class="fa fa-list" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-list-alt" @click="setFontAwesome('fa fa-list-alt')" class="fa fa-list-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-list-ol" @click="setFontAwesome('fa fa-list-ol')" class="fa fa-list-ol" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-list-ul" @click="setFontAwesome('fa fa-list-ul')" class="fa fa-list-ul" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-outdent" @click="setFontAwesome('fa fa-outdent')" class="fa fa-outdent" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paperclip" @click="setFontAwesome('fa fa-paperclip')" class="fa fa-paperclip" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paragraph" @click="setFontAwesome('fa fa-paragraph')" class="fa fa-paragraph" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paste" @click="setFontAwesome('fa fa-paste')" class="fa fa-paste" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-repeat" @click="setFontAwesome('fa fa-repeat')" class="fa fa-repeat" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rotate-left" @click="setFontAwesome('fa fa-rotate-left')" class="fa fa-rotate-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rotate-right" @click="setFontAwesome('fa fa-rotate-right')" class="fa fa-rotate-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-save" @click="setFontAwesome('fa fa-save')" class="fa fa-save" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-scissors" @click="setFontAwesome('fa fa-scissors')" class="fa fa-scissors" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-strikethrough" @click="setFontAwesome('fa fa-strikethrough')" class="fa fa-strikethrough" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-subscript" @click="setFontAwesome('fa fa-subscript')" class="fa fa-subscript" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-superscript" @click="setFontAwesome('fa fa-superscript')" class="fa fa-superscript" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-table" @click="setFontAwesome('fa fa-table')" class="fa fa-table" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-text-height" @click="setFontAwesome('fa fa-text-height')" class="fa fa-text-height" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-text-width" @click="setFontAwesome('fa fa-text-width')" class="fa fa-text-width" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-th" @click="setFontAwesome('fa fa-th')" class="fa fa-th" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-th-large" @click="setFontAwesome('fa fa-th-large')" class="fa fa-th-large" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-th-list" @click="setFontAwesome('fa fa-th-list')" class="fa fa-th-list" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-underline" @click="setFontAwesome('fa fa-underline')" class="fa fa-underline" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-undo" @click="setFontAwesome('fa fa-undo')" class="fa fa-undo" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-unlink" @click="setFontAwesome('fa fa-unlink')" class="fa fa-unlink" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="directional" class="mainParts">
                        <h2 class="page-header">指示方向</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-angle-double-down" @click="setFontAwesome('fa fa-angle-double-down')" class="fa fa-angle-double-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angle-double-left" @click="setFontAwesome('fa fa-angle-double-left')" class="fa fa-angle-double-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angle-double-right" @click="setFontAwesome('fa fa-angle-double-right')" class="fa fa-angle-double-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angle-double-up" @click="setFontAwesome('fa fa-angle-double-up')" class="fa fa-angle-double-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angle-down" @click="setFontAwesome('fa fa-angle-down')" class="fa fa-angle-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angle-left" @click="setFontAwesome('fa fa-angle-left')" class="fa fa-angle-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angle-right" @click="setFontAwesome('fa fa-angle-right')" class="fa fa-angle-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angle-up" @click="setFontAwesome('fa fa-angle-up')" class="fa fa-angle-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-down" @click="setFontAwesome('fa fa-arrow-circle-down')" class="fa fa-arrow-circle-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-left" @click="setFontAwesome('fa fa-arrow-circle-left')" class="fa fa-arrow-circle-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-o-down" @click="setFontAwesome('fa fa-arrow-circle-o-down')" class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-o-left" @click="setFontAwesome('fa fa-arrow-circle-o-left')" class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-o-right" @click="setFontAwesome('fa fa-arrow-circle-o-right')" class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-o-up" @click="setFontAwesome('fa fa-arrow-circle-o-up')" class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-right" @click="setFontAwesome('fa fa-arrow-circle-right')" class="fa fa-arrow-circle-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-circle-up" @click="setFontAwesome('fa fa-arrow-circle-up')" class="fa fa-arrow-circle-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-down" @click="setFontAwesome('fa fa-arrow-down')" class="fa fa-arrow-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-left" @click="setFontAwesome('fa fa-arrow-left')" class="fa fa-arrow-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-right" @click="setFontAwesome('fa fa-arrow-right')" class="fa fa-arrow-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrow-up" @click="setFontAwesome('fa fa-arrow-up')" class="fa fa-arrow-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrows" @click="setFontAwesome('fa fa-arrows')" class="fa fa-arrows" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrows-alt" @click="setFontAwesome('fa fa-arrows-alt')" class="fa fa-arrows-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrows-h" @click="setFontAwesome('fa fa-arrows-h')" class="fa fa-arrows-h" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-arrows-v" @click="setFontAwesome('fa fa-arrows-v')" class="fa fa-arrows-v" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-down" @click="setFontAwesome('fa fa-caret-down')" class="fa fa-caret-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-left" @click="setFontAwesome('fa fa-caret-left')" class="fa fa-caret-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-right" @click="setFontAwesome('fa fa-caret-right')" class="fa fa-caret-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-down" @click="setFontAwesome('fa fa-caret-square-o-down')" class="fa fa-caret-square-o-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-left" @click="setFontAwesome('fa fa-caret-square-o-left')" class="fa fa-caret-square-o-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-right" @click="setFontAwesome('fa fa-caret-square-o-right')" class="fa fa-caret-square-o-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-square-o-up" @click="setFontAwesome('fa fa-caret-square-o-up')" class="fa fa-caret-square-o-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-caret-up" @click="setFontAwesome('fa fa-caret-up')" class="fa fa-caret-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-circle-down" @click="setFontAwesome('fa fa-chevron-circle-down')" class="fa fa-chevron-circle-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-circle-left" @click="setFontAwesome('fa fa-chevron-circle-left')" class="fa fa-chevron-circle-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-circle-right" @click="setFontAwesome('fa fa-chevron-circle-right')" class="fa fa-chevron-circle-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-circle-up" @click="setFontAwesome('fa fa-chevron-circle-up')" class="fa fa-chevron-circle-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-down" @click="setFontAwesome('fa fa-chevron-down')" class="fa fa-chevron-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-left" @click="setFontAwesome('fa fa-chevron-left')" class="fa fa-chevron-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-right" @click="setFontAwesome('fa fa-chevron-right')" class="fa fa-chevron-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chevron-up" @click="setFontAwesome('fa fa-chevron-up')" class="fa fa-chevron-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-exchange" @click="setFontAwesome('fa fa-exchange')" class="fa fa-exchange" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-down" @click="setFontAwesome('fa fa-hand-o-down')" class="fa fa-hand-o-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-left" @click="setFontAwesome('fa fa-hand-o-left')" class="fa fa-hand-o-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-right" @click="setFontAwesome('fa fa-hand-o-right')" class="fa fa-hand-o-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hand-o-up" @click="setFontAwesome('fa fa-hand-o-up')" class="fa fa-hand-o-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-long-arrow-down" @click="setFontAwesome('fa fa-long-arrow-down')" class="fa fa-long-arrow-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-long-arrow-left" @click="setFontAwesome('fa fa-long-arrow-left')" class="fa fa-long-arrow-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-long-arrow-right" @click="setFontAwesome('fa fa-long-arrow-right')" class="fa fa-long-arrow-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-long-arrow-up" @click="setFontAwesome('fa fa-long-arrow-up')" class="fa fa-long-arrow-up" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-down" @click="setFontAwesome('fa fa-toggle-down')" class="fa fa-toggle-down" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-left" @click="setFontAwesome('fa fa-toggle-left')" class="fa fa-toggle-left" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-right" @click="setFontAwesome('fa fa-toggle-right')" class="fa fa-toggle-right" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-toggle-up" @click="setFontAwesome('fa fa-toggle-up')" class="fa fa-toggle-up" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="video-player" class="mainParts">
                        <h2 class="page-header">视频播放</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-arrows-alt" @click="setFontAwesome('fa fa-arrows-alt')" class="fa fa-arrows-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-backward" @click="setFontAwesome('fa fa-backward')" class="fa fa-backward" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-compress" @click="setFontAwesome('fa fa-compress')" class="fa fa-compress" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eject" @click="setFontAwesome('fa fa-eject')" class="fa fa-eject" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-expand" @click="setFontAwesome('fa fa-expand')" class="fa fa-expand" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fast-backward" @click="setFontAwesome('fa fa-fast-backward')" class="fa fa-fast-backward" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fast-forward" @click="setFontAwesome('fa fa-fast-forward')" class="fa fa-fast-forward" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-forward" @click="setFontAwesome('fa fa-forward')" class="fa fa-forward" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pause" @click="setFontAwesome('fa fa-pause')" class="fa fa-pause" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pause-circle" @click="setFontAwesome('fa fa-pause-circle')" class="fa fa-pause-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pause-circle-o" @click="setFontAwesome('fa fa-pause-circle-o')" class="fa fa-pause-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-play" @click="setFontAwesome('fa fa-play')" class="fa fa-play" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-play-circle" @click="setFontAwesome('fa fa-play-circle')" class="fa fa-play-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-play-circle-o" @click="setFontAwesome('fa fa-play-circle-o')" class="fa fa-play-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-random" @click="setFontAwesome('fa fa-random')" class="fa fa-random" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-step-backward" @click="setFontAwesome('fa fa-step-backward')" class="fa fa-step-backward" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-step-forward" @click="setFontAwesome('fa fa-step-forward')" class="fa fa-step-forward" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stop" @click="setFontAwesome('fa fa-stop')" class="fa fa-stop" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stop-circle" @click="setFontAwesome('fa fa-stop-circle')" class="fa fa-stop-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stop-circle-o" @click="setFontAwesome('fa fa-stop-circle-o')" class="fa fa-stop-circle-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-youtube-play" @click="setFontAwesome('fa fa-youtube-play')" class="fa fa-youtube-play" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="brand" class="mainParts">
                        <h2 class="page-header">标志</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-500px" @click="setFontAwesome('fa fa-500px')" class="fa fa-500px" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-adn" @click="setFontAwesome('fa fa-adn')" class="fa fa-adn" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-amazon" @click="setFontAwesome('fa fa-amazon')" class="fa fa-amazon" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-android" @click="setFontAwesome('fa fa-android')" class="fa fa-android" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-angellist" @click="setFontAwesome('fa fa-angellist')" class="fa fa-angellist" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-apple" @click="setFontAwesome('fa fa-apple')" class="fa fa-apple" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bandcamp" @click="setFontAwesome('fa fa-bandcamp')" class="fa fa-bandcamp" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-behance" @click="setFontAwesome('fa fa-behance')" class="fa fa-behance" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-behance-square" @click="setFontAwesome('fa fa-behance-square')" class="fa fa-behance-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bitbucket" @click="setFontAwesome('fa fa-bitbucket')" class="fa fa-bitbucket" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bitbucket-square" @click="setFontAwesome('fa fa-bitbucket-square')" class="fa fa-bitbucket-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bitcoin" @click="setFontAwesome('fa fa-bitcoin')" class="fa fa-bitcoin" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-black-tie" @click="setFontAwesome('fa fa-black-tie')" class="fa fa-black-tie" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bluetooth" @click="setFontAwesome('fa fa-bluetooth')" class="fa fa-bluetooth" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-bluetooth-b" @click="setFontAwesome('fa fa-bluetooth-b')" class="fa fa-bluetooth-b" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-btc" @click="setFontAwesome('fa fa-btc')" class="fa fa-btc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-buysellads" @click="setFontAwesome('fa fa-buysellads')" class="fa fa-buysellads" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-amex" @click="setFontAwesome('fa fa-cc-amex')" class="fa fa-cc-amex" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-diners-club" @click="setFontAwesome('fa fa-cc-diners-club')" class="fa fa-cc-diners-club" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-discover" @click="setFontAwesome('fa fa-cc-discover')" class="fa fa-cc-discover" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-jcb" @click="setFontAwesome('fa fa-cc-jcb')" class="fa fa-cc-jcb" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-mastercard" @click="setFontAwesome('fa fa-cc-mastercard')" class="fa fa-cc-mastercard" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-paypal" @click="setFontAwesome('fa fa-cc-paypal')" class="fa fa-cc-paypal" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-stripe" @click="setFontAwesome('fa fa-cc-stripe')" class="fa fa-cc-stripe" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-cc-visa" @click="setFontAwesome('fa fa-cc-visa')" class="fa fa-cc-visa" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-chrome" @click="setFontAwesome('fa fa-chrome')" class="fa fa-chrome" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-codepen" @click="setFontAwesome('fa fa-codepen')" class="fa fa-codepen" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-codiepie" @click="setFontAwesome('fa fa-codiepie')" class="fa fa-codiepie" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-connectdevelop" @click="setFontAwesome('fa fa-connectdevelop')" class="fa fa-connectdevelop" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-contao" @click="setFontAwesome('fa fa-contao')" class="fa fa-contao" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-css3" @click="setFontAwesome('fa fa-css3')" class="fa fa-css3" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dashcube" @click="setFontAwesome('fa fa-dashcube')" class="fa fa-dashcube" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-delicious" @click="setFontAwesome('fa fa-delicious')" class="fa fa-delicious" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-deviantart" @click="setFontAwesome('fa fa-deviantart')" class="fa fa-deviantart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-digg" @click="setFontAwesome('fa fa-digg')" class="fa fa-digg" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dribbble" @click="setFontAwesome('fa fa-dribbble')" class="fa fa-dribbble" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-dropbox" @click="setFontAwesome('fa fa-dropbox')" class="fa fa-dropbox" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-drupal" @click="setFontAwesome('fa fa-drupal')" class="fa fa-drupal" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-edge" @click="setFontAwesome('fa fa-edge')" class="fa fa-edge" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-eercast" @click="setFontAwesome('fa fa-eercast')" class="fa fa-eercast" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-empire" @click="setFontAwesome('fa fa-empire')" class="fa fa-empire" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-envira" @click="setFontAwesome('fa fa-envira')" class="fa fa-envira" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-etsy" @click="setFontAwesome('fa fa-etsy')" class="fa fa-etsy" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-expeditedssl" @click="setFontAwesome('fa fa-expeditedssl')" class="fa fa-expeditedssl" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fa" @click="setFontAwesome('fa fa-fa')" class="fa fa-fa" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-facebook" @click="setFontAwesome('fa fa-facebook')" class="fa fa-facebook" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-facebook-f" @click="setFontAwesome('fa fa-facebook-f')" class="fa fa-facebook-f" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-facebook-official" @click="setFontAwesome('fa fa-facebook-official')" class="fa fa-facebook-official" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-facebook-square" @click="setFontAwesome('fa fa-facebook-square')" class="fa fa-facebook-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-firefox" @click="setFontAwesome('fa fa-firefox')" class="fa fa-firefox" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-first-order" @click="setFontAwesome('fa fa-first-order')" class="fa fa-first-order" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-flickr" @click="setFontAwesome('fa fa-flickr')" class="fa fa-flickr" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-font-awesome" @click="setFontAwesome('fa fa-font-awesome')" class="fa fa-font-awesome" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fonticons" @click="setFontAwesome('fa fa-fonticons')" class="fa fa-fonticons" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-fort-awesome" @click="setFontAwesome('fa fa-fort-awesome')" class="fa fa-fort-awesome" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-forumbee" @click="setFontAwesome('fa fa-forumbee')" class="fa fa-forumbee" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-foursquare" @click="setFontAwesome('fa fa-foursquare')" class="fa fa-foursquare" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-free-code-camp" @click="setFontAwesome('fa fa-free-code-camp')" class="fa fa-free-code-camp" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ge" @click="setFontAwesome('fa fa-ge')" class="fa fa-ge" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-get-pocket" @click="setFontAwesome('fa fa-get-pocket')" class="fa fa-get-pocket" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gg" @click="setFontAwesome('fa fa-gg')" class="fa fa-gg" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gg-circle" @click="setFontAwesome('fa fa-gg-circle')" class="fa fa-gg-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-git" @click="setFontAwesome('fa fa-git')" class="fa fa-git" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-git-square" @click="setFontAwesome('fa fa-git-square')" class="fa fa-git-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-github" @click="setFontAwesome('fa fa-github')" class="fa fa-github" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-github-alt" @click="setFontAwesome('fa fa-github-alt')" class="fa fa-github-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-github-square" @click="setFontAwesome('fa fa-github-square')" class="fa fa-github-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gitlab" @click="setFontAwesome('fa fa-gitlab')" class="fa fa-gitlab" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gittip" @click="setFontAwesome('fa fa-gittip')" class="fa fa-gittip" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-glide" @click="setFontAwesome('fa fa-glide')" class="fa fa-glide" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-glide-g" @click="setFontAwesome('fa fa-glide-g')" class="fa fa-glide-g" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-google" @click="setFontAwesome('fa fa-google')" class="fa fa-google" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-google-plus" @click="setFontAwesome('fa fa-google-plus')" class="fa fa-google-plus" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-google-plus-circle" @click="setFontAwesome('fa fa-google-plus-circle')" class="fa fa-google-plus-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-google-plus-official" @click="setFontAwesome('fa fa-google-plus-official')" class="fa fa-google-plus-official" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-google-plus-square" @click="setFontAwesome('fa fa-google-plus-square')" class="fa fa-google-plus-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-google-wallet" @click="setFontAwesome('fa fa-google-wallet')" class="fa fa-google-wallet" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-gratipay" @click="setFontAwesome('fa fa-gratipay')" class="fa fa-gratipay" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-grav" @click="setFontAwesome('fa fa-grav')" class="fa fa-grav" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hacker-news" @click="setFontAwesome('fa fa-hacker-news')" class="fa fa-hacker-news" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-houzz" @click="setFontAwesome('fa fa-houzz')" class="fa fa-houzz" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-html5" @click="setFontAwesome('fa fa-html5')" class="fa fa-html5" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-imdb" @click="setFontAwesome('fa fa-imdb')" class="fa fa-imdb" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-instagram" @click="setFontAwesome('fa fa-instagram')" class="fa fa-instagram" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-internet-explorer" @click="setFontAwesome('fa fa-internet-explorer')" class="fa fa-internet-explorer" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ioxhost" @click="setFontAwesome('fa fa-ioxhost')" class="fa fa-ioxhost" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-joomla" @click="setFontAwesome('fa fa-joomla')" class="fa fa-joomla" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-jsfiddle" @click="setFontAwesome('fa fa-jsfiddle')" class="fa fa-jsfiddle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-lastfm" @click="setFontAwesome('fa fa-lastfm')" class="fa fa-lastfm" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-lastfm-square" @click="setFontAwesome('fa fa-lastfm-square')" class="fa fa-lastfm-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-leanpub" @click="setFontAwesome('fa fa-leanpub')" class="fa fa-leanpub" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-linkedin" @click="setFontAwesome('fa fa-linkedin')" class="fa fa-linkedin" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-linkedin-square" @click="setFontAwesome('fa fa-linkedin-square')" class="fa fa-linkedin-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-linode" @click="setFontAwesome('fa fa-linode')" class="fa fa-linode" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-linux" @click="setFontAwesome('fa fa-linux')" class="fa fa-linux" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-maxcdn" @click="setFontAwesome('fa fa-maxcdn')" class="fa fa-maxcdn" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-meanpath" @click="setFontAwesome('fa fa-meanpath')" class="fa fa-meanpath" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-medium" @click="setFontAwesome('fa fa-medium')" class="fa fa-medium" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-meetup" @click="setFontAwesome('fa fa-meetup')" class="fa fa-meetup" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-mixcloud" @click="setFontAwesome('fa fa-mixcloud')" class="fa fa-mixcloud" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-modx" @click="setFontAwesome('fa fa-modx')" class="fa fa-modx" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-odnoklassniki" @click="setFontAwesome('fa fa-odnoklassniki')" class="fa fa-odnoklassniki" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-odnoklassniki-square" @click="setFontAwesome('fa fa-odnoklassniki-square')" class="fa fa-odnoklassniki-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-opencart" @click="setFontAwesome('fa fa-opencart')" class="fa fa-opencart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-openid" @click="setFontAwesome('fa fa-openid')" class="fa fa-openid" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-opera" @click="setFontAwesome('fa fa-opera')" class="fa fa-opera" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-optin-monster" @click="setFontAwesome('fa fa-optin-monster')" class="fa fa-optin-monster" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pagelines" @click="setFontAwesome('fa fa-pagelines')" class="fa fa-pagelines" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-paypal" @click="setFontAwesome('fa fa-paypal')" class="fa fa-paypal" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pied-piper" @click="setFontAwesome('fa fa-pied-piper')" class="fa fa-pied-piper" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pied-piper-alt" @click="setFontAwesome('fa fa-pied-piper-alt')" class="fa fa-pied-piper-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pied-piper-pp" @click="setFontAwesome('fa fa-pied-piper-pp')" class="fa fa-pied-piper-pp" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pinterest" @click="setFontAwesome('fa fa-pinterest')" class="fa fa-pinterest" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pinterest-p" @click="setFontAwesome('fa fa-pinterest-p')" class="fa fa-pinterest-p" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-pinterest-square" @click="setFontAwesome('fa fa-pinterest-square')" class="fa fa-pinterest-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-product-hunt" @click="setFontAwesome('fa fa-product-hunt')" class="fa fa-product-hunt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-qq" @click="setFontAwesome('fa fa-qq')" class="fa fa-qq" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-quora" @click="setFontAwesome('fa fa-quora')" class="fa fa-quora" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ra" @click="setFontAwesome('fa fa-ra')" class="fa fa-ra" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-ravelry" @click="setFontAwesome('fa fa-ravelry')" class="fa fa-ravelry" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-rebel" @click="setFontAwesome('fa fa-rebel')" class="fa fa-rebel" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-reddit" @click="setFontAwesome('fa fa-reddit')" class="fa fa-reddit" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-reddit-alien" @click="setFontAwesome('fa fa-reddit-alien')" class="fa fa-reddit-alien" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-reddit-square" @click="setFontAwesome('fa fa-reddit-square')" class="fa fa-reddit-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-renren" @click="setFontAwesome('fa fa-renren')" class="fa fa-renren" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-resistance" @click="setFontAwesome('fa fa-resistance')" class="fa fa-resistance" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-safari" @click="setFontAwesome('fa fa-safari')" class="fa fa-safari" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-scribd" @click="setFontAwesome('fa fa-scribd')" class="fa fa-scribd" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-sellsy" @click="setFontAwesome('fa fa-sellsy')" class="fa fa-sellsy" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-share-alt" @click="setFontAwesome('fa fa-share-alt')" class="fa fa-share-alt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-share-alt-square" @click="setFontAwesome('fa fa-share-alt-square')" class="fa fa-share-alt-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-shirtsinbulk" @click="setFontAwesome('fa fa-shirtsinbulk')" class="fa fa-shirtsinbulk" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-simplybuilt" @click="setFontAwesome('fa fa-simplybuilt')" class="fa fa-simplybuilt" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-skyatlas" @click="setFontAwesome('fa fa-skyatlas')" class="fa fa-skyatlas" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-skype" @click="setFontAwesome('fa fa-skype')" class="fa fa-skype" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-slack" @click="setFontAwesome('fa fa-slack')" class="fa fa-slack" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-slideshare" @click="setFontAwesome('fa fa-slideshare')" class="fa fa-slideshare" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-snapchat" @click="setFontAwesome('fa fa-snapchat')" class="fa fa-snapchat" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-snapchat-ghost" @click="setFontAwesome('fa fa-snapchat-ghost')" class="fa fa-snapchat-ghost" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-snapchat-square" @click="setFontAwesome('fa fa-snapchat-square')" class="fa fa-snapchat-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-soundcloud" @click="setFontAwesome('fa fa-soundcloud')" class="fa fa-soundcloud" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-spotify" @click="setFontAwesome('fa fa-spotify')" class="fa fa-spotify" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stack-exchange" @click="setFontAwesome('fa fa-stack-exchange')" class="fa fa-stack-exchange" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stack-overflow" @click="setFontAwesome('fa fa-stack-overflow')" class="fa fa-stack-overflow" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-steam" @click="setFontAwesome('fa fa-steam')" class="fa fa-steam" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-steam-square" @click="setFontAwesome('fa fa-steam-square')" class="fa fa-steam-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stumbleupon" @click="setFontAwesome('fa fa-stumbleupon')" class="fa fa-stumbleupon" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stumbleupon-circle" @click="setFontAwesome('fa fa-stumbleupon-circle')" class="fa fa-stumbleupon-circle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-superpowers" @click="setFontAwesome('fa fa-superpowers')" class="fa fa-superpowers" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-telegram" @click="setFontAwesome('fa fa-telegram')" class="fa fa-telegram" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tencent-weibo" @click="setFontAwesome('fa fa-tencent-weibo')" class="fa fa-tencent-weibo" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-themeisle" @click="setFontAwesome('fa fa-themeisle')" class="fa fa-themeisle" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-trello" @click="setFontAwesome('fa fa-trello')" class="fa fa-trello" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tripadvisor" @click="setFontAwesome('fa fa-tripadvisor')" class="fa fa-tripadvisor" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tumblr" @click="setFontAwesome('fa fa-tumblr')" class="fa fa-tumblr" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-tumblr-square" @click="setFontAwesome('fa fa-tumblr-square')" class="fa fa-tumblr-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-twitch" @click="setFontAwesome('fa fa-twitch')" class="fa fa-twitch" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-twitter" @click="setFontAwesome('fa fa-twitter')" class="fa fa-twitter" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-twitter-square" @click="setFontAwesome('fa fa-twitter-square')" class="fa fa-twitter-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-usb" @click="setFontAwesome('fa fa-usb')" class="fa fa-usb" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-viacoin" @click="setFontAwesome('fa fa-viacoin')" class="fa fa-viacoin" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-viadeo" @click="setFontAwesome('fa fa-viadeo')" class="fa fa-viadeo" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-viadeo-square" @click="setFontAwesome('fa fa-viadeo-square')" class="fa fa-viadeo-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-vimeo" @click="setFontAwesome('fa fa-vimeo')" class="fa fa-vimeo" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-vimeo-square" @click="setFontAwesome('fa fa-vimeo-square')" class="fa fa-vimeo-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-vine" @click="setFontAwesome('fa fa-vine')" class="fa fa-vine" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-vk" @click="setFontAwesome('fa fa-vk')" class="fa fa-vk" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wechat" @click="setFontAwesome('fa fa-wechat')" class="fa fa-wechat" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-weibo" @click="setFontAwesome('fa fa-weibo')" class="fa fa-weibo" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-weixin" @click="setFontAwesome('fa fa-weixin')" class="fa fa-weixin" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-whatsapp" @click="setFontAwesome('fa fa-whatsapp')" class="fa fa-whatsapp" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wikipedia-w" @click="setFontAwesome('fa fa-wikipedia-w')" class="fa fa-wikipedia-w" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-windows" @click="setFontAwesome('fa fa-windows')" class="fa fa-windows" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wordpress" @click="setFontAwesome('fa fa-wordpress')" class="fa fa-wordpress" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wpbeginner" @click="setFontAwesome('fa fa-wpbeginner')" class="fa fa-wpbeginner" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wpexplorer" @click="setFontAwesome('fa fa-wpexplorer')" class="fa fa-wpexplorer" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wpforms" @click="setFontAwesome('fa fa-wpforms')" class="fa fa-wpforms" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-xing" @click="setFontAwesome('fa fa-xing')" class="fa fa-xing" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-xing-square" @click="setFontAwesome('fa fa-xing-square')" class="fa fa-xing-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-y-combinator" @click="setFontAwesome('fa fa-y-combinator')" class="fa fa-y-combinator" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-y-combinator-square" @click="setFontAwesome('fa fa-y-combinator-square')" class="fa fa-y-combinator-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-yahoo" @click="setFontAwesome('fa fa-yahoo')" class="fa fa-yahoo" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-yc" @click="setFontAwesome('fa fa-yc')" class="fa fa-yc" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-yc-square" @click="setFontAwesome('fa fa-yc-square')" class="fa fa-yc-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-yelp" @click="setFontAwesome('fa fa-yelp')" class="fa fa-yelp" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-yoast" @click="setFontAwesome('fa fa-yoast')" class="fa fa-yoast" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-youtube" @click="setFontAwesome('fa fa-youtube')" class="fa fa-youtube" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-youtube-play" @click="setFontAwesome('fa fa-youtube-play')" class="fa fa-youtube-play" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-youtube-square" @click="setFontAwesome('fa fa-youtube-square')" class="fa fa-youtube-square" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                    <section id="medical" class="mainParts">
                        <h2 class="page-header">医疗</h2>
                        <el-row>
                            <el-col :span="1"><i title="fa-ambulance" @click="setFontAwesome('fa fa-ambulance')" class="fa fa-ambulance" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-h-square" @click="setFontAwesome('fa fa fa-h-square')" class="fa fa-h-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-heart" @click="setFontAwesome('fa fa-heart')" class="fa fa-heart" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-heart-o" @click="setFontAwesome('fa fa-heart-o')" class="fa fa-heart-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-heartbeat" @click="setFontAwesome('fa fa-heartbeat')" class="fa fa-heartbeat" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-hospital-o" @click="setFontAwesome('fa fa-hospital-o')" class="fa fa-hospital-o" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-medkit" @click="setFontAwesome('fa fa-medkit')" class="fa fa-medkit" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-plus-square" @click="setFontAwesome('fa fa-plus-square')" class="fa fa-plus-square" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-stethoscope" @click="setFontAwesome('fa fa-stethoscope')" class="fa fa-stethoscope" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-user-md" @click="setFontAwesome('fa fa-user-md')" class="fa fa-user-md" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair" @click="setFontAwesome('fa fa-wheelchair')" class="fa fa-wheelchair" aria-hidden="true"></i></el-col>
                            <el-col :span="1"><i title="fa-wheelchair-alt" @click="setFontAwesome('fa fa-wheelchair-alt')" class="fa fa-wheelchair-alt" aria-hidden="true"></i></el-col>
                        </el-row>
                    </section>
                </div>
            </div>
        </el-dialog>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                dialogVisible_fontAwesome:false
            }
        },
        methods:{
            showFont:function(){
                this.dialogVisible_fontAwesome = true;
            },
            setFontAwesome:function(re){
                this.$emit('change-fontwesome',re)
                this.dialogVisible_fontAwesome = false;
            }
        }
    }
</script>

