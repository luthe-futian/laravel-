@extends('layouts.'.skin())
@section('style')
    <style>
        .bottom {
            margin-top: 20px;
            text-align: center;
        }

        .btn- {
            border: 1px solid #DCDFE6;
            color: #606266;
            background: #FFF;
        }
    </style>
@endsection
@section('content')
    <div id="permission" v-cloak>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span><el-button icon="el-icon-refresh" @click.native="refresh" circle size="mini"></el-button></span>
                <span>{{ $group->title }}-权限</span>
            </div>
            <div>
            </div>
            <el-checkbox-group v-model="rules">
                <el-row>
                    @foreach($ruleAll as $rule)
                        <el-col :span="3">
                            <el-checkbox-button :label="{{$rule['id']}}">{{$rule['title']}}</el-checkbox-button>
                        </el-col>
                    @endforeach
                </el-row>
            </el-checkbox-group>
            <el-row class="bottom">
                <el-col>
                    <el-button  type="primary" @click="submit" :loading="loading" :disabled="disabled">提交</el-button>
                    <el-button  type="primary" @click="cancel" class="btn-">取消</el-button>
                </el-col>
            </el-row>
        </el-card>
    </div>
@endsection
@section('script')
    <script>
        new Vue({
            el: '#permission',
            data: {
                rules: [],
                loading: false,
                disabled: false,
                id: ''
            },
            created: function () {
                var ruless = @json($rules);
                var group = @json($group);
                this.id = group.id
                this.rules = ruless;
            },
            methods: {
                submit: function () {
                    var that = this;
                    that.loading = true;
                    that.disabled = true;
                    axios.post('/admin/groups/' + this.id + '/permissionStore', {rules: this.rules}).then(function (re) {
                        that.$message({
                            message: '操作成功',
                            type: 'success'
                        });
                        that.loading = false;
                        that.disabled = false;
                    }).catch(function () {
                        that.loading = false;
                        that.disabled = false;
                    });
                },
                refresh: function () {
                    window.location.href="/admin/groups/"+this.id+"/permission";
                },
                cancel:function(){
                    window.location.href="/admin/groups";
                }
            }
        });
    </script>
@endsection