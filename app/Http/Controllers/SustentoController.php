<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sustento_familiar;

class SustentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sustentos = sustento_familiar::all();
        return view('sustento.index', ['sustentos' => $sustentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sustento.create');
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
        $sustentos = new sustento_familiar();

        //obitene los campos
        $nombre = $request->input('nombre');

        //guarda los campos del form en el querybuiler
        $sustentos->nombre = $nombre;
        $sustentos->save();

        return redirect()->action('SustentoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sustentos = sustento_familiar::find($id);
        return view('sustento.show', ['sustentos' => $sustentos]);
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
        $sustentos = sustento_familiar::find($id);
        $sustentos->delete();
        return redirect()->action('SustentoController@index');
    }
}
