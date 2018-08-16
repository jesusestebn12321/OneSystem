<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComprarUser extends Model
{
    //
    protected $table = 'comprar_users';
    protected $fillable=['id','producto_user_id','user_id'];
    
     public function productoUser(){
		return $this->belongsTo('\App\ProductoUser','producto_user_id');
    }
    
    public function user(){
    	return $this->belongsTo('\App\User','user_id');
    }
}
