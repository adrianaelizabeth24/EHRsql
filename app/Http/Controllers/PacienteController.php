<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = paciente::all();
        return view('paciente.index', ['pacientes' => $paciente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
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
        $paciente = new paciente();

        //obitene los campos
        $nombre = $request->input('nombre');
        $apellido_paterno = $request->input('apellido_paterno');
        $apellido_materno = $request->input('apellido_materno');
        $sexo = $request->input('sexo');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $nacimiento = $request->input('nacimiento');
        $estado_civil = $request->input('estado_civil');
        $religion = $request->input('religion');
        $escolaridad = $request->input('escolaridad');
        $sustento = $request->input('sustento');
        $ocupacion_sustento = $request->input('ocupacion_sustento');
        $ocuapcion_paciente = $request->input('ocupacion_paciente');
        $edad = $request->input('edad');
        $motivo_consulta = $request->input('motivo_consulta');
        $referido_por = $request->input('referido');
        $lugar_residencia = $request->input('residencia');


        //guarda los campos del form en el querybuiler
        $paciente->nombre = $nombre;
        $paciente->apellido_paterno = $apellido_paterno;
        $paciente->apellido_materno = $apellido_materno;
        $paciente->sexo = $sexo;
        $paciente->direccion = $direccion;
        $paciente->telefono = $telefono;
        $paciente->nacimiento = $nacimiento;
        $paciente->estado_civil = $estado_civil;
        $paciente->religion = $religion;
        $paciente->escolaridad = $escolaridad;
        $paciente->sustento = $sustento;
        $paciente->ocupacion_sustento = $ocupacion_sustento;
        $paciente->ocupacion_paciente = $ocuapcion_paciente;
        $paciente->edad = $edad;
        $paciente->motivo_consulta = $motivo_consulta;
        $paciente->referido_por = $referido_por;
        $paciente->lugar_residencia = $lugar_residencia;

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
        $paciente = paciente::find($id);
        return view('paciente.show', ['paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = paciente::find($id);
        return view('paciente.edit', ['paciente' => $paciente, 'id' => $id]);
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
       $paciente = paciente::find($id);
        //get campos
        //obitene los campos

        $nombre = $request->input('nombre');
        $apellido_paterno = $request->input('apellido_paterno');
        $apellido_materno = $request->input('apellido_materno');
        $sexo = $request->input('sexo');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $nacimiento = $request->input('nacimiento');
        $estado_civil = $request->input('estado_civil');
        $religion = $request->input('religion');
        $escolaridad = $request->input('escolaridad');
        $sustento = $request->input('sustento');
        $ocupacion_sustento = $request->input('ocupacion_sustento');
        $ocuapcion_paciente = $request->input('ocupacion_paciente');
        $edad = $request->input('edad');
        $motivo_consulta = $request->input('motivo_consulta');
        $referido_por = $request->input('referido');
        $lugar_residencia = $request->input('residencia');

        //guarda los campos del form en el querybuiler
        $paciente->nombre = $nombre;
        $paciente->apellido_paterno = $apellido_paterno;
        $paciente->apellido_materno = $apellido_materno;
        $paciente->sexo = $sexo;
        $paciente->direccion = $direccion;
        $paciente->telefono = $telefono;
        $paciente->nacimiento = $nacimiento;
        $paciente->estado_civil = $estado_civil;
        $paciente->religion = $religion;
        $paciente->escolaridad = $escolaridad;
        $paciente->sustento = $sustento;
        $paciente->ocupacion_sustento = $ocupacion_sustento;
        $paciente->ocupacion_paciente = $ocuapcion_paciente;
        $paciente->edad = $edad;
        $paciente->motivo_consulta = $motivo_consulta;
        $paciente->referido_por = $referido_por;
        $paciente->lugar_residencia = $lugar_residencia;

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
        $paciente = paciente::find($id);
        $paciente->delete();
        return redirect()->action('PacienteController@index');

    }
}
