<?php

namespace App\Http\Controllers;

use App\historia_clinica_familiar;
use Illuminate\Http\Request;
use App\paciente;
use App\preguntas_patnopat;
use App\historia_clinica_paciente;
use App\historia_clinica_valores;

class HistoriaClinicaFamiliarController extends Controller
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
        return view('historia_clinica_familiar.create', ['paciente' => $paciente, 'preguntas' => $preguntas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $historia_pac = new historia_clinica_paciente();
        $historia_pac->id_paciente = $request->input('id_paciente');
        $historia_pac->save();

        $preguntas = preguntas_patnopat::all();
        foreach ($preguntas as $ques) {
            $valores = new historia_clinica_valores();
            $valores->id_historia_paciente = $historia_pac->id;
            $valores->id_pregunta = $ques->id;
            $valores->valor = $request->input($ques->id);
            $valores->detalles = $request->input($ques->id . '_detalles');
            $valores->save();
        }

        $historia = new historia_clinica_familiar();
        $historia->id_paciente = $historia_pac->id_paciente;
        $historia->id_tabla_valores = $historia_pac->id;
        $historia->save();

        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_clinica_familiar = $historia->id;
        $paciente->save();
        return redirect()->action('HistoriaClinicaFamiliarController@show', $historia->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historia = historia_clinica_familiar::find($id);
        $valores = historia_clinica_valores::where('id_historia_paciente', '=',
            $historia->id_tabla_valores)->get();
        $preguntas = preguntas_patnopat::all();
        $paciente = paciente::find($historia->id_paciente);
        return view('historia_clinica_familiar.show', ['historia' => $historia, 'valores' => $valores,
            'preguntas' => $preguntas, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historia = historia_clinica_familiar::find($id);
        $values = historia_clinica_valores::where('id_historia_paciente', '=', $historia->id_tabla_valores)->get();
        $preguntas = preguntas_patnopat::all();
        $paciente = paciente::find($historia->id_paciente);
        return view('historia_clinica_familiar.edit', ['historia' => $historia,
            'id' => $id, 'valores' => $values, 'preguntas' => $preguntas, 'paciente' => $paciente]);
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
        $historia = historia_clinica_familiar::find($id);
        $tablaValores = historia_clinica_valores::where('id_historia_paciente', '=', $historia->id_tabla_valores)->get();
        $preguntas= preguntas_patnopat::all();
        foreach ($preguntas as $ques) {
            foreach ($tablaValores as $values) {
                if($ques->id == $values->id_pregunta) {
                    $values->valor = $request->input($ques->id);
                    $values->detalles = $request->input($ques->id . '_detalles');
                    $values->save();
                }
            }
        }
        return redirect()->action('HistoriaClinicaFamiliarController@show', $historia->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historia = historia_clinica_familiar::find($id);

        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_clinica_familiar = 0;
        $paciente->save();

        $historia_pac = historia_clinica_paciente::where('id_paciente', '=', $historia->id_paciente)->first();
        $historia_pac->delete();

        $historiaValues = historia_clinica_valores::where('id_historial_paciente', '=', $historia->id_tabla_valores)->get();
        foreach ($historiaValues as $values) {
            $values->delete();
        }

        $historia->delete();


        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
