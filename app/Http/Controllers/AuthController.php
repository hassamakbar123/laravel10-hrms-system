<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class AuthController extends Controller
{
   public function index(){
    return view('login');
   }

   public function forget_password(){
    return view('forget_pass');
   }


   Public function register(){
    return view('register');
   }

   public function Store(Request $request)
{
    //validate data before storing it to the database
    $request->validate([
        'first_name' => 'required',
        'email' => 'required|email|unique:users,email', // Ensure the email is unique in the 'users' table
        'password' => 'required|string|min:6',
        'confirmPassword' => 'required_with:password|same:password|min:6'
    ]);


        // Add more validation rules as needed



    User::insert([
        'first_name' => $request->input('first_name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->password),
        'Ptoken' => Crypt::encrypt($request->password),
    ]);

    $notification = [
        'message' => 'Registered Successfully! Please Login Now.',
        'alert-type' => 'success'
    ];

    return redirect('register')->with($notification);
}



   public function loginPost (Request $request){

    if(Auth::attempt(['email' => $request->email , 'password' => $request->password],true)){
        if(Auth::User()->is_role == '1'){
            return redirect('/admin/dashboard');
            } elseif(Auth::User()->is_role == '0'){
                return redirect()->intended('/employees/dashboard');
            }
        else {
            return redirect('/login')->with('error','No HR Available... Please Check Again!');
        }

    } else {
        return back()->with('error','Please Enter the Correct Credentials');
    }

   }


   public function LogOut(){
    Auth::logout();
    return redirect('/login');
   }
}

