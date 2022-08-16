@extends('layouts.plantilla')

@section('title','Curso')

@section('content')
    <h1>Aqui se va al index</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{$curso->nombre}}</li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection