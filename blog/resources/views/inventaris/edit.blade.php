@extends('layouts.master')
@section('title')
    <title>Create | Dashboard</title>
@endsection
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        <form action="{{ url('inventaris',$inventaris->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>kode barang</label>
                                <input type="text" name="kode_barang" value="{{ $inventaris->kode_barang }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>nama barang</label>
                                <input type="text" name="nama_barang" value="{{ $inventaris->nama_barang }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>jumlah barang</label>
                                <input type="text" name="jumlah_barang" value="{{ $inventaris->jumlah_barang }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>kondisi barang</label>
                                <input type="text" name="kondisi_barang" value="{{ $inventaris->kondisi_barang }}" class="form-control">
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