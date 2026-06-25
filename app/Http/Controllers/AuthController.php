<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function emailVerificataion()
    {
        return view('auth.email-verification');
    }
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function privacyPolicy()
    {
        return view('auth.privacy-policy');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function resetPassword()
    {
        return view('auth.reset-password');
    }
    public function terms()
    {
        return view('auth.terms');
    }
}
