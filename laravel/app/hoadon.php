<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = "hoadon";
      public function hoadonchitiet(){	
   	return $this->hasMany('App\hoadonchitiet','id_hoadon','id');	
}

      public function hoadon(){	
   	return $this->belongsTo('App\khachhang','id_khachhang','id');	
}
}
