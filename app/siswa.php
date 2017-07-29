<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table ='siswas';
    protected $fillable = ['nama' ,'orangtua_id','umur','jk','alamat'];
    protected $visible  = ['nama' ,'orangtua_id','umur','jk','alamat'];
    public $timestamps =true;



public function orangtua()
    {
    	return $this->belongsTo('App\orangtua', 'orangtua_id');
    }
}
