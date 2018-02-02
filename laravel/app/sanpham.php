<?php

namespace App;

use \App\loaisanpham;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = "sanpham";
   public function loaisanpham(){		
   	return $this->belongsTo(loaisanpham::class,'id_type','id');
   }
   public function hoadonchitiet(){
   	return $this->hasMany('App\hoadonchitiet','id_sanpham','id');
   }
}
