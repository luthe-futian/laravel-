<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AuthGroup extends Model
{
    //角色表
    public $table = 'auth_groups';
    public $timestamps = false;
    protected $fillable = ['title'];

    //多对多反向关联
    //获得此角色下的所有用户
    public function Admines()
    {
        return $this->belongsToMany('App\Model\Admin','admins','group_id','uid');
    }
    //多对多
    //一个角色对应多个权限菜单
    public function rules()
    {
        return $this->belongsToMany('App\Model\AuthRule','auth_group_rules','group_id','rule_id');
    }
    public function getGroups()
    {
        return auth('admin')->user()->groups();
    }
}
