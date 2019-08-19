<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * URL to be redirect to upon successful login
     *
     * @var string
     */
    public $redirectTo = "/";

    /**
     * Show Login page
     *
     * @return \Inertia\Response
     */
    public function showLoginForm()
    {
        return Inertia::render('Login');
    }

    // protected function loggedOut(Request $request)
    // {
    //     return redirect()->route('login');
    // }
}
