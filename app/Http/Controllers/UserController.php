<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoUser;
use App\ComprarUser;
use App\Categoria;
use App\Post;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto=ProductoUser::all();
        $carrito=ComprarUser::all();
        $categoria=Categoria::all();
        $post=Post::all();
        return view('auth.micuenta',compact('post','categoria','producto','carrito'));
    }

}
