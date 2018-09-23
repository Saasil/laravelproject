@extends('diseños.app')

@section('titulo')
  <title> Libreria | Datos </title>
@endsection

@section('contenido')

  <div class="container">

    <h1 style="text-align:center;">Datos del libro</h1>

    <ul>
      <li>Titulo: {{$libro->titulo}}</li>
      <li>Autor: {{$libro->autor}}</li>
      <li>Año de publicación: {{$libro->año}}</li>
    </ul>

    <a href="/libro/{{$libro->id}}/edit" class="btn btn-warning" role="button">Editar</a>
    <br><br>

    {!! Form::open(['action' => ['ControladorLibros@destroy', $libro->id], 'method' => 'POST']) !!}
    {{Form::bsSubmit('Eliminar', ['class' => 'btn btn-danger float right'])}}
    {{Form::bsHidden('_method', 'DELETE')}}
    {!! Form::close() !!}
    <br>

    <a href="/" class="btn btn-secondary">Volver</a>

  </div>

@endsection
