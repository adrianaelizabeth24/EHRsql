<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\historia_psiquiatrica_previa;
use App\paciente;

class HistoriaPsiquiatricaPreviaController extends Controller
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
        return view('historia_psiquiatrica_previa.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\aRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crea el nuevo paciente a insertar en la base de datos
        $historial_tratamiento = new historia_psiquiatrica_previa();

        //obitene los campos
        $id_paciente = $request->input('id_paciente');
        $tratamiento_previo = $request->input('tratamiento_previo');
        $quien_lo_trato = $request->input('quien_lo_trato');
        $hospitalizacion = $request->input('hospitalizacion');
        $primera_hospitalizacion = $request->input('primera_hospitalizacion');
        $no_hospitalizaciones = $request->input('no_hospitalizaciones');
        $duracion_hospitalizacion = $request->input('duracion_hospitalizacion');
        $motivo_hospitalizacion = $request->input('motivo_hospitalizacion');
        $tratamiento = $request->input('tratamiento');


        //guarda los campos del form en el querybuiler
        $historial_tratamiento->id_paciente = $id_paciente;
        $historial_tratamiento->tratamiento_previo = $tratamiento_previo;
        $historial_tratamiento->quien_lo_trato = $quien_lo_trato;
        $historial_tratamiento->hospitalizacion = $hospitalizacion;
        $historial_tratamiento->primera_hospitalizacion = $primera_hospitalizacion;
        $historial_tratamiento->no_hospitalizaciones = $no_hospitalizaciones;
        $historial_tratamiento->duracion_hospitalizacion = $duracion_hospitalizacion;
        $historial_tratamiento->motivo_hospitalizacion = $motivo_hospitalizacion;
        $historial_tratamiento->tratamiento = $tratamiento;
        $historial_tratamiento->ezquizofrenia = $request->input('ezquizofrenia');
        $historial_tratamiento->trastorno_bipolar = $request->input('bipolaridad');
        $historial_tratamiento->alcoholismo = $request->input('alcoholismo');
        $historial_tratamiento->drogadiccion = $request->input('drogas');
        $historial_tratamiento->depresion = $request->input('depresion');
        $historial_tratamiento->distimia = $request->input('disimia');
        $historial_tratamiento->ataques_de_panico = $request->input('panico');
        $historial_tratamiento->agorafobia = $request->input('agorafobia');
        $historial_tratamiento->obsesivo_compulsivo = $request->input('obsesion');
        $historial_tratamiento->fobia_social = $request->input('fobia_social');
        $historial_tratamiento->fobia_especifica = $request->input('fobia_especifica');
        $historial_tratamiento->ansiedad = $request->input('ansiedad');
        $historial_tratamiento->demencia = $request->input('demencia');
        $historial_tratamiento->retardo_mental = $request->input('retraso_mental');
        $historial_tratamiento->trastorno_de_peronsonalidad = $request->input('trastorno_personalidad');


        $historial_tratamiento->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_historia_previa = $historial_tratamiento->id;
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
        $historial_tratamiento = historia_psiquiatrica_previa::find($id);
        return view('historia_psiquiatrica_previa.show', ['historial' => $historial_tratamiento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historial_tratamiento = historia_psiquiatrica_previa::find($id);
        return view('historia_psiquiatrica_previa.edit', ['historial' => $historial_tratamiento, 'id' => $id]);
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
        //crea el nuevo paciente a insertar en la base de datos
        $historial_tratamiento = historia_psiquiatrica_previa::find($id);

        //obitene los campos
        $tratamiento_previo = $request->input('tratamiento_previo');
        $quien_lo_trato = $request->input('quien_lo_trato');
        $hospitalizacion = $request->input('hospitalizacion');
        $primera_hospitalizacion = $request->input('primera_hospitalizacion');
        $no_hospitalizaciones = $request->input('no_hospitalizaciones');
        $duracion_hospitalizacion = $request->input('duracion_hospitalizacion');
        $motivo_hospitalizacion = $request->input('motivo_hospitalizacion');
        $tratamiento = $request->input('tratamiento');


        //guarda los campos del form en el querybuiler
        $historial_tratamiento->tratamiento_previo = $tratamiento_previo;
        $historial_tratamiento->quien_lo_trato = $quien_lo_trato;
        $historial_tratamiento->hospitalizacion = $hospitalizacion;
        $historial_tratamiento->primera_hospitalizacion = $primera_hospitalizacion;
        $historial_tratamiento->no_hospitalizaciones = $no_hospitalizaciones;
        $historial_tratamiento->duracion_hospitalizacion = $duracion_hospitalizacion;
        $historial_tratamiento->motivo_hospitalizacion = $motivo_hospitalizacion;
        $historial_tratamiento->tratamiento = $tratamiento;
        $historial_tratamiento->ezquizofrenia = $request->input('ezquizofrenia');
        $historial_tratamiento->trastorno_bipolar = $request->input('bipolaridad');
        $historial_tratamiento->alcoholismo = $request->input('alcoholismo');
        $historial_tratamiento->drogadiccion = $request->input('drogas');
        $historial_tratamiento->depresion = $request->input('depresion');
        $historial_tratamiento->distimia = $request->input('disimia');
        $historial_tratamiento->ataques_de_panico = $request->input('panico');
        $historial_tratamiento->agorafobia = $request->input('agorafobia');
        $historial_tratamiento->obsesivo_compulsivo = $request->input('obsesion');
        $historial_tratamiento->fobia_social = $request->input('fobia_social');
        $historial_tratamiento->fobia_especifica = $request->input('fobia_especifica');
        $historial_tratamiento->ansiedad = $request->input('ansiedad');
        $historial_tratamiento->demencia = $request->input('demencia');
        $historial_tratamiento->retardo_mental = $request->input('retraso_mental');
        $historial_tratamiento->trastorno_de_peronsonalidad = $request->input('trastorno_personalidad');

        $historial_tratamiento->save();

        $paciente = paciente::find($historial_tratamiento->id_paciente);
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
        $historial_tratamiento = historia_psiquiatrica_previa::find($id);
        $paciente = paciente::find($historial_tratamiento->id_paciente);
        $paciente->id_historia_previa = 0;
        $paciente->save();
        $historial_tratamiento->delete();
        return redirect()->action('PacienteController@index');
    }
}
