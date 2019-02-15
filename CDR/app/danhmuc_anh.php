<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc_anh extends Model
{
    //
    protected $table = "danhmuc_anh";
    public function anh(){
    	return $this->hasMany('App\anh','id_danhmuc','id');
    }
}
