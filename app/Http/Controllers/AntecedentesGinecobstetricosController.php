<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\antecedentes_ginecobstetricos;
use App\paciente;

class AntecedentesGinecobstetricosController extends Controller
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
        return view('antecedentes_ginecobstetricos.create', ['paciente' => $paciente]);
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

        $antecedentes = new antecedentes_ginecobstetricos();

        //obtiene los campos
        $id_paciente = $request->input('id_paciente');
        $fecha = $request->input('fecha');
        $ritmo_cardiaco = $request->input('ritmo_cardiaco');
        $tension_premenstrual = $request->input('tension_premenstrual');
        $vida_sexual = $request->input('vida_sexual');
        $numero_compañeros_sexuales = $request->input('numero_compañeros_sexuales');
        $antecedentes_obstetricos = $request->input('antecedentes_obstetricos');
        $embarazo_actual = $request->input('embarazo_actual');
        $lactancia = $request->input('lactancia');
        $posibilidad_embarazo = $request->input('posibilidad_embarazo');
        $histerectomia = $request->input('histerectomia');

        $antecedentes->id_paciente = $id_paciente;
        $antecedentes->fecha = $fecha;
        $antecedentes->ritmo_cardiaco = $ritmo_cardiaco;
        $antecedentes->tension_premenstrual = $tension_premenstrual;
        $antecedentes->vida_sexual = $vida_sexual;
        $antecedentes->numero_compañeros_sexuales = $numero_compañeros_sexuales;
        $antecedentes->antecedentes_obstreticos = $antecedentes_obstetricos;
        $antecedentes->embarazo_actual = $embarazo_actual;
        $antecedentes->lactancia = $lactancia;
        $antecedentes->posibilidad_embarazo = $posibilidad_embarazo;
        $antecedentes->histerectomia = $histerectomia;

        $antecedentes->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_antecedentes_ginecobstetricos = $antecedentes->id;
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
        $antecedentes = antecedentes_ginecobstetricos::find($id);
        return view('antecedentes_ginecobstetricos.show', ['antecedentes' => $antecedentes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $antecedentes = antecedentes_ginecobstetricos::find($id);
        return view('antecedentes_ginecobstetricos.edit', ['antecedentes' => $antecedentes, 'id' => $id]);
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
        $antecedentes = antecedentes_ginecobstetricos::find($id);

        //obtiene los campos
        $fecha = $request->input('fecha');
        $ritmo_cardiaco = $request->input('ritmo_cardiaco');
        $tension_premenstrual = $request->input('tension_premenstrual');
        $vida_sexual = $request->input('vida_sexual');
        $numero_compañeros_sexuales = $request->input('numero_compañeros_sexuales');
        $antecedentes_obstetricos = $request->input('antecedentes_obstetricos');
        $embarazo_actual = $request->input('embarazo_actual');
        $lactancia = $request->input('lactancia');
        $posibilidad_embarazo = $request->input('posibilidad_embarazo');
        $histerectomia = $request->input('histerectomia');

        $antecedentes->fecha = $fecha;
        $antecedentes->ritmo_cardiaco = $ritmo_cardiaco;
        $antecedentes->tension_premenstrual = $tension_premenstrual;
        $antecedentes->vida_sexual = $vida_sexual;
        $antecedentes->numero_compañeros_sexuales = $numero_compañeros_sexuales;
        $antecedentes->antecedentes_obstreticos = $antecedentes_obstetricos;
        $antecedentes->embarazo_actual = $embarazo_actual;
        $antecedentes->lactancia = $lactancia;
        $antecedentes->posibilidad_embarazo = $posibilidad_embarazo;
        $antecedentes->histerectomia = $histerectomia;

        $antecedentes->save();

        $paciente = paciente::find($antecedentes->id_paciente);
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
        $antecedentes = antecedentes_ginecobstetricos::find($id);
        $paciente = paciente::find($antecedentes->id_paciente);
        $paciente->id_antecedentes_ginecobstetricos = 0;
        $paciente->save();
        $antecedentes->delete();
        return redirect()->action('PacienteController@index');
    }
}
