<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anh extends Model
{
    //
    protected $table = 'anh';

    public function danhmuc_anh(){
    	return $this->belongsTo('App\danhmuc_anh','id_danhmuc','id');
    }
}
