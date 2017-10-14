<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exploracion_fisica;
use App\paciente;

class ExploracionFisicaController extends Controller
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
        return view('exploracion_fisica.create', ['paciente' => $paciente]);
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
        $examen_exploracion_fisica = new exploracion_fisica();

        //obitene los campos
        $id_paciente = $request->input('id_paciente');
        $condicion_general = $request->input('condicion_general');
        $piel = $request->input('piel');
        $cabeza = $request->input('cabeza');
        $ojos = $request->input('ojos');
        $oidos_nariza_garganta = $request->input('oidos_nariz_garganta');
        $cuello_tiroides = $request->input('cuello_tiroides');
        $pulmones = $request->input('pulmones');
        $corazon = $request->input('corazon');
        $gastro = $request->input('gastro');
        $lineaticos = $request->input('lineaticos');
        $higado = $request->input('higado');
        $musculo_esqueletico = $request->input('musculo_esqueletico');
        $neurologico = $request->input('neurologico');

        //guarda los campos del form en el querybuiler
        $examen_exploracion_fisica->id_paciente = $id_paciente;
        $examen_exploracion_fisica->condicion_general = $condicion_general;
        $examen_exploracion_fisica->piel = $piel;
        $examen_exploracion_fisica->cabeza = $cabeza;
        $examen_exploracion_fisica->ojos = $ojos;
        $examen_exploracion_fisica->oidos_nariz_garganta = $oidos_nariza_garganta;
        $examen_exploracion_fisica->cuello_tiroides = $cuello_tiroides;
        $examen_exploracion_fisica->pulmones = $pulmones;
        $examen_exploracion_fisica->corazon = $corazon;
        $examen_exploracion_fisica->gastro = $gastro;
        $examen_exploracion_fisica->lineaticos = $lineaticos;
        $examen_exploracion_fisica->higado = $higado;
        $examen_exploracion_fisica->musculo_esqueletico = $musculo_esqueletico;
        $examen_exploracion_fisica->neurologico = $neurologico;
        $examen_exploracion_fisica->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_exploracion_fisica = $examen_exploracion_fisica->id;
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
        $exploracion_fisica = exploracion_fisica::find($id);
        return view('exploracion_fisica.show', ['examen' => $exploracion_fisica]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exploracion_fisica = exploracion_fisica::find($id);
        return view('exploracion_fisica.edit', ['examen' => $exploracion_fisica, 'id' => $id]);
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
        $examen_exploracion_fisica = exploracion_fisica::find($id);

        //obitene los campos
        $condicion_general = $request->input('condicion_general');
        $piel = $request->input('piel');
        $cabeza = $request->input('cabeza');
        $ojos = $request->input('ojos');
        $oidos_nariza_garganta = $request->input('oidos_nariz_garganta');
        $cuello_tiroides = $request->input('cuello_tiroides');
        $pulmones = $request->input('pulmones');
        $corazon = $request->input('corazon');
        $gastro = $request->input('gastro');
        $lineaticos = $request->input('lineaticos');
        $higado = $request->input('higado');
        $musculo_esqueletico = $request->input('musculo_esqueletico');
        $neurologico = $request->input('neurologico');

        //guarda los campos del form en el querybuiler
        $examen_exploracion_fisica->condicion_general = $condicion_general;
        $examen_exploracion_fisica->piel = $piel;
        $examen_exploracion_fisica->cabeza = $cabeza;
        $examen_exploracion_fisica->ojos = $ojos;
        $examen_exploracion_fisica->oidos_nariz_garganta = $oidos_nariza_garganta;
        $examen_exploracion_fisica->cuello_tiroides = $cuello_tiroides;
        $examen_exploracion_fisica->pulmones = $pulmones;
        $examen_exploracion_fisica->corazon = $corazon;
        $examen_exploracion_fisica->gastro = $gastro;
        $examen_exploracion_fisica->lineaticos = $lineaticos;
        $examen_exploracion_fisica->higado = $higado;
        $examen_exploracion_fisica->musculo_esqueletico = $musculo_esqueletico;
        $examen_exploracion_fisica->neurologico = $neurologico;
        $examen_exploracion_fisica->save();

        $paciente = paciente::find($examen_exploracion_fisica->id_paciente);
        return view('paciente.show', ['paciente' => $paciente]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exploracion_fisica = exploracion_fisica::find($id);
        $paciente = paciente::find($exploracion_fisica->id_paciente);
        $paciente->id_exploracion_fisica = 0;
        $paciente->save();
        $exploracion_fisica->delete();
        return redirect()->action('PacienteController@index');
    }
}
