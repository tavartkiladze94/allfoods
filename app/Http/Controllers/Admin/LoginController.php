<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
class LoginController extends BaseController
{
  public function login(Request $request)
  {
    return $request->session()->has('user') ? redirect()->route('foods.index') : view('admin.login');     
  }
  public function check(Request $request)
  {
      $this->validate( $request , [
        'password' => 'required',
        'email' => 'required|email'
      ]); 
      $user = User::where('email', $request->email)->first();
      if(!$user || ($user && !Hash::check($request->password, $user->password)))
      {
            return redirect()->back()->with('login_failed', true);
      }
      $request->session()->put('user' , $user);
      return redirect()->route('foods.index');     
  }
    public function logout(Request $request)
  {
       $request->session()->forget('user');
       return redirect()->route('login');     

  }
}
