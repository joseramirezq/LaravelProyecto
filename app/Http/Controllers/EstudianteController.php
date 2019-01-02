<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function estudiante(){
        $nombre='Jose Luis';
        return view('estudiante', compact('nombre'));
    }
}
