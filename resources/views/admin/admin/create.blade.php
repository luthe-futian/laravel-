@extends('layouts.'.skin())
@section('title','管理员添加')

@section('content')
    <div id="create" v-cloak>
        <el-card>
            <div slot="header" class="clearfix">
                <span>管理员添加</span>
            </div>
            <el-form ref="form" :model="form" label-width="160px" :rules="rules">
                <el-form-item label="用户名" prop="uname">
                    <el-input v-model="form.uname"></el-input>
                </el-form-item>
                <el-form-item label="密码" prop="password">
                    <el-input v-model="form.password"></el-input>
                </el-form-item>
                <el-form-item label="重复密码" prop="password_confirmation ">
                    <el-input v-model="form.password_confirmation"></el-input>
                </el-form-item>
                    <el-form-item label="角色" prop="role">
                        <el-checkbox-group v-model="form.role">
                            @foreach($roles as $role)
                                <el-checkbox label="{{ $role->id }}" name="role" @change="change">{{ $role->title }}</el-checkbox>
                            @endforeach
                        </el-checkbox-group>
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
        var validatePass = function (rule, value, callback){
            console.log(11);
            if (value === '') {
                callback(new Error('请输入密码'));
            } else {
                if (create.form.password !== '') {
                    create.$refs.form.validateField('checkPass');
                }
                callback();
            }
        };
        var validatePass2 = function (rule, value, callback) {
            if (value === '') {
                callback(new Error('请再次输入密码'));
            } else if (value !== create.form.password) {
                callback(new Error('两次输入密码不一致!'));
            } else {
                callback();
            }
        };
        var create = new Vue({
            el: '#create',
            data: {
                loading: false,
                disabled: false,
                form: {
                    uname: '',
                    password: '',
                    password_confirmation: '',
                    role: []
                },
                rules: {
                    uname: [
                        {required: true, message: '用户名不能为空', trigger: 'blur'}
                    ],
                    password: [
                        { validator: validatePass, trigger: 'blur'}
                    ],
                    password_confirmation: [
                        { validator: validatePass2, trigger: 'blur'}
                    ],
                    role: [
                        { type: 'array', required: true, message: '请至少选择一个角色', trigger: 'change' }
                    ],
                }
            },
            methods:{
                change:function(re){
                    console.log(this.form.role);
                },
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
                    axios.post('/admin/admins', this.form).then(function (re) {
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