<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;
use App\ehr;

class EHRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = paciente::find($id);
        return view('ehr.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ehr = new ehr();

        //obtiene los campos
        $id_paciente = $request->input('id_paciente');
        $id_tratamiento = $request->input('id_historial_tratamiento');
        $numero_de_episodios = $request->input('numero_de_episodios');
        $problemas_psiquiatricos = $request->input('problemas_psiquiatricos');
        $tratamientos_anteriores = $request->input('tratamientos_anteriores');
        $antecedentes_psicologicos = $request->input('antecedentes_psicologicos');
        $notas_antecedentes = $request->input('notas_antecedentes');

        $ehr->id_paciente = $id_paciente;
        $ehr->id_tratamiento = $id_tratamiento;
        $ehr->numero_de_episodios = $numero_de_episodios;
        $ehr->problemas_psiquiatricos = $problemas_psiquiatricos;
        $ehr->tratamientos_anteriores = $tratamientos_anteriores;
        $ehr->antecedentes_psicologicos = $antecedentes_psicologicos;
        $ehr->notas_antecedentes = $notas_antecedentes;
        $ehr->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_ehr = $ehr->id;
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
        $ehr = ehr::find($id);
        return view('ehr.show', ['ehr' => $ehr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ehr = ehr::find($id);
        return view('ehr.edit', ['ehr' => $ehr, 'id' => $id]);
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
        $ehr = ehr::find($id);

        //obtiene los campos
        $numero_de_episodios = $request->input('numero_de_episodios');
        $problemas_psiquiatricos = $request->input('problemas_psiquiatricos');
        $tratamientos_anteriores = $request->input('tratamientos_anteriores');
        $antecedentes_psicologicos = $request->input('antecedentes_psicologicos');
        $notas_antecedentes = $request->input('notas_antecedentes');

        $ehr->numero_de_episodios = $numero_de_episodios;
        $ehr->problemas_psiquiatricos = $problemas_psiquiatricos;
        $ehr->tratamientos_anteriores = $tratamientos_anteriores;
        $ehr->antecedentes_psicologicos = $antecedentes_psicologicos;
        $ehr->notas_antecedentes = $notas_antecedentes;
        $ehr->save();

        $paciente = paciente::find($ehr->id_paciente);
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
        $ehr = ehr::find($id);
        $paciente = paciente::find($ehr->id_paciente);
        $paciente->id_ehr = 0;
        $paciente->save();
        $ehr->delete();
        return redirect()->action('PacienteController@index');
    }
}
