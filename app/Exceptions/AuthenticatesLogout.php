<?php

namespace App\Exceptions;

use Illuminate\Http\Request;

trait AuthenticatesLogout
{
    function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->forget($this->guard()->getName());
        $request->session()->regenerate();
        return redirect('/admin/login');
    }
}