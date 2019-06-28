<div id="sidebarIndex">
    <div v-cloak>
        <el-scrollbar wrap-class="scrollbar-wrapper" class="sidebar-container">
            <el-menu
                    :show-timeout="200"
                    default-active="11"
                    :collapse="isCollapse"
                    mode="vertical"
                    background-color="#3a5a56"
                    text-color="#fff"
                    active-text-color="#409EFF"
            >
                <el-menu-item index="1" class="sidebarIndex" ref="sameIndex">
                    <div class="sidebarTop" v-show="!isCollapse">
                        <div class="topLeft">
                            <div class="topLeft-1"><i class="time">08:39:08</i></div>
                            <div class="topLeft-2">APJFX</div>
                        </div>
                        <div class="topRight">
                            <div class="topRight-1">
                                <i class="account">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                            </div>
                            <div class="topRight-2">{{ auth('admin')->user()->uname }}</div>
                        </div>
                    </div>
                    <el-tooltip v-show="isCollapse" class="item" effect="dark" content="信息栏" placement="right">
                        <i class="svg-icon fa fa-cog"></i>
                    </el-tooltip>
                </el-menu-item>
                @foreach($tree as $t)
                    @include('admin.components.sidebar.item',['item'=>$t,'base-path' => $t['route']])
                @endforeach
            </el-menu>
        </el-scrollbar>
    </div>
</div>
<script>
    var sideinde = new Vue({
        el: '#sidebarIndex',
        data: {
            isCollapse: true
        }
    });
</script>
