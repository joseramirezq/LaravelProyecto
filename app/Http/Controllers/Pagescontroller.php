<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Pagescontroller extends Controller
{
  /*funcion general de app*/ 
    public function inicio(){
        $notas=App\Bota::all();
        return view('welcome', compact('notas'));

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
