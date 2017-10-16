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

        //obitene los campos
        $hallazgos = $request->input('hallazgos');
        $diagnostico_primario = $request->input('diagnostico_primario');
        $diagnostico_secundario = $request->input('diagnostico_secundario');
        $plan_tratamiento = $request->input('plan_tratamiento');

        //guarda los campos del form en el querybuiler
        $examen_mental->hallazgos = $hallazgos;
        $examen_mental->diagnostico_primario = $diagnostico_primario;
        $examen_mental->diagnostico_secundario = $diagnostico_secundario;
        $examen_mental->pla_tratamiento = $plan_tratamiento;
        $examen_mental->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_examen_mental = $examen_mental->id;
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
        $examen_mental = examen_mental::find($id);
        return view('examen_mental.show', ['examen' => $examen_mental]);
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
        return view('examen_mental.edit', ['examen' => $examen_mental, 'id' => $id]);
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

        //obtiene los campos
		$hallazgos = $request->input('hallazgos');
        $diagnostico_primario = $request->input('diagnostico_primario');
        $diagnostico_secundario = $request->input('diagnostico_secundario');
        $plan_tratamiento = $request->input('plan_tratamiento');

        //guarda los campos del form en el querybuiler
		//guarda los campos del form en el querybuiler
        $examen_mental->hallazgos = $hallazgos;
        $examen_mental->diagnostico_primario = $diagnostico_primario;
        $examen_mental->diagnostico_secundario = $diagnostico_secundario;
        $examen_mental->pla_tratamiento = $plan_tratamiento;
        $examen_mental->save();

        $paciente = paciente::find($examen_mental->id_paciente);
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
        $examen_mental = examen_mental::find($id);
        $paciente = paciente::find($examen_mental->id_paciente);
        $paciente->id_examen_mental = 0;
        $paciente->save();
        $examen_mental->delete();
        return redirect()->action('PacienteController@index');
    }
}
