<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class UserStatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexA(){
        //
        $user=User::all();
        return view('admin.usuariosA.index',compact('user'));
    }
    public function indexP(){
        //
        $user=User::all();
        return view('admin.usuariosP.index',compact('user'));
    }

}
