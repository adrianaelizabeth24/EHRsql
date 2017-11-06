<?php

namespace App\Http\Controllers;

use App\historia_clinica_familiar;
use Illuminate\Http\Request;
use App\paciente;

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
        return view('historia_clinica_familiar.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historia_fam = new historia_clinica_familiar();

        $historia_fam->id_paciente = $request->input('id_paciente');
        $historia_fam->snc = $request->input('snc');
        $historia_fam->trastornos_convulsivos = $request->input('trastornos_convulsivos');
        $historia_fam->respiratorias = $request->input('respiratorias');
        $historia_fam->cardiovasculares = $request->input('cardiovasculares');
        $historia_fam->hematopoyeticas_linfaticas = $request->input('hematopoyeticas_linfaticas');
        $historia_fam->ojos_oidos_nariz_garganta = $request->input('ojos_oidos_nariz_garganta');
        $historia_fam->hepaticas = $request->input('hepaticas');
        $historia_fam->dermatologicas_tejido_conectivo = $request->input('dermatologicas_tejido_conectivo');
        $historia_fam->musculo_esqueleticas = $request->input('musculo_esqueleticas');
        $historia_fam->endocrinas_metabolicas = $request->input('endocrinas_metabolicas');
        $historia_fam->gastro = $request->input('gastro');
        $historia_fam->renales_genitourinarias = $request->input('renales_genitourinarias');
        $historia_fam->cancer = $request->input('cancer');
        $historia_fam->alergias = $request->input('alergias');
        $historia_fam->cirujia_mayor = $request->input('cirujia_mayor');
        $historia_fam->cirujia_programada = $request->input('cirujia_programada');

        $historia_fam->save();

        $id_paciente = $request->input('id_paciente');
        $paciente = paciente::find($id_paciente);
        $paciente->id_historia_clinica_familiar = $historia_fam->id;
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
        $historia_fam = historia_clinica_familiar::find($id);
        return view('historia_clinica_familiar.show', ['historia_fam' => $historia_fam]);
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
        return view('historia_clinica_familiar.edit', ['historia' => $historia, 'id' => $id]);
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
        $historia_fam = historia_clinica_familiar::find($id);

        $historia_fam->snc = $request->input('snc');
        $historia_fam->trastornos_convulsivos = $request->input('trastornos_convulsivos');
        $historia_fam->respiratorias = $request->input('respiratorias');
        $historia_fam->cardiovasculares = $request->input('cardiovasculares');
        $historia_fam->hematopoyeticas_linfaticas = $request->input('hematopoyeticas_linfaticas');
        $historia_fam->ojos_oidos_nariz_garganta = $request->input('ojos_oidos_nariz_garganta');
        $historia_fam->hepaticas = $request->input('hepaticas');
        $historia_fam->dermatologicas_tejido_conectivo = $request->input('dermatologicas_tejido_conectivo');
        $historia_fam->musculo_esqueleticas = $request->input('musculo_esqueleticas');
        $historia_fam->endocrinas_metabolicas = $request->input('endocrinas_metabolicas');
        $historia_fam->gastro = $request->input('gastro');
        $historia_fam->renales_genitourinarias = $request->input('renales_genitourinarias');
        $historia_fam->cancer = $request->input('cancer');
        $historia_fam->alergias = $request->input('alergias');
        $historia_fam->cirujia_mayor = $request->input('cirujia_mayor');
        $historia_fam->cirujia_programada = $request->input('cirujia_programada');

        $historia_fam->save();

        $paciente = paciente::find($historia_fam->id_paciente);
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
        $historia = historia_clinica_familiar::find($id);
        $paciente = paciente::find($historia->id_paciente);
        $paciente->id_historia_clinica_familiar = 0;
        $paciente->save();
        $historia->delete();
        return redirect()->action('PacienteController@index');
    }
}
