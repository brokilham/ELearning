<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use auth;
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
    //protected $redirectTo = '/home';

    public function redirectTo()
    {
        if(Auth::check()) {
            if (Auth::user()->hak_akses === 'mahasiswa') {
                //return view('backend.katalog.main');
                return '/katalog/main_katalog';
            }
            elseif (Auth::user()->hak_akses  === 'dosen') {
                //return view('backend.master_materi.main');
                return '/master_materi/main_master';
            }
        }
        else{
            return '/';
        }  
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
