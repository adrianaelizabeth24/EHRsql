<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\abuso_de_substancias;
use App\substancia_abusada;
use App\paciente;
use App\substancias;

class AbusoDeSubstanciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = paciente::find($id);
        $substancias = substancias::all();
        return view('abuso_de_substancias.create', ['paciente' => $paciente, 'substancias' => $substancias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abuso_de_substancias = new abuso_de_substancias();
        $abuso_de_substancias->id_paciente = $request->input('id_paciente');
        $abuso_de_substancias->save();

        $substancias = substancias::all();

        foreach($substancias as $susbtancia) {
            if ($request->input($susbtancia->id) == 1) {

                $substancia_abusada = new substancia_abusada();
                $substancia_abusada->id = $abuso_de_substancias->id;
                $substancia_abusada->id_substancia = $request->input($susbtancia->id);
                $substancia_abusada->save();
            }
        }
        $paciente = paciente::find($abuso_de_substancias->id_paciente);
        $paciente->id_abuso_de_substancias = $abuso_de_substancias->id;
        $paciente->save();
        return view('paciente.show', ['paciente' => $paciente]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
