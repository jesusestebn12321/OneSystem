<?php

namespace App\Http\Controllers;

use App\Post;
use App\ProductoUser;
use Illuminate\Http\Request;

class PostController extends Controller
{
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        //
        $post= new Post();
        $producto=ProductoUser::find($id);
        $post->post=$data->post;
        $post->producto_user_id=$id;
        $post->user_id=$data->user;
        $post->status=$data->status;
        $post->save();
        return redirect()->route('manageProducto-show',$producto->id)->with('producto',$producto);

    }

   
}
