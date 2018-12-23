<?php

namespace App\Http\Controllers;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\gambar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class con_report extends Controller
{
   
    public function save(Request $request)
    {

        $validation = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'no_ktp' => ['required', 'max:16', 'unique:reports'],
            'no_tlp' => ['required', 'max:12'],
            'nampro' => ['required'],
            'harga' => ['required'],
            'tgl_kej' => ['required'],
            'alamat' => ['required'],
            'ket' => ['required'],
            'file_gambar' => ['required'],
        ]);

        $report = new Report();
        $img = new gambar();

        $report->name = $request->name;
        $report->no_ktp = $request->no_ktp;
        $report->no_tlp = $request->no_tlp;
        $report->nampro = $request->nampro;
        $report->harga = $request->harga;
        $report->tgl_kej = $request->tgl_kej;
        $report->alamat = $request->alamat;
        $report->ket = $request->ket;

        $img->nama_gambar = $request->no_ktp;
        $img->file_gambar = $request->file_gambar;

        $report->save();
        $img->save();
        return redirect('/member')->with('message', 'Successfuly');

    }
}
