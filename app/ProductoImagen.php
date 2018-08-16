<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model{
    //
    protected $table = 'producto_imagenes';
    protected $fillable=['id','producto_id','imagen_id'];
    
    public function producto(){
		return $this->belongsTo('\App\Producto','producto_id');
    }
    public function imagen(){
        return $this->belongsTo('\App\Imagen','imagen_id');
    }
    public function productoU(){
        return $this->hasMany('\App\ProductoUser','producto_imagen_id');
    }
    
}
