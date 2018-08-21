<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoImagen;
use App\ProductoUser;
use App\ComprarUser;
use App\Categoria;
use App\Producto;
use App\Imagen;
use App\Post;

class ProductoUserController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $producto= ProductoUser::all();
        $carrito= ComprarUser::all();
        $categoria= Categoria::all();
        $post= Post::all();
        return view('Productos.index', compact('post', 'producto','categoria','carrito'));
    }
    public function indexP(){
        $producto= ProductoUser::all();
        $carrito= ComprarUser::all();
        $categoria= Categoria::all();
        $post= Post::all();
        return view('status.pausados', compact('post','producto','categoria','carrito'));
    }
    public function indexV(){
        $producto= ProductoUser::all();
        $carrito= ComprarUser::all();
        $categoria= Categoria::all();
        $post= Post::all();
        return view('status.vendidos', compact('post','producto','categoria','carrito'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
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

        // dd($data->file('imagenes1'));
        $producto= new Producto();
        $producto->nombre=$data->nombre;
        $producto->descripcion=$data->descripcion;
        $producto->stock=$data->stock;
        $producto->categorias_id=$data->categoria;
        $producto->precio=$data->precio;
        $producto->save();
    // dd(sizeof($data->imagenes)+1);
        for($i=1;$i<=sizeof($data->imagenes)+1;$i++){
            $product= new ProductoImagen();
            $imagenF=new Imagen();
               
                if ($data->file('imagenes'.$i)) {
                    $file = $data->file('imagenes'.$i);
                    $name = 'Producto_' . time() . '.' .  $data->file('imagenes'.$i)->getClientOriginalExtension();
                    $path = public_path() . '/uploads/imagenes/productos';
                    $file->move($path,$name);
                }else {
                    $name='name es una variable vacia.exe';
                } 

                $imagenF->imagen=$name;
                $imagenF->save();
                
                $product->producto_id = $producto->id;
                $product->imagen_id = $imagenF->id;
                $product->save();

        }

        $productos = new ProductoUser();
        $productos->producto_imagen_id = $product->id;
        $productos->user_id = $data->user_id;
        $productos->act = $data->act;
        $productos->save();

    return redirect()->route('manageProducto-show',$productos->id)->with('productos',$productos);

    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductoUser  $productoUser
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
        $producto= ProductoUser::find($id);
        $categoria= Categoria::all();
        $post= Post::all();
        return view('Productos.show', compact('producto','categoria','post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductoUser  $productoUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoUser $productoUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductoUser  $productoUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoUser $productoUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductoUser  $productoUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto= ProductoUser::find($id);
        if($producto->post){
            for ($x=0;$x<$producto->post;$x++){ 
                $post=Post::destroy('producto_user_id','=',$id);
            }
        }
        $producto->delete();
        $message=$producto ? 'producto Eliminado':'Proceso falliido';
        return redirect()->route('manageArticulos', compact('message') );
    }

}
