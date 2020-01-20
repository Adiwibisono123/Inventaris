@extends('layouts.master')
@section('title')
    <title>Create | Dashboard</title>
@endsection
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><center>Silahkan isi daftar inventaris</center></div>
    
                    <div class="card-body">
                        <form action="{{ url('inventaris') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>kode barang</label>
                                <input type="text" name="kode_barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>nama barang</label>
                                <input type="text" name="nama_barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>jumlah barang</label>
                                <input type="text" name="jumlah_barang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>kondisi barang</label>
                                <input type="text" name="kondisi_barang" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                            <a href="{{ url('/inventaris') }}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection