<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Jenis;
use DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = DB::table('barangs')
                    ->join('jenis','barangs.id_jenis','=','jenis.id')
                    ->select('barangs.*','jenis.jenis_sepatu')->get();
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jenis = Jenis::all();
        return view('barang.create',compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $barang = new Barang();
        $barang->merk = $request->a;
        $barang->stok = $request->b;
        $barang->harga = $request->c;
        $barang->warna = $request->d;
        $barang->ukuran = $request->e;
        $barang->id_jenis = $request->jenis;
        $barang->save();
        return redirect('/admin/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $barang = Barang::findOrFail($id);
        $jenis = Jenis::all();
        return view('barang.edit',compact('barang','jenis'));
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
        //
        $barang =Barang::findOrFail($id);
        $barang->merk = $request->a;
        $barang->stok = $request->b;
        $barang->harga = $request->c;
        $barang->warna = $request->d;
        $barang->ukuran = $request->e;
        $barang->id_jenis = $request->jenis;
        $barang->save();
        return redirect('/admin/barang');
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
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect('/admin/barang');
    }
}
