@extends('layouts.'.skin())
@section('title','创建菜单')
@section('content')
    <div id="create" v-cloak>
        <el-card>
            <div slot="header" class="clearfix">
                <span>创建菜单</span>
            </div>
            <el-form ref="form" :model="form" label-width="160px" :rules="rules">
                <el-form-item label="上级">
                    <el-select placeholder="请选择上级" v-model="form.pid">
                        <el-option label="请选择上级" :value="0"></el-option>
                        {!! $treeOption !!}
                    </el-select>
                </el-form-item>
                <el-form-item label="规则" prop="name">
                    <el-input v-model="form.name"></el-input>
                    <span>例：Admin\MenuController@index 权限判断依据</span>
                </el-form-item>
                <el-form-item label="路由">
                    <el-input v-model="form.route"></el-input>
                    <span>如果用做左侧菜单栏必须填写此项</span>
                </el-form-item>
                <el-form-item label="标题" prop="title">
                    <el-input v-model="form.title"></el-input>
                    <span>标题</span>
                </el-form-item>
                <el-form-item label="备注">
                    <el-input v-model="form.stitle"></el-input>
                    <span>有子菜单的需要填写此项做为菜单封面名</span>
                </el-form-item>
                <el-form-item label="图标">
                    <el-input v-model="form.icon"></el-input>
                    <admin-font-awesome @change-fontwesome="setFontAwesome"></admin-font-awesome>
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
        new Vue({
            el:'#create',
            data:{
                dialogVisible_fontAwesome: false,
                loading: false,
                disabled: false,
                form: {
                    pid: 0,
                    name: '',
                    icon: '',
                    stitle: '',
                    title: '',
                    route:''
                },
                rules: {
                    name: [
                        {required: true, message: '规则不能为空', trigger: 'blur'}
                    ],
                    title: [
                        {required: true, message: '描述不能为空', trigger: 'blur'}
                    ]
                }
            },
            methods: {
                showFont() {
                    this.dialogVisible_fontAwesome = true;
                },
                setFontAwesome(v) {
                    this.form.icon = v;
                },
                submit() {
                    var that =this;
                    axios.post('/admin/menus',this.form).then(function(re){
                        that.$message({
                            message: '操作成功',
                            type: 'success'
                        })
                        that.loading = false;
                        that.disabled = false;
                    }).catch(function(){
                        that.loading = false;
                        that.disabled = false;
                    });
                },
                validate() {
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
                tip: function (msg, type) {
                    var tip = msg ? msg : '网络错误请重新提交';
                    var type = type ? type : 'error';
                    this.$message({
                        showClose: false,
                        message: tip,
                        type: type
                    });
                }
            }
        })
    </script>
@endsection
