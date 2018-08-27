<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ProductoUser;
use App\Categoria;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categoria=Categoria::all();
        $producto=ProductoUser::all();
        $post=Post::all();
        // if (Auth::user()->rol==1) {
            return view('home',compact('post','producto','categoria'));
        // }else{
        //     return view('admin.index',compact('post','producto','categoria'));
        // }
    }
}
