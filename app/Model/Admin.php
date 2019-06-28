<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\AuthRule;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $table = 'admins';
    protected $fillable = ['uname','password'];
    /**
    *多对多关联获取角色
     * 一个用户对应多个角色表数据
     */
    public function groups()
    {
        return $this->belongsToMany('App\Model\AuthGroup','auth_group_accesses','uid','group_id');
    }

}
