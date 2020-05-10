<?php

namespace App\Http\Controllers;

// koneksi ke data yang ada di barang
use App\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //auth disini berfungsi etika kita masuk home harus login dlu
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barangs = Barang::paginate(20);    //paginate berfungsi membatasi barang yg tampil di halaman web, disini dibatasi 20 saja
        // dd($barangs);
        return view('home', compact('barangs'));
    }
}
