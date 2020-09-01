<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function showForm(){
        return view('login');
    }

    public function login(Request $request){
        // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      
      // Attempt to log the user in
      if (Auth::guard('merchant')->attempt(['email' => $request->email, 'password' =>
       $request->password])) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('dashboard'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(){
        Auth::guard('merchant')->logout();
        return redirect('/');
    }

}
