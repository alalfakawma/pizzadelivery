<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Once the user is authenticated
     * @return \Illuminate\Http\Response
     */
    public function authenticated() {
        if (Auth::user()->hasRole(['superadmin', 'admin'])) {
            return redirect()->route('dashboard.overview');
        } else if (Auth::user()->hasRole('customer')) {
            return redirect('/');
        } else if (Auth::user()->hasRole('employee')) {
            return redirect()->route('dashboard.orders');
        }
    }

    /**
     * Override username to use username instead of email for login
     * @return string
     */
    public function username() {
        return 'username';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
