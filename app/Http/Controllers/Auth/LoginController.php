<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $userData = array(
            'email' =>Input::get('email'),
            'password' =>Input::get('password'),
        );

        if (Auth::attempt($userData)) {
            if (Auth::user()->role == 'student') {
                return redirect('student');
            } elseif (Auth::user()->role == 'teacher') {
                return redirect('teacher');
            } elseif (Auth::user()->role == 'admin') {
                return redirect('admin');
            }
        }
        return redirect('login')->with('message', 'Account not found');
    }
}
