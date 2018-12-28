<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
  /*funcion general de app*/ 
    public function inicio(){
        return view('welcome');
    }
    public function fotos(){
        return view('fotos');
    }
    public function nosotros($nombre=null){
        $equipo=['jose','lucho','andres'];
        //return view('nosotros',['equipo'=>$equipo]);
        return view('nosotros',compact('equipo','nombre'));
    }
     public function blog(){
        return view('blog');
     }
}
