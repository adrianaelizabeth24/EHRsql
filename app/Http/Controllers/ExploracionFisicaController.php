<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exploracion_fisica;
use App\exploracion_fisica_values;
use App\opciones_exploracion_fisica;
use App\paciente;

class ExploracionFisicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = paciente::find($id);
        $preguntas = opciones_exploracion_fisica::all();
        return view('exploracion_fisica.create', ['paciente' => $paciente, 'preguntas' => $preguntas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examen_exploracion_fisica = new exploracion_fisica();
        $examen_exploracion_fisica->id_paciente = $request->input('id_paciente');
        $examen_exploracion_fisica->save();

        $preguntas = opciones_exploracion_fisica::all();
        foreach ($preguntas as $pregunta){
            $valor = new exploracion_fisica_values();
            $valor->id_exploracion_fisica = $examen_exploracion_fisica->id;
            $valor->id_opciones = $pregunta->id;
            $valor->valor = $request->input($pregunta->id);
            $valor->detalles = $request->input($pregunta->id .'_detalles');
            $valor->save();
        }
        $paciente = paciente::find($examen_exploracion_fisica->id_paciente);
        $paciente->id_exploracion_fisica = $examen_exploracion_fisica->id;
        $paciente->save();
        return redirect()->action('ExploracionFisicaController@show', $examen_exploracion_fisica->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exploracion_fisica = exploracion_fisica::find($id);
        $values = exploracion_fisica_values::where('id_exploracion_fisica', '=', $exploracion_fisica->id)->get();
        $preguntas = opciones_exploracion_fisica::all();
        $paciente = paciente::find($exploracion_fisica->id_paciente);
        return view('exploracion_fisica.show', ['examen' => $exploracion_fisica,
            'valores' => $values, 'preguntas' => $preguntas, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exploracion_fisica = exploracion_fisica::find($id);
        $values = exploracion_fisica_values::where('id_exploracion_fisica', '=', $exploracion_fisica->id)->get();
        $preguntas = opciones_exploracion_fisica::all();
        $paciente = paciente::find($exploracion_fisica->id_paciente);
        return view('exploracion_fisica.edit', ['examen' => $exploracion_fisica,
            'valores' => $values, 'preguntas' => $preguntas, 'id' => $id, 'paciente' => $paciente]);

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
        $examen_exploracion_fisica = exploracion_fisica::find($id);
        $preguntas = opciones_exploracion_fisica::all();
        $values = exploracion_fisica_values::where('id_exploracion_fisica', '=', $examen_exploracion_fisica->id)->get();

        foreach ($preguntas as $pregunta){
            foreach ($values as $valor){
                if($valor->id_opciones == $pregunta->id) {
                    $valor->valor = $request->input($pregunta->id);
                    $valor->detalles = $request->input($pregunta->id .'_detalles');
                    $valor->save();
                }
            }
        }
        return redirect()->action('ExploracionFisicaController@show', $examen_exploracion_fisica->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exploracion_fisica = exploracion_fisica::find($id);
        $paciente = paciente::find($exploracion_fisica->id_paciente);
        $paciente->id_exploracion_fisica = 0;
        $paciente->save();

        $valores = exploracion_fisica_values::where('id_exploracion_fisica', '=', $exploracion_fisica->id)->get();
        foreach ($valores as $valor){
            $valor->delete();
        }

        $exploracion_fisica->delete();

        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
