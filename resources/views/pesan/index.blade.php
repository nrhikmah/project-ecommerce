@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="{{ url('home') }}" class="btn btn-primary">Back Home</a>
        </div>

        <div class="col-md-12 mt-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$barang->nama_barang}}</li>
                </ol>
              </nav>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h2>{{$barang->nama_barang}}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads')}}/{{$barang->gambar}}" class="rounded mx-auto" width="100%" alt="produk">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{$barang->nama_barang}}</h2>
                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <td>Harga </td>
                                        <td>: </td>
                                        <td>Rp. {{number_format($barang->harga)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok </td>
                                        <td>: </td>
                                        <td>{{$barang->stok}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan </td>
                                        <td>: </td>
                                        <td>{{$barang->keterangan}}</td>
                                    </tr>
                                    <form action="" method="post">
                                        <tr>
                                            <td>Jumlah Pesan </td>
                                            <td>: </td>
                                            <td>
                                                <input type="text" name="jumlah_pesan" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                                            </td>
                                        </tr>
                                    </form>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
