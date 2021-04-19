<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    { 
        $transaksis = Transaksi::all();
        return view('transaksi.index' ,compact('transaksis'));
    }
    public function create()
    {
        return view('transaksi.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_nota'           => 'required',
            'jenis_kendaraan'   => 'required',
            'biaya'             => 'required',
            'bayar'             => 'required',
            'kembalian'         => 'required',
            'total_bayar'       => 'required',
            'nama_pelanggan'    => 'required',
        ]);

        $transaksi = Transaksi::create([
            'no_nota'           => $request->input('no_nota'),
            'jenis_kendaraan'   => $request->input('jenis_kendaraan'),
            'biaya'             => $request->input('biaya'),
            'bayar'             => $request->input('bayar'),
            'kembalian'         => $request->input('kembalian'),
            'total_bayar'       => $request->input('total_bayar'),
            'nama_pelanggan'    => $request->input('nama_pelanggan'),
        ]);

        return redirect()->back();
    }
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        return view('transaksi.edit', compact('transaksi'));
    }
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $transaksi->no_nota         = $request->input('no_nota');
        $transaksi->jenis_kendaraan = $request->input('jenis_kendaraan');
        $transaksi->biaya           = $request->input('biaya');
        $transaksi->bayar           = $request->input('bayar');
        $transaksi->kembalian       = $request->input('kembalian');
        $transaksi->total_bayar     = $request->input('total_bayar');
        $transaksi->nama_pelanggan  = $request->input('nama_pelanggan');

        $transaksi->save();

        return redirect()->back();
    }
    public function destroy($id)
    {
       $transaksi = Transaksi::findOrFail($id);

       $transaksi->delete();

       return redirect()->back();
    }
}
