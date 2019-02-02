<?php
namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;
use Chatty\Users;

class AuthController extends Controller
{
    public function getSignUp()
    {
        return view('auth.signup');
    }

    public function postSignUp(Request $request)
    {
        $attr = request()->validate([
            'email' => 'required|email|max:255',
            'username' => 'required|alpha_dash|min:5|max:25',
            'password' => 'required|min:6'
        ]);
        Users::create($attr);
        return redirect('/');
        // return $attr;
        
    }
}