<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(request()->has('empty')){
            $users=[];
        }
        else{
        $users=['Amy','Iris','Ramirez'];
       
        }
        $title='Listado de usuarios';
        return view('user', compact('users','title'));
    }

    public function show($nuevo=null){
        return "Mostrando detalle del usuario : {$nuevo}" ;
    }
    public function number($id=null){
        return "Moastrando el detalle del usuario n° {$id}";

    }
    public function saludo($name=null, $nickname=null){
        if($nickname){
            return "Bienvenido {$name} , tu apodo es : {$nickname}";

        }
        else{
            return "Bienvenido {$name}";
        }
    }
}
