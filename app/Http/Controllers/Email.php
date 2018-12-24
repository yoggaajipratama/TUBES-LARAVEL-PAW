<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class Email extends Controller
{
    public function sendEmail(Request $request)
	{
	    try{
	        Mail::send('email', ['nama' => $request->nama, 'pesan' => $request->pesan], function ($message) use ($request)
	        {
	            $message->subject($request->judul);
	            $message->from('yoggaajipratama999@gmail.com', 'yoggaajipratama');
	            $message->to($request->email);
	        });
	        return back()->with('alert-success','Berhasil Kirim Email');
	    }
	    catch (Exception $e){
	        return response (['status' => false,'errors' => $e->getMessage()]);
	    }
	}
}
