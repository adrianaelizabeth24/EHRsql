<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peea;
use App\paciente;
use App\opciones_preguntas;

class PeeaController extends Controller
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
        $opciones = new opciones_preguntas();

        // Crear variables para las opciones de las preguntas correspondientes

        $ep_actual = $opciones::where('pregunta','ep_actual') -> pluck('opcion');
        $inicio_sintomas = $opciones::where('pregunta','inicio_sintomas') -> pluck('opcion');
        $tratamiento = $opciones::where('pregunta','tratamiento') -> pluck('opcion');

        $paciente = paciente::find($id);

        // Mandarle las variables a la vista
        return view('peea.create')->with(  
            compact(
                'ep_actual',
                'inicio_sintomas',
                'tratamiento',
                'paciente'
                ))  ;
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
        $datos_peea = new peea();

        //obitene los campos
        $id_paciente = $request->input('id_paciente');
        $ep_actual = $request->input('ep_actual');
        $epPrevios = $request->input('epPrevios');
        $edadIni = $request->input('edadIni');
        $inicio_sintomas = $request->input('inicio_sintomas');
        $inicioEpisodio = $request->input('inicioEpisodio');

        $tratamiento = implode(",",$_POST["tratamiento"]);

        $psicofármacos = $request->input('psicofármacos');

        //guarda los campos del form en el querybuiler
        $datos_peea->id_paciente = $id_paciente;
        $datos_peea->ep_actual = $ep_actual;
        $datos_peea->epPrevios = $epPrevios;
        $datos_peea->edadIni = $edadIni;
        $datos_peea->inicio_sintomas = $inicio_sintomas;
        $datos_peea->inicioEpisodio = $inicioEpisodio;
        $datos_peea->tratamiento = $tratamiento;
        $datos_peea->psicofármacos = $psicofármacos;
        $datos_peea->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_peea = $datos_peea->id;
        $paciente->save();
        return redirect()->action('PeeaController@show', $datos_peea->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peea = peea::find($id);
        $paciente = paciente::find($peea->id_paciente);
        return view('peea.show', ['peea' => $peea, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opciones = new opciones_preguntas();

        // Crear variables para las opciones de las preguntas correspondientes

        $ep_actual = $opciones::where('pregunta','ep_actual') -> pluck('opcion');
        $inicio_sintomas = $opciones::where('pregunta','inicio_sintomas') -> pluck('opcion');
        $tratamiento = $opciones::where('pregunta','tratamiento') -> pluck('opcion');

        $peea = peea::find($id);
        $paciente = paciente::find($peea->id_paciente);

        // Mandarle las variables a la vista
        return view('peea.edit')->with(  
            compact(
                'ep_actual',
                'inicio_sintomas',
                'tratamiento',
                'paciente',
                'peea',
                'id'
                ))  ;
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
        $datos_peea = peea::find($id);

        $ep_actual = $request->input('ep_actual');
        $epPrevios = $request->input('epPrevios');
        $edadIni = $request->input('edadIni');
        $inicio_sintomas = $request->input('inicio_sintomas');
        $inicioEpisodio = $request->input('inicioEpisodio');

        $tratamiento = implode(",",$_POST["tratamiento"]);

        $psicofármacos = $request->input('psicofármacos');

        //guarda los campos del form en el querybuiler
        $datos_peea->ep_actual = $ep_actual;
        $datos_peea->epPrevios = $epPrevios;
        $datos_peea->edadIni = $edadIni;
        $datos_peea->inicio_sintomas = $inicio_sintomas;
        $datos_peea->inicioEpisodio = $inicioEpisodio;
        $datos_peea->tratamiento = $tratamiento;
        $datos_peea->psicofármacos = $psicofármacos;
        $datos_peea->save();

        return redirect()->action('PeeaController@show', $datos_peea->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peea = peea::find($id);
        $paciente = paciente::find($peea->id_paciente);
        $paciente->id_peea = 0;
        $paciente->save();
        $peea->delete();
        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
