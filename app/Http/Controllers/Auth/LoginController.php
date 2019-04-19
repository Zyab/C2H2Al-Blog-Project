<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'email.required' => 'Email Không có rồi kìa ',
            'email.email' => 'Email phải đúng định dạng email chứ',
            'password.min' => 'Bát Word phải nhiều hơn 6 kí tự',
            'password.confirmed' => 'Bát Word ko giống nhau ah?',
            'password.required' => 'Bát Word chua dien',
        ]);
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
