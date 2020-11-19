<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan=Pengajuan::all();
        return view('daftar_pengajuan', compact('pengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pengajuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengajuan = new Pengajuan;
        $pengajuan->nama_barang = $request->nama_barang;
        $pengajuan->quantity = $request->quantity;
        $pengajuan->total_harga = $request->total_harga;
        $pengajuan->nama_pemohon = $request->nama_pemohon;
        $pengajuan->save();
        return redirect(route('daftar_pengajuan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan=Pengajuan::find($id);
        return view('daftar_pengajuan', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengajuan = Pengajuan::find($id);
        $pengajuan->nama_barang = $request->nama_barang;
        $pengajuan->quantity = $request->quantity;
        $pengajuan->total_harga = $request->total_harga;
        $pengajuan->nama_pemohon = $request->nama_pemohon;
        $pengajuan->save();
        return redirect('pengajuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
