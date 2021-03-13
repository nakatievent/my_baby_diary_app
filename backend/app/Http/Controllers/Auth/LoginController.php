<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;


    protected $redirectTo = '/posts';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function guestLogin()
    {
        $email = 'example@gmail.com';
        $password = 'password';
    
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('posts.index');
        }
    
        return redirect('/');
    }

}
