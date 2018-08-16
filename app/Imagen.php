<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    //
    protected $table = 'imagenes';
	protected $fillable=['id','imagen'];
	
	
    public function productoImagen(){
    	return  $this->hasMany('\App\ProductoImagen','imagen_id');
    }
    
}
