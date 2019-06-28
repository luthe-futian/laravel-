<?php

use Illuminate\Database\Seeder;

class AuthRulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auth_rules')->insert([
            ['id' => 1, 'name' => 'Admin\IndexController@index', 'route' => '/admin/index', 'title' => '后台首页', 'status' => 1, 'pid' => 0, 'icon' => 'fa fa-home', 'stitle' => '后台首页', 'isMenu' => 1, 'display' => 1],
            ['id' => 2, 'name' => 'Admin\MenuController@index', 'route' => '/admin/menus', 'title' => '菜单列表', 'status' => 1, 'pid' => 0, 'icon' => 'fa fa-navicon', 'stitle' => '菜单管理', 'isMenu' => 1, 'display' => 1],
            ['id' => 3, 'name' => 'Admin\MenuController@create', 'route' => '/admin/menus/create', 'title' => '添加菜单', 'status' => 1, 'pid' => 2, 'icon' => 'fa-address-card-o', 'stitle' => '', 'isMenu' => 1, 'display' => 1],
            ['id' => 4, 'name' => 'Admin\MenuController@edit', 'route' => '', 'title' => '菜单编辑', 'status' => 1, 'pid' => 2, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 5, 'name' => 'Admin\MenuController@destroy', 'route' => '', 'title' => '菜单删除', 'status' => 1, 'pid' => 2, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 6, 'name' => 'Admin\MenuController@store', 'route' => '/admin/menus', 'title' => '菜单保存', 'status' => 1, 'pid' => 2, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 7, 'name' => 'Admin\MenuController@update', 'route' => '', 'title' => '菜单更新', 'status' => 1, 'pid' => 2, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 8, 'name' => 'Admin\MenuController@status', 'route' => '', 'title' => '菜单状态', 'status' => 1, 'pid' => 2, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 9, 'name' => 'Admin\MenuController@menu', 'route' => '', 'title' => '是否是菜单', 'status' => 1, 'pid' => 2, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 10, 'name' => 'Admin\MenuController@display', 'route' => '', 'title' => '是否显示', 'status' => 1, 'pid' => 2, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 11, 'name' => 'Admin\AdminController@index', 'route' => '/admin/admins', 'title' => '管理员列表', 'status' => 1, 'pid' => 0, 'icon' => 'fa fa-user-md', 'stitle' => '管理员管理', 'isMenu' => 1, 'display' => 1],
            ['id' => 12, 'name' => 'Admin\AdminController@create', 'route' => '/admin/admins/create', 'title' => '管理员添加', 'status' => 1, 'pid' => 6, 'icon' => 'fa fa-user-plus', 'stitle' => '', 'isMenu' => 1, 'display' => 1],
            ['id' => 13, 'name' => 'Admin\AdminController@edit', 'route' => '', 'title' => '管理员编辑', 'status' => 1, 'pid' => 6, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 14, 'name' => 'Admin\AdminController@destroy', 'route' => '', 'title' => '管理员删除', 'status' => 1, 'pid' => 6, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 15, 'name' => 'Admin\AdminController@status', 'route' => '', 'title' => '改变管理员状态', 'status' => 1, 'pid' => 6, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 16, 'name' => 'Admin\AdminController@store', 'route' => '', 'title' => '管理员保存', 'status' => 1, 'pid' => 6, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 17, 'name' => 'Admin\AdminController@update', 'route' => '', 'title' => '管理员更新', 'status' => 1, 'pid' => 6, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 18, 'name' => 'Admin\GroupController@index', 'route' => '/admin/groups', 'title' => '角色列表', 'status' => 1, 'pid' => 0, 'icon' => 'fa fa-chain', 'stitle' => '角色管理', 'isMenu' => 1, 'display' => 1],
            ['id' => 19, 'name' => 'Admin\GroupController@create', 'route' => '/admin/groups/create', 'title' => '角色添加', 'status' => 1, 'pid' => 18, 'icon' => 'fa-adjust', 'stitle' => '', 'isMenu' => 1, 'display' => 1],
            ['id' => 20, 'name' => 'Admin\GroupController@store', 'route' => '', 'title' => '角色保存', 'status' => 1, 'pid' => 18, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 21, 'name' => 'Admin\GroupController@edit', 'route' => '', 'title' => '角色编辑', 'status' => 1, 'pid' => 18, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 22, 'name' => 'Admin\GroupController@update', 'route' => '', 'title' => '角色更新', 'status' => 1, 'pid' => 18, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 23, 'name' => 'Admin\GroupController@destroy', 'route' => '', 'title' => '角色删除', 'status' => 1, 'pid' => 18, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 24, 'name' => 'Admin\GroupController@status', 'route' => '', 'title' => '角色状态', 'status' => 1, 'pid' => 18, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 25, 'name' => 'Admin\GroupController@permission', 'route' => '', 'title' => '权限分配', 'status' => 1, 'pid' => 18, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0],
            ['id' => 26, 'name' => 'Admin\GroupController@permissionStore', 'route' => '', 'title' => '权限保存', 'status' => 1, 'pid' => 18, 'icon' => '', 'stitle' => '', 'isMenu' => 0, 'display' => 0]
        ]);

    }
}
