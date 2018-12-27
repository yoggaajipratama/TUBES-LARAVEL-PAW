<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Report;
use App\Price;
use Illuminate\Support\Facades\Hash;
use App\User;
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
            return view('admin');
        }
        else{
            
            $pasar = DB::table('pasar')->get();
            $produk = DB::table('price')->get();
            return view('report',['pasar' => $pasar,'report','produk' => $produk]);
        }
    }

    public function member()
    {
        if(Auth::user()->jabatan == 'ADMIN')
        {
            return view('admin');
        }
        else{
            
            $pasar = DB::table('pasar')->get();
            $produk = DB::table('price')->get();
            return view('report',['pasar' => $pasar,'produk' => $produk]);
        }

    }

    public function laporan()
    {
        $image = DB::table('reports')
            ->orderByRaw('id DESC')
            ->get();
        return view('laporan',['image'=>$image]);
        return view('laporan');
    }

    public function dashboard()
    {
        return view('admin');

    }
    
    public function view()
    {
        return view('akunadmin');
    }

    public function akunadmin(Request $request)
    {
        $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->md5($request->password);
        $user->jabatan = $request->jabatan;

        $users->save();
        return redirect('laporan');
    }

}
