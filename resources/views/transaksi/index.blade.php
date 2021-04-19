@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data Transaksi</h5>
                    <div class="d-flex">
                        <div>
                            <a href="{{route('ambil-form.transaksi')}}" class="btn btn-info">Tambah Data</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nota</th>
                        <th>Jenis Kendaraan</th>
                        <th>Biaya</th>
                        <th>Bayar</th>
                        <th>Kembalian</th>
                        <th>Total Bayar</th>
                        <th>Nama Pelanggan</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transaksis as $transaksi)
                    <tr>
                        <td>{{$transaksi->no_nota}}</td>
                        <td>{{$transaksi->jenis_kendaraan}}</td>
                        <td>{{$transaksi->biaya}}</td>
                        <td>{{$transaksi->bayar}}</td>
                        <td>{{$transaksi->kembalian}}</td>
                        <td>{{$transaksi->total_bayar}}</td>
                        <td>{{$transaksi->nama_pelanggan}}</td>
                        <td>
                            <form action="{{route('destroy.transaksi', $transaksi->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('ambil-form-edit.transaksi', $transaksi->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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
</div>
@endsection