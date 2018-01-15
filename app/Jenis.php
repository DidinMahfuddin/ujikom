<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
    protected $fillable = ['jenis_sepatu','cover'];
    protected $visible = ['jenis_sepatu','cover'];
    public $timestamps = true ;

    public function barang()
    {
    	return $this->hasMany('App\barang');
    }
}
