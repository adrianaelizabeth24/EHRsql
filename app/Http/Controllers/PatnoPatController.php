<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pat_nopat;
use App\antecedentes_pat;
use App\antecedentes_pat_pacientes;
use App\paciente;
use App\preguntas_patnopat;
use App\opciones_preguntas;
use App\substancias;

class PatnoPatController extends Controller
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

        $antecedentes = preguntas_patnopat::all();
        $tabaquismo = $opciones::where('pregunta', 'tabaquismo')->pluck('opcion');
        $alcohol_frecuencia = $opciones::where('pregunta', 'bebidas_alcoholicas_frecuencia')->pluck('opcion');
        $alcohol_cantidad = $opciones::where('pregunta', 'bebidas_alcoholicas_cantidad')->pluck('opcion');
        $substancias = $opciones::where('pregunta', 'substancias')->pluck('opcion');

        $paciente = paciente::find($id);

        // Mandarle las variables a la vista

        return view('pat_nopat.create', ['antecedentes' => $antecedentes, 'tabaquismo' => $tabaquismo,
            'alcohol_frecuencia' => $alcohol_frecuencia, 'alcohol_cantidad' => $alcohol_cantidad,
            'substancias' => $substancias, 'paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Tabla que guarda la forma de antecedentes patológicos y no patológicos
        //creas un nuevo registro pat no pat (el que tiene toda la info)
        $pat_nopat = new pat_nopat();

        $id_paciente = $request->input('id_paciente');

        $otro = $request->input('otro');

        $antecedentes_detalles = implode(",",$_POST["antecedentes_detalles"]);
        $antecedentes = implode(",",$_POST["antecedentes"]);

        // obtener datos de los campos
        $antecedentes_notas = $request->input('antecedentes_notas');
        $tazasCafé = $request->input('tazasCafé');
        $tabaquismo = $request->input('tabaquismo');
        $consumoDiario = $request->input('consumoDiario');
        $añosTabaquismo = $request->input('añosTabaquismo');
        $edadInicio = $request->input('edadInicio');
        $edadSuspendió = $request->input('edadSuspendió');
        $alcohol_frecuencia = $request->input('alcohol_frecuencia');
        $alcohol_cantidad = $request->input('alcohol_cantidad');
        $dejarTomar = $request->input('dejarTomar');
        $formaTomar = $request->input('formaTomar');
        $tomarMañana = $request->input('tomarMañana');


        $abuso_actAnt = implode(",",$_POST["abuso_actAnt"]);
        $dep_actAnt = implode(",",$_POST["dep_actAnt"]);

        $problemas = $request->input('problemas');

        //resto de los campos
        $pat_nopat->id_paciente = $request->input('id_paciente');

        $pat_nopat->antecedentes_detalles = $antecedentes_detalles;
        $pat_nopat->antecedentes = $antecedentes;
        $pat_nopat->otro = $otro;

        $pat_nopat->antecedentes_notas = $antecedentes_notas;
        $pat_nopat->tazasCafé = $tazasCafé;
        $pat_nopat->tabaquismo = $tabaquismo;
        $pat_nopat->consumoDiario = $consumoDiario;
        $pat_nopat->añosTabaquismo = $añosTabaquismo;
        $pat_nopat->edadInicio = $edadInicio;
        $pat_nopat->edadSuspendió = $edadSuspendió;
        $pat_nopat->alcohol_frecuencia = $alcohol_frecuencia;
        $pat_nopat->alcohol_cantidad = $alcohol_cantidad;
        $pat_nopat->dejarTomar = $dejarTomar;
        $pat_nopat->formaTomar = $formaTomar;
        $pat_nopat->tomarMañana = $tomarMañana;

        $pat_nopat->abuso_actAnt = $abuso_actAnt;
        $pat_nopat->dep_actAnt = $dep_actAnt;

        $pat_nopat->problemas = $problemas;
        $pat_nopat->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_pat_nopat = $pat_nopat->id;
        $paciente->save();


        return redirect()->action('PatnoPatController@show', $pat_nopat->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pat_nopat = pat_nopat::find($id);
        $antecedentes = preguntas_patnopat::all();

        $paciente = paciente::find($pat_nopat->id_paciente);

        $opciones = new opciones_preguntas();
        $substancias = $opciones::where('pregunta', 'substancias')->pluck('opcion');

        return view('pat_nopat.show', ['pat_nopat' => $pat_nopat, 'antecedentes' => $antecedentes, 'substancias' => $substancias, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opciones = new opciones_preguntas();

        // Crear variables para las opciones de las preguntas correspondientes

        $antecedentes = preguntas_patnopat::all();
        $tabaquismo = $opciones::where('pregunta', 'tabaquismo')->pluck('opcion');
        $alcohol_frecuencia = $opciones::where('pregunta', 'bebidas_alcoholicas_frecuencia')->pluck('opcion');
        $alcohol_cantidad = $opciones::where('pregunta', 'bebidas_alcoholicas_cantidad')->pluck('opcion');
        $substancias = $opciones::where('pregunta', 'substancias')->pluck('opcion');

        $pat_nopat = pat_nopat::find($id);
        $paciente = paciente::find($pat_nopat->id_paciente);

        // Mandarle las variables a la vista

        return view('pat_nopat.edit')->with(  
            compact(
                'antecedentes',
                'tabaquismo',
                'alcohol_frecuencia',
                'alcohol_cantidad',
                'substancias',
                'paciente',
                'pat_nopat',
                'id'
                ))  ;
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
        // Tabla que guarda la forma de antecedentes patológicos y no patológicos
        //creas un nuevo registro pat no pat (el que tiene toda la info)
        $pat_nopat = pat_nopat::find($id);

        $id_paciente = $request->input('id_paciente');


        $otro = $request->input('otro');

        $antecedentes_detalles = implode(",",$_POST["antecedentes_detalles"]);
        $antecedentes = implode(",",$_POST["antecedentes"]);


        // obtener datos de los campos
        $antecedentes_notas = $request->input('antecedentes_notas');
        $tazasCafé = $request->input('tazasCafé');
        $tabaquismo = $request->input('tabaquismo');
        $consumoDiario = $request->input('consumoDiario');
        $añosTabaquismo = $request->input('añosTabaquismo');
        $edadInicio = $request->input('edadInicio');
        $edadSuspendió = $request->input('edadSuspendió');
        $alcohol_frecuencia = $request->input('alcohol_frecuencia');
        $alcohol_cantidad = $request->input('alcohol_cantidad');
        $dejarTomar = $request->input('dejarTomar');
        $formaTomar = $request->input('formaTomar');
        $tomarMañana = $request->input('tomarMañana');


        $abuso_actAnt = implode(",",$_POST["abuso_actAnt"]);
        $dep_actAnt = implode(",",$_POST["dep_actAnt"]);

        $problemas = $request->input('problemas');

        //resto de los campos
        $pat_nopat->id_paciente = $request->input('id_paciente');

        $pat_nopat->antecedentes_detalles = $antecedentes_detalles;
        $pat_nopat->antecedentes = $antecedentes;

        $pat_nopat->otro = $otro;

        $pat_nopat->antecedentes_notas = $antecedentes_notas;
        $pat_nopat->tazasCafé = $tazasCafé;
        $pat_nopat->tabaquismo = $tabaquismo;
        $pat_nopat->consumoDiario = $consumoDiario;
        $pat_nopat->añosTabaquismo = $añosTabaquismo;
        $pat_nopat->edadInicio = $edadInicio;
        $pat_nopat->edadSuspendió = $edadSuspendió;
        $pat_nopat->alcohol_frecuencia = $alcohol_frecuencia;
        $pat_nopat->alcohol_cantidad = $alcohol_cantidad;
        $pat_nopat->dejarTomar = $dejarTomar;
        $pat_nopat->formaTomar = $formaTomar;
        $pat_nopat->tomarMañana = $tomarMañana;

        $pat_nopat->abuso_actAnt = $abuso_actAnt;
        $pat_nopat->dep_actAnt = $dep_actAnt;

        $pat_nopat->problemas = $problemas;
        $pat_nopat->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_pat_nopat = $pat_nopat->id;
        $paciente->save();


        return redirect()->action('PatnoPatController@show', $pat_nopat->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patnopat = pat_nopat::find($id);

        $paciente = paciente::find($patnopat->id_paciente);
        $paciente->id_pat_nopat = 0;
        $paciente->save();

        $patnopat->delete();

        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
