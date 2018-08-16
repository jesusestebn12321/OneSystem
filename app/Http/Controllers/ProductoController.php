<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $producto= Producto::all();
        return view('Productos.index', compact('producto','categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $producto= Producto::all();
        $categoria= Categoria::all();
        return view('Productos.create', compact('producto','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data){
        $producto               = new Producto();
        $producto->nombre       =$data->nombre ; 
        $producto->descripcion  =$data->descripcion ; 
        $producto->stock        =$data->stock ; 
        $producto->categorias_id=$data->categoria;
        $producto->precio       =$data->precio;  
        $producto->save();
        return redirect()->route('manageProducto-show',$producto->id)->with('productos',$producto);  
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $producto= Producto::find($id);
        return view('Productos.show')->with('producto',$producto);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
       $producto= Producto::where('id','=',$id)->first();
       $categoria= Categoria::all();
       return view('Productos.update', compact('producto','categoria'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id){
        $producto= Producto::find($id);
        $producto->nombre       =$data->nombre ; 
        $producto->descripcion  =$data->descripcion ; 
        $producto->stock        =$data->stock ; 
        $producto->categorias_id=$data->categoria;
        $producto->precio       =$data->precio;  
        $producto->save();
        return redirect()->route('manageArticulos');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $producto= Producto::find($id);
        $producto->delete();
        return redirect()->route('manageArticulos', compact('producto') );
    }
}
