<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\opciones_exploracion_fisica;


class OpcionesExploracionFisica extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opciones = opciones_exploracion_fisica::all();
        return view('opciones_exploracion_fisica.index', ['opciones' => $opciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('opciones_exploracion_fisica.create');
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
        $opciones = new opciones_exploracion_fisica();

        //obitene los campos
        $nombre = $request->input('nombre');

        //guarda los campos del form en el querybuiler
        $opciones->nombre = $nombre;
        $opciones->save();

        return redirect()->action('OpcionesExploracionFisica@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opciones = opciones_exploracion_fisica::find($id);
        return view('opciones_exploracion_fisica.show', ['opciones' => $opciones]);
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
        $opciones = opciones_exploracion_fisica::find($id);
        $opciones->delete();
        return redirect()->action('OpcionesExploracionFisica@index');
    }
}
