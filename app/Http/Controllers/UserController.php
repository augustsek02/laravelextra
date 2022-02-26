<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Student;



class UserController extends Controller
{
    

  public function login(Request $request){
      $this->validate($request, [
          'username' => 'required',
          'password' => 'required',
      ]);

       $username = $request->input('username');
       $password = $request->input('password');
       $remember_me = $request->input('remember_me');
       dd($remember_me);


       if(Auth::attempt(['username' => $username, 'password' => $password], $remember_me)){
           $students = Student::get(); // getting all students
           return redirect('students/list')->with(compact("students"));
       }else{
         return back()->with("error", "Invalid login credentials");
       }



  } 

  public function logout(Request $request){
      Log::notice("".$request->user()->name." logged out");
      Auth::logout();
      $request->session()->flush(); // Session::flush();
      return redirect('/login');
  }


}
