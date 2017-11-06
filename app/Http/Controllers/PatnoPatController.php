<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pat_nopat;
use App\antecedentes_pat;
use App\antecedentes_pat_pacientes;
use App\paciente;
use App\opciones_preguntas;

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

        $antecedentes = $opciones::where('pregunta','antecedentes_pat_nopats') -> pluck('opcion');
        $tabaquismo = $opciones::where('pregunta','tabaquismo') -> pluck('opcion');
        $bebidas_frecuencia = $opciones::where('pregunta','bebidas_alcoholicas_frecuencia') -> pluck('opcion');
        $bebidas_cantidad = $opciones::where('pregunta','bebidas_alcoholicas_cantidad') -> pluck('opcion');
        $substancias = $opciones::where('pregunta','substancias') -> pluck('opcion');

        $paciente = paciente::find($id);

        // Mandarle las variables a la vista
        
        return view('pat_nopat.create')->with(  
            compact(
                'antecedentes',
                'tabaquismo',
                'bebidas_frecuencia',
                'bebidas_cantidad',
                'substancias',
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
        // Tabla que guarda la forma de antecedentes patológicos y no patológicos
        
        $pat_nopat = new pat_nopat();

        $antecedentes_pat_pacientes = new antecedentes_pat_pacientes();
        $antecedentes_pat_pacientes->id_paciente = $request->input('id_paciente');
        $antecedentes_pat_pacientes->save();

        $opciones = new opciones_preguntas();
        $antecedentes = $opciones::where('pregunta','antecedentes_pat_nopats')->get();

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

        $problemas = $request->input('problemas');


        // NO GUARDA
        foreach($antecedentes as $antecedente) {
            $antecedentes_pat = new antecedentes_pat();
            
            $antecedentes_pat->id_antecedentes_pat_pacientes = $antecedentes_pat_pacientes->id;
            $antecedentes_pat->id_antecedente = $antecedente->id;

            $opcion = $antecedente->opcion;

            $antecedentes_pat->valor = $request->input($opcion);
            $antecedentes_pat->detalles = $request->input( $opcion . '_detalles' );

            $antecedentes_pat->save();
        }

        $pat_nopat -> id_antecedentes = $antecedentes_pat_pacientes->id;

        //resto de los campos
        $pat_nopat->id_paciente = $request->input('id_paciente');
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

        $pat_nopat->problemas = $problemas;

        $pat_nopat->save();

       

        $paciente = paciente::find($antecedentes_pat_pacientes -> id_paciente  );
        $paciente -> id_pat_nopat = $pat_nopat -> id;
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
        $pat_nopat = pat_nopat::find($id);
        return view('pat_nopat.show', ['pat_nopat' => $pat_nopat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
