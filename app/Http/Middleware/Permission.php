<?php

namespace App\Http\Middleware;

use App\Model\AuthRule;
use Closure;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth('admin')->user()) {
            $authRule = new AuthRule();
            if ($authRule->hasAnyRole()) {
                if ($request->ajax()) {
                    return response(['errors' => ['message' => ['没有权限']]], '401');
                } else {
                    abort(401, '没有权限');
                }
            }
        }
        return $next($request);
    }
}
