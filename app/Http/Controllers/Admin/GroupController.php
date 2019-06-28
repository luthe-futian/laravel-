<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\AuthGroup;
use App\Model\AuthRule;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(Request $request, AuthGroup $authGroup)
    {
        $limit = $request->input('limit', 10);
        $keyword = $request->input('searKey', '');
        $groups =  $authGroup
            ->where(function ($sql) use ($keyword) {
                if (!empty($keyword)) {
                    return $sql->where('title', 'like', '%' . $keyword . '%');
                }
            })
            ->paginate($limit);
        if ($request->ajax()) {
            return $groups;
        }
        return view('admin.group.index',compact('groups'));
    }

    public function create()
    {
        return view('admin.group.create');
    }

    public function store(Request $request, AuthGroup $authGroup)
    {
        $message = [
            'title.required' => '角色名不能为空'
        ];
        $this->validate($request, [
            'title' => 'required'
        ], $message);
        $authGroup->create($request->only('title'));
    }

    public function edit(AuthGroup $group)
    {
        return view('admin.group.edit', compact('group'));
    }

    public function update(Request $request, AuthGroup $group)
    {
        $message = [
            'title.required' => '角色名不能为空'
        ];
        $this->validate($request, [
            'title' => 'required'
        ], $message);
        $group->fill($request->all())->save();
    }

    public function destroy(AuthGroup $group)
    {
        $group->delete();
    }

    public function status(AuthGroup $group, $value)
    {
        $group->status = $value;
        $group->save();
    }

    //权限分配页面
    public function permission(AuthGroup $group, AuthRule $authRule)
    {
        $ruleAll = $authRule->status()->get()->toArray();
        $ruleAll = filedSort($ruleAll, 'name');
        $rules = $group->rules()->get()->toArray();
        $rules = array_column($rules, 'id');
        return view('admin.group.permission', compact('group', 'rules', 'ruleAll'));
    }

    public function permissionStore(AuthGroup $group, Request $request)
    {
        $message = [
            'rules.required' => '必须选择权限',
            'rules.array' => '发生未知错误，关闭页面，再次打开发起请求。'
        ];
        $this->validate($request, [
            'rules' => 'required|array'
        ], $message);

        $group->rules()->sync($request->only('rules')['rules']);
    }
}
