<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\AuthenticatesLogout;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers, AuthenticatesLogout {
        AuthenticatesLogout::logout insteadof AuthenticatesUsers;
    }
    /**使用系统自带登录退出 只是改变相关参数*/
    protected $redirectTo = '/admin/index';
    protected $username;

    public function __construct()
    {
        //guest:admin中间件参数
        $this->middleware('guest:admin', ['except' => 'logout']);
        $this->username = config('admin.global.username');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function index()
    {
        return view('admin.login');
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }

    protected function username()
    {
        return 'uname';
    }
}
