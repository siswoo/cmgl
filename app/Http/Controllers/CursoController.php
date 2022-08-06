<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('curso.index');
    }

    public function create(){
        return view('curso.create');
    }

    public function show($variable){
        //return view('curso.show',['variable' => $id]);
        return view('curso.show', compact('variable'));
    }
}
