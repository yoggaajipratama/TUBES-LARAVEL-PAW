<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Report;
use App\Price;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->jabatan == 'ADMIN')
        {

            return view('home');
        }
        else{
            
            $pasar = DB::table('pasar')->get();
            $produk = DB::table('price')->get();
            return view('report',['pasar' => $pasar,'report','produk' => $produk]);
        }
    }

    public function member()
    {
        if(Auth::user()->jabatan == 'ADMIN'){
            return redirect('home');
        }
        else{
            
            $pasar = DB::table('pasar')->get();
            $produk = DB::table('price')->get();
            return view('report',['pasar' => $pasar,'produk' => $produk]);
        }

    }
}