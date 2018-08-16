<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoUser;
use App\ComprarUser;
use App\Post;

class MensajesController extends Controller
{
    public function index(){
        $post= Post::all();
        $producto= ProductoUser::all();
        $carrito= ComprarUser::all();
        return view('Mensajes.index', compact('post','producto','carrito'));
    }

    public function status($id){
        //
        $post= Post::find($id);
        $post->status=1;
        $post->save();
        return redirect()->route('manageMensajes');
    }

    public function update(Request $request, Imagen $imagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagen $imagen)
    {
        //
    }
}
