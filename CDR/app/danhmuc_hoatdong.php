<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc_hoatdong extends Model
{
    //
    protected $table = "danhmuc_hoatdong";

    public function hoatdong(){
    	return $this->hasMany('App\hoatdong','id_danhmuc','id');
    }
}
