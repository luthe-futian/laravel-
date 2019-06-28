@extends('layouts.'.skin())
@section('title','管理员添加')

@section('content')
    <div id="create" v-cloak>
        <el-card>
            <div slot="header" class="clearfix">
                <span>角色添加</span>
            </div>
            <el-form ref="form" :model="form" label-width="160px" :rules="rules">
                <el-form-item label="角色名" prop="title">
                    <el-input v-model="form.title"></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="validate" :loading="loading" :disabled="disabled">保存内容</el-button>
                </el-form-item>
            </el-form>
        </el-card>
    </div>
@endsection
@section('script')
    <script>
        var create = new Vue({
            el: '#create',
            data: {
                loading: false,
                disabled: false,
                form: {
                    title: ''
                },
                rules: {
                    title: [
                        {required: true, message: '角色名不能为空', trigger: 'blur'}
                    ]
                }
            },
            methods:{
                change:function(re){},
                validate:function() {
                    var that = this;
                    that.loading = true;
                    that.disabled = true;
                    this.$refs['form'].validate(function (valid) {
                        if (valid) {
                            that.submit()
                        } else {
                            that.loading = false;
                            that.disabled = false;
                            return false;
                        }
                    });
                },
                submit: function () {
                    var that = this;
                    axios.post('/admin/groups', this.form).then(function (re) {
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
            }
        })
    </script>
@endsection