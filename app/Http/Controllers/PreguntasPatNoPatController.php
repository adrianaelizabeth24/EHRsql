<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\preguntas_patnopat;

class PreguntasPatNoPatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pregunta = preguntas_patnopat::all();
        return view('preguntasPatNoPat.index', ['preguntas' => $pregunta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preguntasPatNoPat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crea el nuevo paciente a insertar en la base de datos
        $preguntas = new preguntas_patnopat();

        //obitene los campos
        $nombre = $request->input('preguntas');

        //guarda los campos del form en el querybuiler
        $preguntas->preguntas = $nombre;
        $preguntas->save();

        return redirect()->action('PreguntasPatNoPatController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntas = preguntas_patnopat::find($id);
        return view('preguntasPatNoPat.show', ['preguntas' => $preguntas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $preguntas = preguntas_patnopat::find($id);
        $preguntas->delete();
        return redirect()->action('PreguntasPatNoPatController@index');
    }
}
