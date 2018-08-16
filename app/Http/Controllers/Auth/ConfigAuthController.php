<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductoUser;
use App\ComprarUser;
use App\Post;
class ConfigAuthController extends Controller
{
  
    public function index(){
        $producto=ProductoUser::all();
        $carrito=ComprarUser::all();
        $post=Post::all();
        return view('Configuraciones.index',compact('post','producto','carrito'));
    }
   
}
