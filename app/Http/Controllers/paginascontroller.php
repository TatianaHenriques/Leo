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
public function biologia() {
        return view('biologia');

    }
    public function quimica() {
        return view('quimica');
    }
public function arte() {
        return view('arte');

    }
    public function fisica() {
        return view('fisica');
    }
    public function desporto() {
        return view('desporto');
    }
    public function informatica() {
        return view('informatica');
    }
    public function historia() {
        return view('historia');
    }
    public function origem() {
        return view('origem');
    }
}