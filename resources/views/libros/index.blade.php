@extends('diseños.app')

@section('titulo')
  <title> Libreria | Listado </title>
@endsection

@section('contenido')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<h1 style="text-align:center;">Listado de libros</h1>

<div>
<a href="libro/create" class="btn btn-success" role="button">Subir libro</a>
<br><br>
</div>

@if(Session::has('success'))

  <div class="alert alert-success">

      {{ Session::get('success') }}

      @php

      Session::forget('success');

      @endphp

  </div>

@endif

@if(count($libros) > 0)

  <div class="list-group" style="display:inline-block;">

    @foreach($libros as $libro)

    <a href="/libro/{{$libro->id}}/datos" class="list-group-item list-group-item-info">{{$libro->titulo}}</a>

    @endforeach

  </div>


@endif

@endsection
