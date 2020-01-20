@extends('layouts.master')
@section('title')
    <title>Beranda | Dashboard</title>
@endsection
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><center>Data inventaris XI Software Engineering</center></div>
    
                    <div class="card-body">
                        <a href="{{ url('inventaris/create') }}" class="btn btn-warning mb-3">create new</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>Kondisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventaris as $item)
                                <tr>
                                    <td>{{ $row++ }}</td>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->jumlah_barang }}</td>
                                    <td>{{ $item->kondisi_barang }}</td>
                                    <td>
                                        <form action="{{url('inventaris',$item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ url('inventaris/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">edit</a><br>
                                            <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                        </form>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection