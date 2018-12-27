<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Email extends Controller
{
    public function sendEmail(Request $request)
	{
	    try{
	        Mail::send('email', ['nama' => $request->nama, 'pesan' => 'Kontribusi anda sangat berharga bagi lingkungan sekitar kita'], function ($message) use ($request)
	        {
	            $message->subject('Report success');
	            $message->from('marketpricereport@gmail.com', 'Market Price Report');
	            $message->to($request->email);
	        });
	        return back()->with('alert-success','Berhasil Kirim Email');
	    }
	    catch (Exception $e){
	        return response (['status' => false,'errors' => $e->getMessage()]);
	    }
	}

	public function forgot(Request $request)
	{
	    try{
	        Mail::send('forgot_template', ['nama' => $request->email, 'pesan' => 'Berikut link untuk register ulang http://localhost:8000/new_password'], function ($message) use ($request)
	        {
	            $message->subject('Lupa password');
	            $message->from('marketpricereport@gmail.com', 'Market Price Report');
	            $message->to($request->email);
	        });
	        return back()->with('alert-success','Silakan cek email anda');
	    }
	    catch (Exception $e){
	        return response (['status' => false,'errors' => $e->getMessage()]);
	    }
	}

	public function otomatis(Request $request)
	{
	    try{
	        Mail::send('email', ['nama' => $request->email, 'pesan' => 'Kontribusi anda sangat berharga bagi lingkungan sekitar kita'], function ($message) use ($request)
	        {
	            $message->subject('Report success');
	            $message->from('marketpricereport@gmail.com', 'Market Price Report');
	            $message->to($request->email);
	        });
	        return back()->with('alert-success','Berhasil Kirim Email');
	    }
	    catch (Exception $e){
	        return response (['status' => false,'errors' => $e->getMessage()]);
	    }
	}


	public function list()
	{
		$email = DB::table('reports')->get();
		return view('acc',['email' => $email]);
		return view('acc');
	}
}
