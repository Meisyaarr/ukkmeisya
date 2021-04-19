@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-danger">
                        <h5 class="font-weight-bold">
                            Perhatian !!!
                        </h5>
                        <h5>
                            Harap masukan jenis transaksi dengan benar dan lengkap.
                        </h5>
                    </div>

                    <form action="{{route('simpan-data.types')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Transaksi</label>
                                    <input type="text" name="name" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Biaya</label>
                                    <input type="text" name="price" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Simpan Jenis Transaksi</button>
                                <a href="{{route('tampilkan-data.jenis')}}"class="btn btn-secondary">cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection