<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model{

    protected $table = 'productos';
    protected $fillable=['id','nombre','descripcion','stock' ,'categorias_id','precio'];
    
    public function categoria(){
    	return  $this->belongsTo('\App\Categoria','categorias_id');
    }

    public function productoImagen(){
    	return  $this->hasMany('\App\ProductoImagen','producto_id');
    }

}
