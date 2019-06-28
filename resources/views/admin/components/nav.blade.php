<div id="nav" v-cloak>
    <el-menu class="hor-navbar" mode="horizontal" style="border-bottom: none;">
        <div class="left-menu">
            <span id="hamburger" class="hamburger-container fa fa-navicon"></span>
        </div>
        <div class="right-menu">
            <el-dropdown  type="primary" trigger="click" class="message">
                <el-tooltip content="消息通知" effect="dark" placement="bottom">
                    <el-badge :value="1" class="item">
                        <el-button style="padding:7px;background-color:#44403f;color:#fff;" icon="el-icon-bell" circle></el-button>
                    </el-badge>
                </el-tooltip>
                <el-dropdown-menu slot="dropdown">
                    <el-dropdown-item>
                       通知（5）
                    </el-dropdown-item>
                    <el-dropdown-item divided>
                        <a href="javascript:void(0);">
                            <div class="-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="-body">
                                <h6 class="-heading">今天完成最后的开发计划</h6>
                                <h6 >3分钟之前</h6>
                            </div>
                        </a>
                    </el-dropdown-item>
                    <el-dropdown-item divided>
                        <a href="javascript:void(0);">
                            <div class="-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="-body">
                                <h6 class="-heading">今天完成最后的开发计划</h6>
                                <h6 >3分钟之前</h6>
                            </div>
                        </a>
                    </el-dropdown-item>
                    <el-dropdown-item divided>
                        <a href="javascript:void(0);">
                            <div class="-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="-body">
                                <h6 class="-heading">今天完成最后的开发计划</h6>
                                <h6 >3分钟之前</h6>
                            </div>
                        </a>
                    </el-dropdown-item>
                    <el-dropdown-item divided>
                        <a href="javascript:void(0);">
                            <div class="-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="-body">
                                <h6 class="-heading">今天完成最后的开发计划</h6>
                                <h6 >3分钟之前</h6>
                            </div>
                        </a>
                    </el-dropdown-item>
                </el-dropdown-menu>
            </el-dropdown>
            <el-dropdown  type="primary" trigger="click" class="skin">
                <el-tooltip  content="切换主题" effect="dark" placement="bottom">
                    <el-button style="padding:7px;background-color:#44403f;color:#fff;" class="fa fa-clone" circle></el-button>
                </el-tooltip>
                <el-dropdown-menu slot="dropdown">
                    <el-dropdown-item><el-tag @click.native="skin('index')" style="cursor:pointer;">深蓝</el-tag></el-dropdown-item>
                    <el-dropdown-item><el-tag @click.native="skin('layout')" style="cursor:pointer;" type="success">深绿</el-tag></el-dropdown-item>
                </el-dropdown-menu>
            </el-dropdown>
            <div class="logout">
                <a href="/admin/logout">
                    <el-tooltip content="退出登录" effect="dark" placement="bottom">
                        <el-button style="padding:7px;background-color:#44403f;color:#fff;" class="fa fa-power-off" circle></el-button>
                    </el-tooltip>
                </a>
            </div>

        </div>
    </el-menu>
</div>
<script>
    new Vue({
        el: '#nav',
        methods:{
            skin:function(v){
                axios.post('/admin/skin',{skin:v}).then(function(){
                    if(v == 'index'){
                        window.location.href="/admin/index"
                    }else{
                       window.location.reload();
                    }
                })
            }
        }
    });
</script>

