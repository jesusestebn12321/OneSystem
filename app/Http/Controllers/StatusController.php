<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoUser;
class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }
    public function pausar($id){
        $producto= ProductoUser::where('id','=',$id)->first();
        $producto->act=0;
        $producto->save();
        $message=$producto?'Estado Cambido Exitosamente':'Error En Accion';
        return redirect()->route('manageArticulos', compact('message'));
    }
    public function activar($id){
        $producto= ProductoUser::where('id','=',$id)->first();
        $producto->act=1;
        $producto->save();
        $message=$producto?'Estado Cambido Exitosamente':'Error En Accion';
        return redirect()->route('manageArticuloPausado', compact('message'));


    }   
    public function comprado($id){
        $producto= ProductoUser::where('id','=',$id)->first();
        $producto->act=2;
        $producto->save();
        $message=$producto?'Comprado Exitosamente':'Error En Accion';
        return redirect()->route('manageArticuloPausado', compact('message'));
    }

}
