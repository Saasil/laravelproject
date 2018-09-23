@extends('diseños.app')

@section('titulo')
  <title> Libreria | Editar </title>
@endsection

@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

@section('contenido')

  <h1 style="text-align:center;">Editar datos del libro</h1>

  {!! Form::open(['action' => ['ControladorLibros@update', $libro->id], 'method' => 'POST']) !!}
  {{Form::bsTexto('titulo', $libro->titulo)}}
  {{Form::bsTexto('autor', $libro->autor)}}
  {{Form::bsNumero('año', $libro->año)}}
  {{Form::bsHidden('_method', 'PUT')}}
  {{Form::bsSubmit('Confirmar edición', ['class' => 'btn btn-success float right'])}}
  {!! Form::close() !!}
  <br>

  <a href="/libro/{{$libro->id}}" class="btn btn-secondary">Volver</a>

@endsection
