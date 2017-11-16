<?php

namespace App\Http\Controllers;

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
        $preguntas = preguntas_patnopat::all();
        return view('historia_psiquiatrica_previa.create', ['paciente' => $paciente, 'preguntas' => $preguntas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $historia_pac = new historia_psiquiatrica_previa();
        $historia_pac->id_paciente = $request->input('id_paciente');
        $historia_pac->save();

        $historial_tratamiento->id_paciente = $id_paciente;
        $historial_tratamiento->tratamiento_previo = $tratamiento_previo;
        $historial_tratamiento->quien_lo_trato = $quien_lo_trato;
        $historial_tratamiento->hospitalizacion = $hospitalizacion;
        $historial_tratamiento->primera_hospitalizacion = $primera_hospitalizacion;
        $historial_tratamiento->no_hospitalizaciones = $no_hospitalizaciones;
        $historial_tratamiento->duracion_hospitalizacion = $duracion_hospitalizacion;
        $historial_tratamiento->motivo_hospitalizacion = $motivo_hospitalizacion;
        $historial_tratamiento->tratamiento = $tratamiento;

        $preguntas = preguntas_historia_priquiatrica_previa::all();
        foreach ($preguntas as $tras_previo) {
            $valores = new historia_priquiatrica_previa_valores();
            $valores->id_historia_paciente = $historia_pac->id;
            $valores->id_pregunta = $tras_previo->id;
            $valores->valor = $request->input($tras_previo->id);
            $valores->save();
        }

        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_clinica_familiar = $historia->id;
        $paciente->save();
        return redirect()->action('PacienteController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historia = historia_psiquiatrica_previa::find($id);
        $valores = historia_psiquiatrica_previa::where('id_historia_paciente', '=',
            $historia->id_tabla_valores)->get();
        $preguntas = preguntas_historia_priquiatrica_previa::all();
        return view('historia_psiquiatrica_previa.show', ['historia' => $historia, 'valores' => $valores,
            'preguntas' => $preguntas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historia = historia_psiquiatrica_previa::find($id);
        $values = historia_priquiatrica_previa_valores::where('id_historia_paciente', '=', $historia->id_tabla_valores)->get();
        $preguntas = preguntas_historia_priquiatrica_previa::all();
        return view('historia_psiquiatrica_previa.edit', ['historia' => $historia, 'id' => $id, 'valores' => $values, 'preguntas' => $preguntas]);
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
        $historia = historia_psiquiatrica_previa::find($id);
        $tablaValores = historia_priquiatrica_previa_valores::where('id_historia_paciente', '=', $historia->id_tabla_valores)->get();
        $preguntas= preguntas_historia_priquiatrica_previa::all();

        $historial_tratamiento->tratamiento_previo = $tratamiento_previo;
        $historial_tratamiento->quien_lo_trato = $quien_lo_trato;
        $historial_tratamiento->hospitalizacion = $hospitalizacion;
        $historial_tratamiento->primera_hospitalizacion = $primera_hospitalizacion;
        $historial_tratamiento->no_hospitalizaciones = $no_hospitalizaciones;
        $historial_tratamiento->duracion_hospitalizacion = $duracion_hospitalizacion;
        $historial_tratamiento->motivo_hospitalizacion = $motivo_hospitalizacion;
        $historial_tratamiento->tratamiento = $tratamiento;
        foreach ($preguntas as $tras_previo) {
            foreach ($tablaValores as $values) {
                $values->valor = $request->input($tras_previo->id);
                $values->save();
            }
        }
        $paciente = paciente::find($historia->id_paciente);
        return redirect()->action('PacienteController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historia = historia_psiquiatrica_previa::find($id);

        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_psiquiatrica_previa = 0;
        $paciente->save();

        $historia_pac = historia_psiquiatrica_previa_paciente::where('id_paciente', '=', $historia->id_paciente)->first();
        $historia_pac->delete();

        $historiaValues = historia_priquiatrica_previa_valores::where('id_historial_paciente', '=', $historia->id_tabla_valores)->get();
        foreach ($historiaValues as $values) {
            $values->delete();
        }

        $historia->delete();


        return redirect()->action('PacienteController@index');
    }
}

