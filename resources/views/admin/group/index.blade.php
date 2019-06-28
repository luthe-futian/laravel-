@extends('layouts.'.skin())
@section('content')
    <div id="index" v-cloak>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span>角色列表</span>
            </div>
            <el-form ref="form" :inline="true">
                <el-form-item>
                    <el-button icon="el-icon-refresh" @click.native="refresh">刷新</el-button>
                </el-form-item>
                <el-form-item>
                    <el-input
                            placeholder="描述"
                            v-model="searKey">
                    </el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" plain @click.native="search()">提交</el-button>
                </el-form-item>
            </el-form>
            <el-table
                    :data="tableData"
                    style="width: 100%">
                <el-table-column
                        label="id"
                        width="180">
                    <template slot-scope="scope">
                        <el-checkbox></el-checkbox>
                        <span style="margin-left: 10px">@{{ scope.row.id }}</span>
                    </template>
                </el-table-column>
                <el-table-column
                        label="角色"
                        prop="title"
                        width="180">
                </el-table-column>
                <el-table-column
                        label="状态"
                        width="180">
                    <template slot-scope="scope">
                        <el-switch
                                v-model="scope.row.status"
                                active-color="#1AB394"
                                inactive-color="gray"
                                :active-value="1"
                                @change="change(scope.row,'status','status')"
                                :inactive-value="0">
                        </el-switch>
                    </template>
                </el-table-column>
                <el-table-column label="操作">
                    <template slot-scope="scope">
                        <el-button
                                size="mini"
                                icon="el-icon-edit"
                                @click.native="handleEdit(scope.$index, scope.row)">编辑
                        </el-button>
                        <el-button
                                size="mini"
                                type="danger"
                                icon="el-icon-delete"
                                @click.native="handleDelete(scope.$index, scope.row)">删除
                        </el-button>
                        <el-button
                                size="mini"
                                @click.native="handleGroup(scope.$index, scope.row)">权限分配
                        </el-button>
                    </template>
                </el-table-column>
            </el-table>
            <div class="block">
                <el-pagination
                        @size-change="handleSizeChange"
                        @current-change="handleCurrentChange"
                        :current-page="currentPage"
                        :page-sizes="[10, 20, 30, 40]"
                        :page-size="per_page"
                        layout="total, sizes, prev, pager, next, jumper"
                        :total="total">
                </el-pagination>
            </div>
        </el-card>
    </div>
@endsection
@section('script')
    <script>
        new Vue({
            el: '#index',
            data: {
                tableData: [],
                currentPage: 1,
                per_page: 10,
                total: 0,
                searKey: ''
            },
            created: function () {
                var groups = @json($groups);
                this.tableData = groups.data;
                this.total = groups.total;
                this.per_page = parseInt(groups.per_page);
            },
            methods: {
                getLogList: function (pTo) {
                    var that = this;
                    var param = '';
                    param += '?page=' + this.currentPage + '&limit=' + this.per_page;
                    if (pTo) {
                        param += pTo;
                    }
                    axios.get('/admin/groups' + param).then(function (re) {
                        that.tableData = re.data.data;
                        that.total = re.data.total;
                        that.per_page = parseInt(re.data.per_page);
                    })
                },
                handleEdit: function (index, row) {
                    window.location.href = "/admin/groups/" + row.id + '/edit';
                },
                handleDelete: function (index, row) {
                    var that = this;
                    axios.delete('/admin/groups/' + row.id).then(function (re) {

                        that.getLogList();
                    });
                },
                refresh: function () {
                    window.location.href="/admin/groups";
                },
                change: function (r, x, f) {
                    var that = this;
                    axios.get('/admin/groups/' + r.id + '/' + r[x] + '/' + f).then(function () {
                        that.$message({
                            message: '操作成功',
                            type: 'success'
                        })
                        that.getLogList();
                    })
                },
                serachWhere: function () {
                    var searchK = '';
                    if (this.searKey) searchK += '&searKey=' + this.searKey;
                    return searchK;
                },
                search: function () {
                    if (this.serachWhere()) {
                        this.currentPage = 1;
                        this.per_page = 10;
                    }
                    this.getLogList(this.serachWhere());
                },
                handleSizeChange: function (val) {
                    this.per_page = val;
                    this.getLogList();
                },
                handleCurrentChange: function (val) {
                    this.currentPage = val;
                    this.getLogList(this.serachWhere());
                },
                handleGroup: function (index, row) {
                    window.location.href = "/admin/groups/" + row.id + '/permission';
                }
            }
        });
    </script>
@endsection