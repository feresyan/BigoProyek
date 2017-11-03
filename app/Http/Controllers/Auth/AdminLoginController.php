<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

  //protected $redirectTo = '/admin';

    public function __construct(){
      $this->middleware('guest:admin');
    }

    public function showLoginForm(){
      return view('auth.adminLogin');
    }

    public function login(Request $request){

      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:5',
        ]);

      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->rememeber)) {
        return redirect()->intended(route('admin.dashboard'));
      }

      return redirect()->back()->withInput($request->only('email','remember'));
    }


}
