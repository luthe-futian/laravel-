<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminAuth
{
    /**
     * admin auth
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }
//        else if(Auth::guard($guard)->user()->status !== 1){
//            session()->flash('error','此账号暂时无法使用');
//            Auth::logout();
//            return redirect('/admin/logout');
//        }
        return $next($request);
    }
}
