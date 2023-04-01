<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class StaticController extends Controller
{
    public function home(Request $request){

        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function pricing(){
        return view('pricing');
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('services');
    }

    public function  login(){
        return view('login');
    }

    public function  submitLogin(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('static.home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function  register(){
        return view('register');
    }

    public function submitRegister(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        $user = [
            'name' => 'anonyme',
            "email" => $request->email,
            "password" => $request->password
        ];
         User::create($user);
        return redirect()->route('static.home');
    }

    public function forgetPasswordShowForm(){
        return view('forgetPasswordForm');
    }

    public function submitForgetPasswordShowForm(Request $request,){
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        return redirect()->route('password.forget.get')->with('message',  "we sent the reset link in your email, check it! ");
    }

    public function resetPasswordShowForm(){
        return view('resetPasswordForm');
    }

    public function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect()->route('static.home');
    }
}

?>