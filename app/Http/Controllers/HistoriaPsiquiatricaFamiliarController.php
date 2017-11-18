<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\historia_psiquiatrica_familiar;
use App\paciente;
use App\trastorno_historia_psiquiatrica_fam;
use App\trastorno_historia_psiquiatrica_fam_values;
use App\trastorno_mental;

class HistoriaPsiquiatricaFamiliarController extends Controller
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
     */
    public function create($id)
    {
        $paciente = paciente::find($id);
        $trastorno = trastorno_mental::all();
        return view('historia_psiquiatrica.create', ['paciente' => $paciente, 'trastorno' => $trastorno]);
    }

    /**
     * Store a newly created resource in storage.
     *     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historia = new trastorno_historia_psiquiatrica_fam();
        $historia->id_paciente = $request->input('id_paciente');
        $historia->save();

        $trastronos = trastorno_mental::all();
        foreach ($trastronos as $tras) {
            $valores = new trastorno_historia_psiquiatrica_fam_values();
            $valores->id_trastorno_historia_psiquiatrica_fam = $historia->id;
            $valores->id_trastorno = $tras->id;
            $valores->valor = $request->input($tras->id);
            $valores->fam_trastorno = $request->input('fam_' . $tras->id);
            $valores->save();
        }

        $historiaPsiquiatricaFam = new historia_psiquiatrica_familiar();
        $historiaPsiquiatricaFam->id_paciente = $historia->id_paciente;
        $historiaPsiquiatricaFam->id_tabla_trastorno = $historia->id;
        $historiaPsiquiatricaFam->save();

        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_psiquiatrica_fam = $historiaPsiquiatricaFam->id;
        $paciente->save();
        return redirect()->action('PacienteController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historia = historia_psiquiatrica_familiar::find($id);
        $values = trastorno_historia_psiquiatrica_fam_values::where('id_trastorno_historia_psiquiatrica_fam', '=',
            $historia->id_tabla_trastorno)->get();
        $trastorno = trastorno_mental::all();
        return view('historia_psiquiatrica.show', ['historia' => $historia, 'trastorno' =>
            $trastorno, 'valores' => $values]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historia = historia_psiquiatrica_familiar::find($id);
        $values = trastorno_historia_psiquiatrica_fam_values::where('id_trastorno_historia_psiquiatrica_fam', '=', $historia->id_tabla_trastorno)->get();
        $trastorno = trastorno_mental::all();
        return view('historia_psiquiatrica.edit', ['historia' => $historia, 'id' => $id, 'trastorno' => $trastorno, 'valores' => $values]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $historia = historia_psiquiatrica_familiar::find($id);
        $tablaValores = trastorno_historia_psiquiatrica_fam_values::where('id_trastorno_historia_psiquiatrica_fam', '=', $historia->id_tabla_trastorno)->get();
        $trastronos = trastorno_mental::all();
        foreach ($trastronos as $tras) {
            foreach ($tablaValores as $values) {
                if($values->id_trastorno == $tras->id) {
                    $values->valor = $request->input($tras->id);
                    $values->fam_trastorno = $request->input('fam_' . $tras->id);
                    $values->save();
                }
            }
        }
        $paciente = paciente::find($historia->id_paciente);
        return view('paciente.show', ['paciente' => $paciente]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historia = historia_psiquiatrica_familiar::find($id);
        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_psiquiatrica_fam = 0;
        $paciente->save();

        $historiaTrastornoPaciente = trastorno_historia_psiquiatrica_fam::where('id_paciente', '=', $historia->id_paciente)->first();
        $historiaTrastornoPaciente->delete();

        $historiaValues = trastorno_historia_psiquiatrica_fam_values::where('id_trastorno_historia_psiquiatrica_fam', '=', $historia->id_tabla_trastorno)->get();
        foreach ($historiaValues as $values) {
            $values->delete();
        }

        $historia->delete();

        return redirect()->action('PacienteController@index');
    }
}
