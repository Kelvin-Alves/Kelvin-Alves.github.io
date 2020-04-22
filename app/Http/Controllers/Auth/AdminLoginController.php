<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function login(Request $request)
    {
        $messages = [
            'email.required' => "Email is required",
            'email.email' => "Email is not valid",
            'email.exists' => "Email doesn't exists",
            'password.required'=> "Password is required",
            'password.min' => "Password must be at least 6 characters"
        ];

        $request->validate([
            'email' => 'required|max:255',
            'password' => 'required',
            
        ],$messages);
        
        $credentials = ['email' => $request->email, 'password' => $request->password ]; 
        
        $status = Auth::guard('admin')->attempt($credentials,$request->remeber);
        if($status){
            return redirect()->intended(route('home-admin'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            '$messages' => 'erro',
        ]);
    }
    public function index(){
        return view('auth.login-admin');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('auth.login-admin');
    }
}
