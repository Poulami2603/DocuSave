<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class DocuSaveController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }

    public function admindashboard(){
        return view("admin.admindashboard");
    }

    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res){
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->user_id);
                $request->session()->put('userName', $user->name);
                return redirect('/dashboard');
            }else{
                return back()->with('fail', 'Please check your password.');
            }
        }else{
            return back()->with('fail', 'Please enter registered email-id.');
        }
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect("auth.login");
        }
    }
}
