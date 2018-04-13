<?php

namespace App\Http\Controllers\Postal\SuperAdmin;

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
        $this->middleware('auth.superadmin', ['except' => 'logout']);
    }

    protected $redirectTo = '/superadmin/dashboard';

    public function showLoginForm()
    {
        return view('superadmin.login');
    }

    public function username()
    {
        return 'email';
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->forget(AppConstant::SUPERADMIN_GUARD);
        $request->session()->regenerate();
        return redirect('/superadmin');
    }

    protected function guard()
    {
        return Auth::guard(AppConstant::SUPERADMIN_GUARD);
    }

    public function credentials(Request $request)
    {
        return ['email' => $request->email, 'password' => $request->password];
    }
}
