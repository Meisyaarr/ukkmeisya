@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('simpan-data.transaksi')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No Nota</label>
                                    <input type="text" name="no_nota" class="form-control" id="" >
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Kendaraan</label>
                                    <input type="text" name="jenis_kendaraan" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Biaya</label>
                                    <input type="text" name="biaya" class="form-control" id="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Bayar</label>
                                    <input type="text" name="bayar" class="form-control" id="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kembalian</label>
                                    <input type="text" name="kembalian" class="form-control" id="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Total Bayar</label>
                                    <input type="text" name="total_bayar" class="form-control" id="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 