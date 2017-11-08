<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lugar_residencia;

class LugarResidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares = lugar_residencia::all();
        return view('lugar_residencia.index', ['lugares' => $lugares]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugar_residencia.create');
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
        $lugares = new lugar_residencia();

        //obitene los campos
        $nombre = $request->input('nombre');

        //guarda los campos del form en el querybuiler
        $lugares->nombre = $nombre;
        $lugares->save();

        return redirect()->action('LugarResidenciaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugares = lugar_residencia::find($id);
        return view('lugar_residencia.show', ['lugares' => $lugares]);
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
        $lugares = lugar_residencia::find($id);
        $lugares->delete();
        return redirect()->action('LugarResidenciaController@index');
    }
}
