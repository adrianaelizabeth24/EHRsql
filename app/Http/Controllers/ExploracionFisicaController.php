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
        $esp_condicion_general = $request->input('txt_condicion_general');
        $piel = $request->input('piel');
        $esp_piel = $request->input('txt_piel');
        $cabeza = $request->input('cabeza');
        $esp_cabeza = $request->input('txt_cabeza');
        $ojos = $request->input('ojos');
        $esp_ojos = $request->input('txt_ojos');
        $oidos_nariza_garganta = $request->input('oidos_nariz_garganta');
        $esp_oidos_nariz_garganta = $request->input('txt_oidos_nariz_garganta');
        $cuello_tiroides = $request->input('cuello_tiroides');
        $esp_cuello_tiroides = $request->input('txt_cuello_tiroides');
        $pulmones = $request->input('pulmones');
        $esp_pulmones = $request->input('txt_pulmones');
        $corazon = $request->input('corazon');
        $esp_corazon = $request->input('txt_corazon');
        $gastro = $request->input('gastro');
        $esp_gastro = $request->input('txt_gastro');
        $lineaticos = $request->input('lineaticos');
        $esp_lineaticos = $request->input('txt_lineaticos');
        $higado = $request->input('higado');
        $esp_higado = $request->input('txt_higado');
        $musculo_esqueletico = $request->input('musculo_esqueletico');
        $esp_musculo_esqueletico = $request->input('txt_musculo_esqueletico');
        $neurologico = $request->input('neurologico');
        $esp_neurologico = $request->input('txt_neurologico');

        //guarda los campos del form en el querybuiler
        $examen_exploracion_fisica->id_paciente = $id_paciente;
        $examen_exploracion_fisica->condicion_general = $condicion_general;
        $examen_exploracion_fisica->txt_condicion_general = $esp_condicion_general;
        $examen_exploracion_fisica->piel = $piel;
        $examen_exploracion_fisica->txt_piel = $esp_piel;
        $examen_exploracion_fisica->cabeza = $cabeza;
        $examen_exploracion_fisica->txt_cabeza = $esp_cabeza;
        $examen_exploracion_fisica->ojos = $ojos;
        $examen_exploracion_fisica->txt_ojos = $esp_ojos;
        $examen_exploracion_fisica->oidos_nariz_garganta = $oidos_nariza_garganta;
        $examen_exploracion_fisica->txt_oidos_nariz_garganta = $esp_oidos_nariz_garganta;
        $examen_exploracion_fisica->cuello_tiroides = $cuello_tiroides;
        $examen_exploracion_fisica->txt_cuello_tiroides = $esp_cuello_tiroides;
        $examen_exploracion_fisica->pulmones = $pulmones;
        $examen_exploracion_fisica->txt_pulmones = $esp_pulmones;
        $examen_exploracion_fisica->corazon = $corazon;
        $examen_exploracion_fisica->txt_corazon = $esp_corazon;
        $examen_exploracion_fisica->gastro = $gastro;
        $examen_exploracion_fisica->txt_gastro = $esp_gastro;
        $examen_exploracion_fisica->lineaticos = $lineaticos;
        $examen_exploracion_fisica->txt_lineaticos = $esp_lineaticos;
        $examen_exploracion_fisica->higado = $higado;
        $examen_exploracion_fisica->txt_higado = $esp_higado;
        $examen_exploracion_fisica->musculo_esqueletico = $musculo_esqueletico;
        $examen_exploracion_fisica->txt_musculo_esqueletico = $esp_musculo_esqueletico;
        $examen_exploracion_fisica->neurologico = $neurologico;
        $examen_exploracion_fisica->txt_neurologico = $esp_neurologico;
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
        $esp_condicion_general = $request->input('txt_condicion_general');
        $piel = $request->input('piel');
        $esp_piel = $request->input('txt_piel');
        $cabeza = $request->input('cabeza');
        $esp_cabeza = $request->input('txt_cabeza');
        $ojos = $request->input('ojos');
        $esp_ojos = $request->input('txt_ojos');
        $oidos_nariza_garganta = $request->input('oidos_nariz_garganta');
        $esp_oidos_nariz_garganta = $request->input('txt_oidos_nariz_garganta');
        $cuello_tiroides = $request->input('cuello_tiroides');
        $esp_cuello_tiroides = $request->input('txt_cuello_tiroides');
        $pulmones = $request->input('pulmones');
        $esp_pulmones = $request->input('txt_pulmones');
        $corazon = $request->input('corazon');
        $esp_corazon = $request->input('txt_corazon');
        $gastro = $request->input('gastro');
        $esp_gastro = $request->input('txt_gastro');
        $lineaticos = $request->input('lineaticos');
        $esp_lineaticos = $request->input('txt_lineaticos');
        $higado = $request->input('higado');
        $esp_higado = $request->input('txt_higado');
        $musculo_esqueletico = $request->input('musculo_esqueletico');
        $esp_musculo_esqueletico = $request->input('txt_musculo_esqueletico');
        $neurologico = $request->input('neurologico');
        $esp_neurologico = $request->input('txt_neurologico');

        //guarda los campos del form en el querybuiler
        $examen_exploracion_fisica->condicion_general = $condicion_general;
        $examen_exploracion_fisica->txt_condicion_general = $esp_condicion_general;
        $examen_exploracion_fisica->piel = $piel;
        $examen_exploracion_fisica->txt_piel = $esp_piel;
        $examen_exploracion_fisica->cabeza = $cabeza;
        $examen_exploracion_fisica->txt_cabeza = $esp_cabeza;
        $examen_exploracion_fisica->ojos = $ojos;
        $examen_exploracion_fisica->txt_ojos = $esp_ojos;
        $examen_exploracion_fisica->oidos_nariz_garganta = $oidos_nariza_garganta;
        $examen_exploracion_fisica->txt_oidos_nariz_garganta = $esp_oidos_nariz_garganta;
        $examen_exploracion_fisica->cuello_tiroides = $cuello_tiroides;
        $examen_exploracion_fisica->txt_cuello_tiroides = $esp_cuello_tiroides;
        $examen_exploracion_fisica->pulmones = $pulmones;
        $examen_exploracion_fisica->txt_pulmones = $esp_pulmones;
        $examen_exploracion_fisica->corazon = $corazon;
        $examen_exploracion_fisica->txt_corazon = $esp_corazon;
        $examen_exploracion_fisica->gastro = $gastro;
        $examen_exploracion_fisica->txt_gastro = $esp_gastro;
        $examen_exploracion_fisica->lineaticos = $lineaticos;
        $examen_exploracion_fisica->txt_lineaticos = $esp_lineaticos;
        $examen_exploracion_fisica->higado = $higado;
        $examen_exploracion_fisica->txt_higado = $esp_higado;
        $examen_exploracion_fisica->musculo_esqueletico = $musculo_esqueletico;
        $examen_exploracion_fisica->txt_musculo_esqueletico = $esp_musculo_esqueletico;
        $examen_exploracion_fisica->neurologico = $neurologico;
        $examen_exploracion_fisica->txt_neurologico = $esp_neurologico;
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
