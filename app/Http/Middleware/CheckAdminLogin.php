<?php

namespace App\Http\Middleware;

use App\Utils\AppConstant;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminLogin
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
        $auth = Auth::guard(AppConstant::ADMIN_GUARD);
        if (!$auth->check()) {
            return redirect('/admin');
        }
        return $next($request);
    }
}
