<?php

namespace App\Http\Controllers\Postal\User;

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
        $this->middleware('auth.user', ['except' => 'logout']);
    }

    protected $redirectTo = '/dashboard';

    public function showLoginForm()
    {
        return view('user.login');
    }
    public function username()
    {
        return 'email';
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->forget(AppConstant::USER_GUARD);
        $request->session()->regenerate();
        return redirect('/');
    }

    protected function guard()
    {
        return Auth::guard(AppConstant::USER_GUARD);
    }
}
