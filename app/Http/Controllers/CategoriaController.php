<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categoria= Categoria::all();
        return view('admin.categorias.index',compact('categoria'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data){
        $categoria= new Categoria();
        $categoria->nombre=$data->nombre;
        $categoria->icono=$data->icono;
        $categoria->color=$data->color;
        $categoria->save();
        return redirect()->route('manageCategoria-A', compact('categoria')); 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $categoria= Categoria::find($id);
        return view('admin.categorias.index');
    }
    

    public function edit($id){
        $categoria= Categoria::where('id','=',$id)->first();
        return view('admin.categorias.update');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id){
        $categoria= Categoria::find($id);
        $categoria->nombre= $data->nombre;
        $categoria->icono=$data->icono;
        $categoria->color=$data->color;
        $categoria->save();
        return redirect()->route('manageCategoria-A', compact('categoria'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $categoria= Categoria::find($id);
        $categoria->delete();
        $message=$categoria ? 'Exito Al Borrar Categoria' : 'Error!';
        return redirect()->route('manageCategoria-A', compact('message'));
    }
}
