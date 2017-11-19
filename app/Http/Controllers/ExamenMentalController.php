<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\examen_mental;
use App\paciente;

class ExamenMentalController extends Controller
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
        return view('examen_mental.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crea el nuevo examen a insertar en la base de datos
        $examen_mental = new examen_mental();

        $id_paciente = $request->input('id_paciente');

        //guarda los campos del form en el querybuiler
        $examen_mental->id_paciente = $id_paciente;
        $examen_mental->escalas_realizadas = $request->input('escalas_realizadas');
        $examen_mental->ham_d = $request->input('ham_d');
        $examen_mental->ham_a = $request->input('ham_a');
        $examen_mental->y_bocs = $request->input('y_bocs');
        $examen_mental->q_les_q = $request->input('q_les_q');
        $examen_mental->gadi = $request->input('gadi');;
        $examen_mental->bdi=  $request->input('bdi');
        $examen_mental->spin =$request->input('spin');
        $examen_mental->pas = $request->input('pas');
        $examen_mental->pt_acostado_sistolica = $request->input('pt_acostado_sistolica');
        $examen_mental->pt_acostado_diastolica = $request->input('pt_acostado_diastolica');
        $examen_mental->st_acostado_sistolica = $request->input('st_acostado_sistolica');
        $examen_mental->st_acostado_diastolica= $request->input('st_acostado_diastolica');
        $examen_mental->pt_parado_sistolica = $request->input('pt_parado_sistolica');
        $examen_mental->pt_parado_diastolica = $request->input('pt_parado_diastolica');
        $examen_mental->st_parado_sistolica = $request->input('st_parado_sistolica');
        $examen_mental->st_parado_diastolica = $request->input('st_parado_diastolica');
        $examen_mental->frecuencia_acostado = $request->input('frecuencia_acostado');
        $examen_mental->frecuencia_parado = $request->input('frecuencia_parado');
        $examen_mental->ritmo_regular = $request->input('ritmo_regular');
        $examen_mental->ritmo_irregular = $request->input('ritmo_irregular');
        $examen_mental->peso = $request->input('peso');
        $examen_mental->talla = $request->input('talla');
        $examen_mental->circumferencia = $request->input('circumferencia');
        $examen_mental->temperatura = $request->input('temperatura');
        $examen_mental->peso_usual = $request->input('peso_usual');
        $examen_mental->imc = $request->input('imc');
        $examen_mental->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_examen_mental = $examen_mental->id;
        $paciente->save();

        return redirect()->action('ExamenMentalController@show', $examen_mental->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $examen_mental = examen_mental::find($id);
        $paciente = paciente::find($examen_mental->id_paciente);
        return view('examen_mental.show', ['examen' => $examen_mental, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examen_mental = examen_mental::find($id);
        $paciente = paciente::find($examen_mental->id_paciente);
        return view('examen_mental.edit', ['examen' => $examen_mental, 'id' => $id, 'paciente'=> $paciente]);
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
        $examen_mental = examen_mental::find($id);

        $examen_mental->escalas_realizadas = $request->input('escalas_realizadas');
        $examen_mental->ham_d = $request->input('ham_d');
        $examen_mental->ham_a = $request->input('ham_a');
        $examen_mental->y_bocs = $request->input('y_bocs');
        $examen_mental->q_les_q = $request->input('q_les_q');
        $examen_mental->gadi = $request->input('gadi');;
        $examen_mental->bdi=  $request->input('bdi');
        $examen_mental->spin =$request->input('spin');
        $examen_mental->pas = $request->input('pas');
        $examen_mental->pt_acostado_sistolica = $request->input('pt_acostado_sistolica');
        $examen_mental->pt_acostado_diastolica = $request->input('pt_acostado_diastolica');
        $examen_mental->st_acostado_sistolica = $request->input('st_acostado_sistolica');
        $examen_mental->st_acostado_diastolica= $request->input('st_acostado_diastolica');
        $examen_mental->pt_parado_sistolica = $request->input('pt_parado_sistolica');
        $examen_mental->pt_parado_diastolica = $request->input('pt_parado_diastolica');
        $examen_mental->st_parado_sistolica = $request->input('st_parado_sistolica');
        $examen_mental->st_parado_diastolica = $request->input('st_parado_diastolica');
        $examen_mental->frecuencia_acostado = $request->input('frecuencia_acostado');
        $examen_mental->frecuencia_parado = $request->input('frecuencia_parado');
        $examen_mental->ritmo_regular = $request->input('ritmo_regular');
        $examen_mental->ritmo_irregular = $request->input('ritmo_irregular');
        $examen_mental->peso = $request->input('peso');
        $examen_mental->talla = $request->input('talla');
        $examen_mental->circumferencia = $request->input('circumferencia');
        $examen_mental->temperatura = $request->input('temperatura');
        $examen_mental->peso_usual = $request->input('peso_usual');
        $examen_mental->imc = $request->input('imc');
        $examen_mental->save();

        return redirect()->action('ExamenMentalController@show', $examen_mental->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examen_mental = examen_mental::find($id);
        $paciente = paciente::find($examen_mental->id_paciente);
        $paciente->id_examen_mental = 0;
        $paciente->save();
        $examen_mental->delete();
        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
