<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trastorno_mental;

class TrastornoMentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trastornos = trastorno_mental::all();
        return view('trastorno_mental.index', ['trastornos' => $trastornos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trastorno_mental.create');
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
        $trastornos = new trastorno_mental();

        //obitene los campos
        $nombre = $request->input('nombre');

        //guarda los campos del form en el querybuiler
        $trastornos->nombre = $nombre;
        $trastornos->save();

        return redirect()->action('TrastornoMentalController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trastornos = trastorno_mental::find($id);
        return view('sustento.show', ['trastorno_mental' => $trastornos]);
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
        $trastornos = trastorno_mental::find($id);
        $trastornos->delete();
        return redirect()->action('TrastornoMentalController@index');
    }
}
