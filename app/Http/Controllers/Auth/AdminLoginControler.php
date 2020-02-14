<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginControler extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);


        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        $AuthOk=Auth::guard('admin')->attempt($credentials, $request->remember);

        if($AuthOk){
           return redirect()->intended(route('admin.dashboard'));

        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function index(){
        return view("auth.admin-login");
    }
}
