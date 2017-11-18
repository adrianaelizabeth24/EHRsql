<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\historia_psiquiatrica_previa;
use App\trastorno_mental;
use App\trastorno_historia_psiquiatrica_previa;
use App\trastorno_historia_psiquiatrica_previa_values;
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
        $trastorno = trastorno_mental::all();
        return view('historia_psiquiatrica_previa.create', ['paciente' => $paciente, 'trastorno' => $trastorno]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $historia = new trastorno_historia_psiquiatrica_previa();
        $historia->id_paciente = $request->input('id_paciente');
        $historia->save();

        $trastronos = trastorno_mental::all();
        foreach ($trastronos as $tras) {
            $valores = new trastorno_historia_psiquiatrica_previa_values();
            $valores->id_trastorno_historia_psiquiatrica_previa = $historia->id;
            $valores->id_trastorno = $tras->id;
            $valores->value = $request->input($tras->id);
            $valores->save();
        }

        $historial_tratamiento = new historia_psiquiatrica_previa();
        $historial_tratamiento->id_paciente = $request->input('id_paciente');
        $historial_tratamiento->tratamiento_previo = $request->input('tratamiento_previo');
        $historial_tratamiento->quien_lo_trato = $request->input('quien_lo_trato');
        $historial_tratamiento->hospitalizacion = $request->input('hospitalizacion');
        $historial_tratamiento->primera_hospitalizacion = $request->input('primera_hospitalizacion');
        $historial_tratamiento->no_hospitalizaciones = $request->input('no_hospitalizaciones');
        $historial_tratamiento->duracion_hospitalizacion = $request->input('duracion_hospitalizacion');
        $historial_tratamiento->motivo_hospitalizacion = $request->input('motivo_hospitalizacion');
        $historial_tratamiento->tratamiento = $request->input('tratamiento');
        $historial_tratamiento->id_trastorno_tabla = $historia->id;
        $historial_tratamiento->save();

        $paciente = paciente::find($historial_tratamiento->id_paciente);
        $paciente->id_historia_previa = $historial_tratamiento->id;
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
        $trastornos = trastorno_mental::all();
        $values = trastorno_historia_psiquiatrica_previa_values::where('id_trastorno_historia_psiquiatrica_previa', '=', $historia->id_trastorno_tabla)->get();
        return view('historia_psiquiatrica_previa.show', ['historial' => $historia, 'valor' => $values,
            'trastorno' => $trastornos]);
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
        $values = trastorno_historia_psiquiatrica_previa_values::where('id_trastorno_historia_psiquiatrica_previa', '=',
            $historia->id_trastorno_tabla)->get();
        $trastornos = trastorno_mental::all();
        return view('historia_psiquiatrica_previa.edit', ['historial' => $historia, 'valores' => $values,
            'trastorno' => $trastornos, 'id' => $id]);
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


        $tablaValores = trastorno_historia_psiquiatrica_previa_values::where(
            'id_trastorno_historia_psiquiatrica_previa', '=', $historia->id_trastorno_tabla)->get();
        $trastronos = trastorno_mental::all();
        foreach ($trastronos as $tras) {
            foreach ($tablaValores as $valores){
                $valores->value = $request->input($tras->id);
                $valores->save();
            }
        }

        $historia->tratamiento_previo = $request->input('tratamiento_previo');
        $historia->quien_lo_trato = $request->input('quien_lo_trato');
        $historia->hospitalizacion = $request->input('hospitalizacion');
        $historia->primera_hospitalizacion = $request->input('primera_hospitalizacion');
        $historia->no_hospitalizaciones = $request->input('no_hospitalizaciones');
        $historia->duracion_hospitalizacion = $request->input('duracion_hospitalizacion');
        $historia->motivo_hospitalizacion = $request->input('motivo_hospitalizacion');
        $historia->tratamiento = $request->input('tratamiento');
        $historia->save();

        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_previa = $historia->id;
        $paciente->save();
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
        $paciente->id_historia_previa = 0;
        $paciente->save();

        $historiaTrastornoPaciente = trastorno_historia_psiquiatrica_previa::where('id_paciente', '=', $historia->id_paciente)->first();
        $historiaTrastornoPaciente->delete();

        $historiaValues = trastorno_historia_psiquiatrica_previa_values::where('id_trastorno_historia_psiquiatrica_previa', '=', $historia->id_tabla_trastorno)->get();
        foreach ($historiaValues as $values) {
            $values->delete();
        }

        $historia->delete();

        return redirect()->action('PacienteController@index');
    }

}

