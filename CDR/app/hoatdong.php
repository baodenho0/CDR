<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoatdong extends Model
{
    //
    protected $table = "hoatdong";
    public function danhmuc_hoatdong(){
    	return $this->belongsTo('App\danhmuc_hoatdong','id_danhmuc','id');
    }
}
