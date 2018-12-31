<?php

namespace App\Http\Controllers;
use App;


use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $notas=App\Bota::all();
        return view('welcome', compact('notas'));

    }
}
