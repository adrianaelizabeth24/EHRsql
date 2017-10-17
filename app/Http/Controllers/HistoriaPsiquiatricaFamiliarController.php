<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\historia_psiquiatrica_familiar;
use App\paciente;

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
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = paciente::find($id);
        return view('historia_psiquiatrica.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historia = new historia_psiquiatrica_familiar();

        //obitene los campos
        $id_paciente = $request->input('id_paciente');
        $ezquizofrenia = $request->input('ezquizofrenia');
        $bipolaridad = $request->input('bipolaridad');
        $alcoholismo = $request->input('alcoholismo');
        $drogas = $request->input('drogas');
        $depresion = $request->input('depresion');
        $disimia = $request->input('disimia');
        $panico = $request->input('panico');
        $agorafobia = $request->input('agorafobia');
        $obsesion = $request->input('obsesion');
        $fobia_social = $request->input('fobia_social');
        $fobia_especifica = $request->input('fobia_especifica');
        $ansiedad = $request->input('Ansiedad');
        $demencia = $request->input('demencia');
        $retraso_mental = $request->input('retraso_mental');
        $trastorno_personalidad = $request->input('trastorno_personalidad');


        //guarda los campos del form en el querybuiler
        $historia->id_paciente = $id_paciente;
        $historia->ezquizofrenia = $ezquizofrenia;
        $historia->bipolar = $bipolaridad;
        $historia->alcoholismo = $alcoholismo;
        $historia->drogas = $drogas;
        $historia->depresion = $depresion;
        $historia->disimia = $disimia;
        $historia->panico = $panico;
        $historia->agorafobia = $agorafobia;
        $historia->obsesivo_compulsivo = $obsesion;
        $historia->fobia_social = $fobia_social;
        $historia->fobia_especifica = $fobia_especifica;
        $historia->ansiedad = $ansiedad;
        $historia->demencia = $demencia;
        $historia->retraso_mental = $retraso_mental;
        $historia->transtorno_personalidad = $trastorno_personalidad;
        $historia->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_historia_psiquiatrica_fam = $historia->id;
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
        $historia = historia_psiquiatrica_familiar::find($id);
        return view('historia_psiquiatrica.show', ['historia' => $historia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historia = historia_psiquiatrica_familiar::find($id);
        return view('historia_psiquiatrica.edit', ['historia' => $historia, 'id' => $id]);
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
        $historia = historia_psiquiatrica_familiar::find($id);

        //obitene los campos
        $ezquizofrenia = $request->input('ezquizofrenia');
        $bipolaridad = $request->input('bipolaridad');
        $alcoholismo = $request->input('alcoholismo');
        $drogas = $request->input('drogas');
        $depresion = $request->input('depresion');
        $disimia = $request->input('disimia');
        $panico = $request->input('panico');
        $agorafobia = $request->input('agorafobia');
        $obsesion = $request->input('obsesion');
        $fobia_social = $request->input('fobia_social');
        $fobia_especifica = $request->input('fobia_especifica');
        $ansiedad = $request->input('Ansiedad');
        $demencia = $request->input('demencia');
        $retraso_mental = $request->input('retraso_mental');
        $trastorno_personalidad = $request->input('trastorno_personalidad');


        //guarda los campos del form en el querybuiler
        $historia->ezquizofrenia = $ezquizofrenia;
        $historia->bipolar = $bipolaridad;
        $historia->alcoholismo = $alcoholismo;
        $historia->drogas = $drogas;
        $historia->depresion = $depresion;
        $historia->disimia = $disimia;
        $historia->panico = $panico;
        $historia->agorafobia = $agorafobia;
        $historia->obsesivo_compulsivo = $obsesion;
        $historia->fobia_social = $fobia_social;
        $historia->fobia_especifica = $fobia_especifica;
        $historia->ansiedad = $ansiedad;
        $historia->demencia = $demencia;
        $historia->retraso_mental = $retraso_mental;
        $historia->transtorno_personalidad = $trastorno_personalidad;
        $historia->save();

        $paciente = paciente::find($historia->id_paciente);
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
        $historia = historia_psiquiatrica_familiar::find($id);
        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_psiquiatrica_fam = 0;
        $paciente->save();
        $historia->delete();
        return redirect()->action('PacienteController@index');
    }
}
