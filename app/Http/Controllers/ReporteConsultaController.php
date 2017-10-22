<?php

namespace App\Http\Controllers;

use App\reporte_consulta;
use Illuminate\Http\Request;
use App\paciente;


class ReporteConsultaController extends Controller
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
        return view('reporte_consulta.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reporte = new reporte_consulta();

        //obitene los campos
        $id_paciente = $request->input('id_paciente');
        $fecha = $request->input('fecha');
        $interrogatorio = $request->input('interrogatorio');
        $motivo = $request->input('motivo');
        $episodio = $request->input('episodio');
        $numero_de_episodios = $request->input('numero_de_episodios');
        $edad_primer_episodio = $request->input('edad_primer_episodio');
        $fecha_ultimo_episodio = $request->input('fecha_ultimo_episodio');
        $tratamiento_actual = $request->input('tratamiento_actual');
        $tratamiento_anterior = $request->input('tratamiento_anterior');

        //guarda los campos del form en el querybuiler
        $reporte->id_paciente = $id_paciente;
        $reporte->fecha = $fecha;
        $reporte->interrogatorio = $interrogatorio;
        $reporte->motivo = $motivo;
        $reporte->episodio = $episodio;
        $reporte->numero_de_episodios = $numero_de_episodios;
        $reporte->edad_primer_episodio = $edad_primer_episodio;
        $reporte->fecha_ultimo_episodio = $fecha_ultimo_episodio;
        $reporte->tratamiento_actual = $tratamiento_actual;
        $reporte->tratamiento_anterior = $tratamiento_anterior;
        $reporte->save();

        $paciente = paciente::find($id_paciente);
        $paciente->id_reporte_consulta = $reporte->id;
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
        $reporte = reporte_consulta::find($id);
        return view('reporte_consulta.show', ['reporte' => $reporte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporte = reporte_consulta::find($id);
        return view('reporte_consulta.edit', ['reporte' => $reporte, 'id' => $id]);
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
        $reporte = reporte_consulta::find($id);

        //obitene los campos
        $fecha = $request->input('fecha');
        $interrogatorio = $request->input('interrogatorio');
        $motivo = $request->input('motivo');
        $episodio = $request->input('episodio');
        $numero_de_episodios = $request->input('numero_de_episodios');
        $edad_primer_episodio = $request->input('edad_primer_episodio');
        $fecha_ultimo_episodio = $request->input('fecha_ultimo_episodio');
        $tratamiento_actual = $request->input('tratamiento_actual');
        $tratamiento_anterior = $request->input('tratamiento_anterior');

        //guarda los campos del form en el querybuiler
        $reporte->fecha = $fecha;
        $reporte->interrogatorio = $interrogatorio;
        $reporte->motivo = $motivo;
        $reporte->episodio = $episodio;
        $reporte->numero_de_episodios = $numero_de_episodios;
        $reporte->edad_primer_episodio = $edad_primer_episodio;
        $reporte->fecha_ultimo_episodio = $fecha_ultimo_episodio;
        $reporte->tratamiento_actual = $tratamiento_actual;
        $reporte->tratamiento_anterior = $tratamiento_anterior;
        $reporte->save();

        $paciente = paciente::find($reporte->id_paciente);
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

        $reporte = reporte_consulta::find($id);
        $paciente = paciente::find($reporte->id_paciente);
        $paciente->id_reporte_consulta = 0;
        $paciente->save();
        $reporte->delete();
        return redirect()->action('PacienteController@index');
    }
}
