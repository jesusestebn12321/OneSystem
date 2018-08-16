<?php

namespace App\Http\Controllers;

use App\ProductoImagen;
use App\Categoria;
use App\Producto;
use App\Imagen;
use App\Post;
use Illuminate\Http\Request;

class ProductoImagenController extends Controller{
    public function create()
    {
        //

        $producto= new ProductoImagen();
        $categoria= Categoria::all();
        $imagen= new Imagen();
        $post= Post::all();
        return view('Productos.create', compact('post','producto','categoria','imagen'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data){
        //

                
            $producto= new Producto;
            $producto->nombre=$data->nombre;
            $producto->descripcion=$data->descripcion;
            $producto->stock=$data->stock;
            $producto->categorias_id=$data->categoria;
            $producto->precio=$data->precio;
            $producto->save();

            

            $imagenF=new Imagen();
            if ($data->file()) {
            $file = $data->file('image');
            $name = 'Jesus_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/uploads/images/products';
            $file->move($path, $name);
            }

            $imagenF->imagen= $data->image;
            $imagenF->save();
            
            $product = new ProductoImagen;
            $product->producto_id = $producto->id;
            $product->imagen_id = $imagenF->id;
            $product->save();

           

            return redirect()->route('manageProducto-show',$product->id)->with('product',$product);



    }
    public function pausar(){
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductoImagenPost  $productoImagenPost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto= Producto::find($id);
        $post= Post::all();
       return view('Productos.ver', compact('producto','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductoImagenPost  $productoImagenPost
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductoImagenPost  $productoImagenPost
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductoImagenPost  $productoImagenPost
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
