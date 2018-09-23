<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class ControladorLibros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();

        return view('libros.index')->with('libros', $libros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
        'required' => '¡El :attribute es obligatorio!',
        ];

        $this->validate($request, [
          'titulo' => 'required',
          'autor' => 'required',
          'año' => 'required',]
          ,$messages);

        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->año = $request->input('año');

        $libro->save();

        return redirect('')->with('success', 'Se ha agregado un nuevo libro correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //$libro = Libro::where('id', $id)->first();
        $libro = Libro::find($id);

        return view('libros.datos')->with('libro', $libro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $libro = Libro::find($id);

      return view('libros.editar')->with('libro', $libro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $messages = [
      'required' => '¡El :attribute es obligatorio!',
      ];

      $this->validate($request, [
        'titulo' => 'required',
        'autor' => 'required',
        'año' => 'required']
        ,$messages);

      $libro = Libro::find($id);
      $libro->titulo = $request->input('titulo');
      $libro->autor = $request->input('autor');
      $libro->año = $request->input('año');

      $libro->save();

      return redirect('')->with('success', 'Libro editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();

        return redirect('')->with('success', 'Libro eliminado correctamente.');
    }
}
