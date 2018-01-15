<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['merk','stok','harga','warna','ukuran','id_jenis'];
    protected $visible = ['merk','stok','harga','warna','ukuran','id_jenis'];
    public $timestamps = true ;

    public function jenis()
    {
    	return $this->belongsTo('App\Jenis');
    }

    public function penjualan()
    {
    	return $this->belongsTo('App\Penjualan');
    }

    public function pembelian()
    {
    	return $this->belongsTo('App\Pembelian');
    }
}
