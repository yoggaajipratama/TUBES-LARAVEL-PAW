<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*use SendsPasswordResetEmails;*/

    /**
     * Create a new controller instance.
     *
     /** @return void*/
     /***/
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/


    public function newpassword(Request $request){

        $users = new User();
        $users->email = $request->email;
        $users->password = $request->password;

        DB::table('users')
            ->where('email', $request->email)
            ->update(['password' => Hash::make($request['password'])]);
            return redirect('/');

    }
}
