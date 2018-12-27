<?php

namespace App\Http\Controllers;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class con_report extends Controller
{

    public function save(Request $request)
    {


        $validation = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'no_ktp' => ['required', 'max:16', 'unique:reports'],
            'email' => ['required'],
            'no_tlp' => ['required', 'max:12'],
            'nampro' => ['required'],
            'harga' => ['required'],
            'tgl_kej' => ['required'],
            'alamat' => ['required'],
            'ket' => ['required'],
        ]);

        $report = new Report();

        $report->name = $request->name;
        $report->no_ktp = $request->no_ktp;
        $report->email = $request->email;
        $report->no_tlp = $request->no_tlp;
        $report->nampro = $request->nampro;
        $report->harga = $request->harga;
        $report->tgl_kej = $request->tgl_kej;
        $report->alamat = $request->alamat;
        $report->ket = $request->ket;

        $file       = $request->file('image');
        $fileName   = $file->getClientOriginalName();
        $request->file('image')->move("image/", $fileName);

        $report->image = $fileName;
        $report->save();
        return redirect('/member')->with('message', 'Successfuly');

    }

    
}
