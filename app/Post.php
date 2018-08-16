<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
	protected $fillable=['id','post','status','producto_user_id','user_id'];

     public function user(){
    	return $this->belongsTo('\App\User','user_id');
    }

    public function producto(){
    	return  $this->belongsTo('\App\ProductoUser','producto_user_id');
    }

}
