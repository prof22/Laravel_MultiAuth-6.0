<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SuperAdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:super_admin');
    }

    public function Showlogin()
    {
        return view ('super_admin.auth.login');
    }
    public function login(request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::guard('super_admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
            return redirect()->intended(route('super_admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
        Auth::guard('super_admin')->logout();
        return redirect('/');
    }
}
