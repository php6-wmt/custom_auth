<?php

namespace App\Http\Controllers\Postal\Admin;

use App\Utils\AppConstant;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth.admin', ['except' => 'logout']);
    }

    protected $redirectTo = '/admin/dashboard';

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function username()
    {
        return 'email';
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->forget(AppConstant::ADMIN_GUARD);
        $request->session()->regenerate();
        return redirect('/admin');
    }

    protected function guard()
    {
        return Auth::guard(AppConstant::ADMIN_GUARD);
    }

    public function credentials(Request $request)
    {
        return ['email' => $request->email, 'password' => $request->password];
    }
}
