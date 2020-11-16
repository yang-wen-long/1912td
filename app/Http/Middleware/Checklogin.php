<?php

namespace App\Http\Middleware;

use Closure;

class Checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
    $user = Request()->session()->get('userinfo');
//        $admin_id=5;
        if (empty($user)){
            echo  "<script>alert('请登录');location.href='/index/user/login';</script>";exit;
        }
        return $next($request);
    }
}
