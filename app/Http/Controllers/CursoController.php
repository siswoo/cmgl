<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        //$cursos = Curso::all();
        $cursos = Curso::paginate();
        //return $cursos;
        //return view('curso.index');
        return view('curso.index',compact('cursos'));
    }

    public function create(){
        return view('curso.create');
    }

    public function show($variable){
        //return view('curso.show',['variable' => $id]);
        return view('curso.show', compact('variable'));
    }
}
