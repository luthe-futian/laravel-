<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\AuthGroup;
use App\Model\AuthGroupAccess;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{

    public function index(Request $request, Admin $admin)
    {
        $limit = $request->input('limit', 10);
        $keyword = $request->input('searKey', '');
        $admins =  $admin
            ->where(function ($sql) use ($keyword) {
                if (!empty($keyword)) {
                    return $sql->where('uname', 'like', '%' . $keyword . '%');
                }
            })
            ->paginate($limit);
        if ($request->ajax()) {
            return $admins;
        }
        return view('admin.admin.index',compact('admins'));
    }

    public function create(AuthGroup $authGroup)
    {
        $roles = $authGroup->where('status', 1)->get();
        return view('admin.admin.create', compact('roles'));
    }

    public function store(Request $request, AuthGroupAccess $authGroupAccess, Admin $admin)
    {
        $message = [
            'uname.required' => '用户名不能为空',
            'uname.unique' => '用户名已存在',
            'password.required' => '密码不能为空',
            'role.required' => '至少选择一个角色',
            'role.array' => '发生意料之外的错误，请关闭并重新打开页面'
        ];
        $this->validate($request, [
            'uname' => 'required|unique:admins',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|array',
        ], $message);
        $adminData = $request->except(['role', 'password_confirmation']);
        $adminData['password'] = bcrypt($adminData['password']);
        $admin = $admin->create($adminData); //属于批量插入 模型中得定义$fillable
        $admin->groups()->sync($request->only('role')['role']); //多对多关联插入
    }

    public function edit(AuthGroup $authGroup, Admin $admin)
    {
        $can = auth('admin')->user()->can('delete', $admin);
        if (!$can) abort('401', '没有权限！尝试修改其他人');
        $roles = $authGroup->get();
        $haveRoles = $admin->groups()->get();
        $haveRoles = array_column($haveRoles->toArray(), 'id');
        return view('admin.admin.edit', compact('roles', 'haveRoles', 'admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        //只有id 为1 或自己修改
        $can = auth('admin')->user()->can('update', $admin);
        if (!$can) abort('403', '没有权限');
        $message = [
            'uname.required' => '用户名不能为空',
            'uname.unique' => '用户名已存在',
            'password.required' => '密码不能为空',
            'role.required' => '至少选择一个角色',
            'role.array' => '发生意料之外的错误，请关闭并重新打开页面'
        ];
        $this->validate($request, [
            'uname' => [
                'required',
                Rule::unique('admins')->ignore($admin->id), //不判断自己的唯一
            ],
            'password' => 'required|min:6|confirmed',
            'role' => 'required|array',
        ], $message);
        $adminData = $request->except(['role', 'password_confirmation']);
        $adminData['password'] = bcrypt($adminData['password']);
        $re = $admin->where('id', $admin->id)->update($adminData); //属于批量插入 模型中得定义$fillable
        if ($re) {
            $admin->groups()->sync($request->only('role')['role']); //多对多关联插入
        }
    }

    public function destroy(Admin $admin)
    {
        //只有id 为1 或自己修改
        $can = auth('admin')->user()->can('delete', $admin);
        if (!$can) abort('403', '没有权限');
        $re = $admin->delete();
        if ($re) {
            $admin->groups()->sync([]);
        }
    }

    public function status(Admin $admin, $value)
    {
        $admin->status = $value;
        $admin->save();

    }

    //切换皮肤
    public function skin(Request $request)
    {
        $admin = auth('admin')->user();
        $admin->skin = $request->skin;
        $admin->save();
    }
}
