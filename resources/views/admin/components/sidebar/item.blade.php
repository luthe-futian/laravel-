<div class="menu-wrapper">
    @if(!isset($item['child']) && $item['level'] !== 1)
        <el-menu-item index="{{ $item['route'] }}">
            @if($item['level'] == 1)
                <i class="{{ $item['icon'] }} svg-icon"></i>
            @endif
            <a href="{{ $item['route'] }}">
                <span>{{ $item['title'] }}</span>
            </a>
        </el-menu-item>

    @else
        <el-submenu index="{{ $item['route'] }}">
            <template slot="title">
                <i class="{{ $item['icon'] }} svg-icon"></i>
                <span>{{ $item['stitle'] }}</span>
            </template>
            <a href="{{ $item['route'] }}">
                <el-menu-item index="{{ $item['route'] }}">
                    <span>{{ $item['title'] }}</span>
                </el-menu-item>
            </a>
            @if(isset($item['child']))
                @foreach($item['child'] as $v)
                    @include('admin.components.sidebar.item',['item'=>$v])
                @endforeach
            @endif
        </el-submenu>
    @endif
</div>
