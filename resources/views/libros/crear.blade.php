@extends('diseños.app')

@section('titulo')
  <title> Libreria | Agregar </title>
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
  
  <h1 style="text-align:center;">Agregar libro</h1>

  {!! Form::open(['action' => 'ControladorLibros@store', 'method' => 'POST']) !!}
  {{Form::bsTexto('titulo')}}
  {{Form::bsTexto('autor')}}
  {{Form::bsNumero('año')}}
  {{Form::bsSubmit('Confirmar', ['class' => 'btn btn-success float right'])}}
  {!! Form::close() !!}
  <br>

  <a href="/" class="btn btn-secondary">Volver</a>

@endsection
