<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoUser extends Model
{
    protected $table = 'producto_users';
    protected $fillable=['id','producto_imagen_id','user_id','act'];
    
    public function productoImagen(){
		return $this->belongsTo('\App\ProductoImagen','producto_imagen_id');
    }
    
    public function user(){
        return $this->belongsTo('\App\User','user_id');
    }
    
    public function post(){
    	return $this->hasMany('\App\Post','producto_user_id');
    }
    public function productoComprar(){
        return $this->hasMany('\App\ComprarUser','producto_user_id');
    }
}
