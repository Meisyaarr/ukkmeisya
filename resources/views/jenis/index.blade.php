@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data Jenis Transaksi</h5>
                    <div class="d-flex">
                        <div>
                            <a href="{{route('ambil-form.jenis-transaksi')}}" class="btn btn-info">Tambah Data</a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nama Transaksi</th>
                        <th>Nominal</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($types as $type)
                    <tr>
                        <td>{{$type->name}}</td>
                        <td>{{$type->price}}</td>
                        <td>
                        <form action="{{route('destroy.type', $type->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{route('ambil-form-edit.type', $type->id)}}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            Maaf Jenis Saat Ini Belum Tersedia.
                        </td>
                    </tr>
                    @endforelse
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection