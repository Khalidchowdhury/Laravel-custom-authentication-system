<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\User;

class AuthController extends Controller
{
    /**
     * Show Create Page
     */
    public function showCreatePage(){
        return view('auth.register');
    }

    /**
     * Database Create user data
     */
    public function createPage(Request $request){
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'password'  => 'required',
        ]);

        User::create([
            'name'      => $request -> name,
            'email'     => $request -> email,
            'phone'     => $request -> phone,
            'password'  => $request -> password,
        ]);
        return redirect() -> route('showLogin.page') -> with('success', 'You Account Has been Created');
    }


    /**
     * Show Login Page
     */
    public function showLoginPage(){
        return view('auth.login');
    }

    /**
     * Login Page Make Dynamic
     */
    public function LoginPage(Request $request){
        $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required',
        ]);
 
        if(Auth::attempt(['email' => $request -> email,'password' => $request -> password])){
            return redirect() -> route('store.page') -> with('success', 'you are login successfully');
        }else{
            return redirect() -> route('Login.page') -> with('danger', 'you are login failed, Please try again');
        }
        


    }







     /**
      * Show Store Page
      */
     public function showStorePage(){
        return view('auth.store');
     }













}
