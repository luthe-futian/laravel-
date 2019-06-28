<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Route;

class AuthRule extends Model
{
    protected $table = 'auth_rules';
    protected $guarded = ['status', 'isMenu'];
    public $timestamps = false;


    public static function tree($list)
    {
        return list_tree($list);
    }

    public function scopeIsMenu($query)
    {
        return $query->where('isMenu', 1);
    }

    //局部条件
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }

    public function scopeDisplay($query)
    {
        return $query->where('display', 1);
    }

    //格式化下拉菜单 基于element
    public function optionHtml($tree)
    {
        $str = '';
        foreach ($tree as $v) {
            $str .= '<el-option label="' . str_repeat('一', $v['level']) . $v['title'] . '" :value="' . $v['id'] . '"></el-option>';
            if (isset($v['child'])) {
                $str .= $this->optionHtml($v['child']);
            }
        }
        return $str;
    }

    /**获取本人权限菜单*/
    public function filter_rules($groups)
    {
        //所有菜单
        $rules = $this->status()->get()->toArray();
        $rules = array_filter($rules, function ($v) use ($groups) {
            return in_array($v['id'], $groups);
        });
        return $rules;
    }

    public function hasAnyRole()
    {
        $groups = auth('admin')->user()->groups()->get();
        $groups = array_column($groups->toArray(), 'id');
        $authGroupRule = new AuthGroupRule();
        $rule_ids = $authGroupRule->whereIn('group_id', $groups)->get()->toArray();
        $rule_ids = array_unique(array_column($rule_ids, 'rule_id'));
        $menuList = $this->filter_rules($rule_ids);
        $menuNameList = array_column($menuList, 'name');

        $action = Route::currentRouteAction();
        $actionNamecpace = 'App\Http\Controllers\\';
        $url = explode($actionNamecpace, $action);
        if (!in_array($url[1], $menuNameList)) return true;
        return false;
    }
}
