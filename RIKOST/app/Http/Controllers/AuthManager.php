<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthManager extends Controller
{
    public function login()
    {
        return view('landing.login');
    }

    public function signup()
    {
        return view('landing.signup');
    }

    public function signupUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
            'Age'=>'required',
            'Gender'=>'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->Age = $request->Age;
        $user->Gender = $request->Gender;
        $res = $user->save();
        if ($res){
            return back()->with('success', 'You have successfully signed up.');
        }else{
            return back()->with('fail', 'Something wrong.');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('home');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        }else{
            return back()->with('fail', 'This email is not signed up.');
        }
    }

    public function home()
    {
        return view('home');
    }
}
