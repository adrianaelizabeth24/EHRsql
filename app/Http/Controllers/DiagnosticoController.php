<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diagnostico;
use App\paciente;

class DiagnosticoController extends Controller
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
        return view('diagnostico.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diagnsotico = new diagnostico();

        $id_paciente = $request->input('id_paciente');

        //guarda los campos del form en el querybuiler
        $diagnsotico->id_paciente = $request->input('id_paciente');
        $diagnsotico->diagnostico_primario = $request->input('diagnostico_primario');
        $diagnsotico->codigo = $request->input('codigo');
        $diagnsotico->icg_s = $request->input('icg_s');
        $diagnsotico->diagnostico_secundario = $request->input('diagnostico_secundario');
        $diagnsotico->codigo_secundario = $request->input('codigo_secundario');
        $diagnsotico->icg_s_secundario = $request->input('icg_s_secundario');
        $diagnsotico->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_diagnostico = $diagnsotico->id;
        $paciente->save();
        return redirect()->action('DiagnosticoController@show', $diagnsotico->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnostico = diagnostico::find($id);
        $paciente = paciente::find($diagnostico->id_paciente);
        return view('diagnostico.show', ['diagnostico' => $diagnostico, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnostico = diagnostico::find($id);
        $paciente = paciente::find($diagnostico->id_paciente);
        return view('diagnostico.edit', ['diagnostico' => $diagnostico, 'id' => $id, 'paciente' => $paciente]);
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
        $diagnsotico = diagnostico::find($id);



        //guarda los campos del form en el querybuiler
        $diagnsotico->diagnostico_primario = $request->input('diagnostico_primario');
        $diagnsotico->codigo = $request->input('codigo');
        $diagnsotico->icg_s = $request->input('icg_s');
        $diagnsotico->diagnostico_secundario = $request->input('diagnostico_secundario');
        $diagnsotico->codigo_secundario = $request->input('codigo_secundario');
        $diagnsotico->icg_s_secundario = $request->input('icg_s_secundario');
        $diagnsotico->save();

        return redirect()->action('DiagnosticoController@show', $diagnsotico->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnostico = diagnostico::find($id);
        $paciente = paciente::find($diagnostico->id_paciente);
        $paciente->id_diagnostico = 0;
        $paciente->save();
        $diagnostico->delete();
        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
