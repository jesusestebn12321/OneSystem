<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoUser;
use App\ComprarUser;
use App\Post;

class ComprarUserController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
        //
        $producto= ProductoUser::all();
        $carrito= ComprarUser::all();
        $post= Post::all();
       
        return view('status.comprados', compact('producto','carrito','post'));
    }
    public function comprar(Request $data, $id){
        $productoUser= ProductoUser::where('id','=',$id)->first();
        $productoUser->act=2;
        $productoUser->save();

        $producto= new ComprarUser();
        $producto->user_id=$data->user_id;
        $producto->producto_user_id=$productoUser->id;
        $producto->save();



        $message= $producto ? 'Has Comprado Un Articulo':'error en la compra de un articulo';
        return redirect()->route('manageCarrito', compact('message'));



    }

  
}
