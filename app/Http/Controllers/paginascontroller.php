<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginascontroller extends Controller
{
    public function index() {
        return view('index');
    }



    public function direccao () {
        return view('direccao');
    }


  public function galeria() {
        return view('galeria');
    }


    public function curso() {
        return view('curso');
    }


    public function departamento() {
        return view('departamento');
    }
    public function noticias() {
        return view('noticias');
    }

public function secretaria() {
    return view('secretaria');
}
}