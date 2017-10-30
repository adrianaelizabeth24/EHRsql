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
        $famezquizofrenia = $request->input('fam_ezquizofrenia');
        $bipolaridad = $request->input('bipolaridad');
        $fambipolaridad = $request->input('fam_bipolaridad');
        $alcoholismo = $request->input('alcoholismo');
        $famalcoholismo = $request->input('fam_alcoholismo');
        $drogas = $request->input('drogas');
        $famdrogas = $request->input('fam_drogas');
        $depresion = $request->input('depresion');
        $famdepresion = $request->input('fam_depresion');
        $disimia = $request->input('disimia');
        $famdisimia = $request->input('fam_disimia');
        $panico = $request->input('panico');
        $fampanico = $request->input('fam_panico');
        $agorafobia = $request->input('agorafobia');
        $famagorafobia = $request->input('fam_agorafobia');
        $obsesion = $request->input('obsesion');
        $famobsesion = $request->input('fam_obsesion');
        $fobia_social = $request->input('fobia_social');
        $famfobia_social = $request->input('fam_fobia_social');
        $fobia_especifica = $request->input('fobia_especifica');
        $fam_fobia_especifica = $request->input('fam_fobia_especifica');
        $ansiedad = $request->input('Ansiedad');
        $famansiedad = $request->input('fam_Ansiedad');
        $demencia = $request->input('demencia');
        $famdemencia = $request->input('fam_demencia');
        $retraso_mental = $request->input('retraso_mental');
        $famretraso_mental = $request->input('fam_retraso_mental');
        $trastorno_personalidad = $request->input('trastorno_personalidad');
        $famtrastorno_personalidad = $request->input('fam_trastorno_personalidad');


        //guarda los campos del form en el querybuiler
        $historia->id_paciente = $id_paciente;
        $historia->ezquizofrenia = $ezquizofrenia;
        $historia->fam_ezquizofrenia = $famezquizofrenia;
        $historia->bipolar = $bipolaridad;
        $historia->fam_bipolar = $fambipolaridad;
        $historia->alcoholismo = $alcoholismo;
        $historia->fam_alcoholismo = $famalcoholismo;
        $historia->drogas = $drogas;
        $historia->fam_drogas = $famdrogas;
        $historia->depresion = $depresion;
        $historia->fam_depresion = $famdepresion;
        $historia->disimia = $disimia;
        $historia->fam_disimia = $famdisimia;
        $historia->panico = $panico;
        $historia->fam_panico = $fampanico;
        $historia->agorafobia = $agorafobia;
        $historia->fam_agorafobia = $famagorafobia;
        $historia->obsesivo_compulsivo = $obsesion;
        $historia->fam_obsesivo_compulsivo = $famobsesion;
        $historia->fobia_social = $fobia_social;
        $historia->fam_fobia_social = $famfobia_social;
        $historia->fobia_especifica = $fobia_especifica;
        $historia->fam_fobia_especifica = $fam_fobia_especifica;
        $historia->ansiedad = $ansiedad;
        $historia->fam_ansiedad = $famansiedad;
        $historia->demencia = $demencia;
        $historia->fam_demencia = $famdemencia;
        $historia->retraso_mental = $retraso_mental;
        $historia->fam_retraso_mental = $famretraso_mental;
        $historia->transtorno_personalidad = $trastorno_personalidad;
        $historia->fam_transtorno_personalidad = $famtrastorno_personalidad;
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
        $famezquizofrenia = $request->input('fam_ezquizofrenia');
        $bipolaridad = $request->input('bipolaridad');
        $fambipolaridad = $request->input('fam_bipolaridad');
        $alcoholismo = $request->input('alcoholismo');
        $famalcoholismo = $request->input('fam_alcoholismo');
        $drogas = $request->input('drogas');
        $famdrogas = $request->input('fam_drogas');
        $depresion = $request->input('depresion');
        $famdepresion = $request->input('fam_depresion');
        $disimia = $request->input('disimia');
        $famdisimia = $request->input('fam_disimia');
        $panico = $request->input('panico');
        $fampanico = $request->input('fam_panico');
        $agorafobia = $request->input('agorafobia');
        $famagorafobia = $request->input('fam_agorafobia');
        $obsesion = $request->input('obsesion');
        $famobsesion = $request->input('fam_obsesion');
        $fobia_social = $request->input('fobia_social');
        $famfobia_social = $request->input('fam_fobia_social');
        $fobia_especifica = $request->input('fobia_especifica');
        $fam_fobia_especifica = $request->input('fam_fobia_especifica');
        $ansiedad = $request->input('Ansiedad');
        $famansiedad = $request->input('fam_Ansiedad');
        $demencia = $request->input('demencia');
        $famdemencia = $request->input('fam_demencia');
        $retraso_mental = $request->input('retraso_mental');
        $famretraso_mental = $request->input('fam_retraso_mental');
        $trastorno_personalidad = $request->input('trastorno_personalidad');
        $famtrastorno_personalidad = $request->input('fam_trastorno_personalidad');


        //guarda los campos del form en el querybuiler
        $historia->ezquizofrenia = $ezquizofrenia;
        $historia->fam_ezquizofrenia = $famezquizofrenia;
        $historia->bipolar = $bipolaridad;
        $historia->fam_bipolar = $fambipolaridad;
        $historia->alcoholismo = $alcoholismo;
        $historia->fam_alcoholismo = $famalcoholismo;
        $historia->drogas = $drogas;
        $historia->fam_drogas = $famdrogas;
        $historia->depresion = $depresion;
        $historia->fam_depresion = $famdepresion;
        $historia->disimia = $disimia;
        $historia->fam_disimia = $famdisimia;
        $historia->panico = $panico;
        $historia->fam_panico = $fampanico;
        $historia->agorafobia = $agorafobia;
        $historia->fam_agorafobia = $famagorafobia;
        $historia->obsesivo_compulsivo = $obsesion;
        $historia->fam_obsesivo_compulsivo = $famobsesion;
        $historia->fobia_social = $fobia_social;
        $historia->fam_fobia_social = $famfobia_social;
        $historia->fobia_especifica = $fobia_especifica;
        $historia->fam_fobia_especifica = $fam_fobia_especifica;
        $historia->ansiedad = $ansiedad;
        $historia->fam_ansiedad = $famansiedad;
        $historia->demencia = $demencia;
        $historia->fam_demencia = $famdemencia;
        $historia->retraso_mental = $retraso_mental;
        $historia->fam_retraso_mental = $famretraso_mental;
        $historia->transtorno_personalidad = $trastorno_personalidad;
        $historia->fam_transtorno_personalidad = $famtrastorno_personalidad;
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
