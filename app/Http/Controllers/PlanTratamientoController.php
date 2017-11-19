<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;
use App\plan_tratamiento;

class PlanTratamientoController extends Controller
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
        return view('plan_tratamiento.create', ['paciente' => $paciente]);
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
        $plan = new plan_tratamiento();

        //obitene los campos
        $id_paciente = $request->input('id_paciente');


        //guarda los campos del form en el querybuiler
        $plan->id_paciente = $id_paciente;
        $plan->diagnostico_primario = $request->input('diagnostico_primario');
        $plan->diagnsotico_secundario = $request->input('diagnostico_secundario');
        $plan->seguimiento_farmacologico = $request->input('seguimiento_farmacologico');
        $plan->modalidad_terapeutica = $request->input('modalidad_terapeutica');
        $plan->comentarios = $request->input('comentarios');
        $plan->pronostico = $request->input('pronostico');

        $plan->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_plan_tratamiento = $plan->id;
        $paciente->save();
        return redirect()->action('PlanTratamientoController@show', $plan->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = plan_tratamiento::find($id);
        $paciente = paciente::find($plan->id_paciente);
        return view('plan_tratamiento.show', ['plan' => $plan, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = plan_tratamiento::find($id);
        $paciente = paciente::find($plan->id_paciente);
        return view('plan_tratamiento.edit', ['plan' => $plan, 'id' => $id, 'paciente' => $paciente]);
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
        $plan = plan_tratamiento::find($id);

        //guarda los campos del form en el querybuiler
        $plan->diagnsotico_primario = $request->input('diagnostico_primario');
        $plan->diagnsotico_secundario = $request->input('diagnostico_secundario');
        $plan->seguimiento_farmacologico = $request->input('seguimiento_farmacologico');
        $plan->modalidad_terapeutica = $request->input('modalidad_terapeutica');
        $plan->comentarios = $request->input('comentarios');
        $plan->pronostico = $request->input('pronostico');

        $plan->save();

        return redirect()->action('PlanTratamientoController@show', $plan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = plan_tratamiento::find($id);
        $paciente = paciente::find($plan->id_paciente);
        $paciente->id_plan_tratamiento = 0;
        $paciente->save();
        $plan->delete();
        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
