<?php

namespace App\Http\Controllers;
// menghubungkan dengan barang
use App\Barang;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    // supaya login dlu baru halamannya bisa muncul
    public function __construct()
    {
        $this->middleware('auth'); //auth disini berfungsi etika kita masuk home harus login dlu
    }

    public function index($id)
    {
        $barang = Barang::where('id',$id)->first(); //membuat variabe barang dimana id = id dan first() untuk mengambil data pertama saja
        return view('pesan.index',compact('barang'));
    }
}
