<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class con_mpr extends Controller
{
    public function index(){
    	$user = DB::table('price')->get();
    	return view('index',['user' => $user]);
    	return view('index');
    }

    public function show($id){
    	return view(''.$id);
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = ModelUser::where('email',$email)->first();
        if(count($data) > 0){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

}
