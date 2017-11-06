<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;
use App\nota_clinica;
use App\nota_clinica_helper;

class NotaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newNoteBlock($id){
        $nota_clinica_helper = new nota_clinica_helper();
        $nota_clinica_helper->id_paciente = $id;
        $nota_clinica_helper->save();

        $paciente = paciente::find($id);
        $paciente->id_nota_clinica = $nota_clinica_helper->id;
        $paciente->save();

        $notas = nota_clinica::where('id_nota_clinica_helper','=',$nota_clinica_helper->id)->get();
        return view('nota_clinica.index', ['notas' => $notas, 'helper' => $nota_clinica_helper->id, 'id' => $id]);
    }

    public function index($id)
    {
        $nota_clinica_helper = nota_clinica_helper::where('id_paciente', '=' , $id)->first();
        $nota_clinica = nota_clinica::where('id_nota_clinica_helper','=',$nota_clinica_helper->id)->get();
        return view('nota_clinica.index', ['notas' => $nota_clinica, 'helper' => $nota_clinica_helper->id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        return view('nota_clinica.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new nota_clinica();
        $nota->id_nota_clinica_helper = $request->input('id_nota_clinica_helper');
        $nota->no_de_sesion = $request->input('no_de_sesion');
        $nota->edad = $request->input('edad');
        $nota->fecha = $request->input('fecha');
        $nota->horario_consulta = $request->input('horario_consulta');
        $nota->modalidad_terapeutica = $request->input('modalidad_terapeutica');
        $nota->comentarios = $request->input('comentarios');
        $nota->diagnostico = $request->input('diagnostico');
        $nota->planes_tratamiento = $request->input('planes_tratamiento');
        $nota->save();

        $nota_clinica = nota_clinica::where('id_nota_clinica_helper','=',$nota->id_nota_clinica_helper)->get();
        return view('nota_clinica.index', ['notas' => $nota_clinica, 'helper' => $nota->id_nota_clinica_helper]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = nota_clinica::find($id);
        $nota_clinica_helper = nota_clinica_helper::find($nota->id_nota_clinica_helper);
        $id_paciente = $nota_clinica_helper->id_paciente;
        return view('nota_clinica.show', ['nota' => $nota, 'id_paciente' => $id_paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = nota_clinica::find($id);
        $nota_clinica_helper = nota_clinica_helper::find($nota->id_nota_clinica_helper);
        $id_paciente = $nota_clinica_helper->id_paciente;
        return view('nota_clinica.edit', ['nota' => $nota, 'id' => $id]);
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
        $nota = nota_clinica::find($id);

        $nota->no_de_sesion = $request->input('no_de_sesion');
        $nota->edad = $request->input('edad');
        $nota->fecha = $request->input('fecha');
        $nota->horario_consulta = $request->input('horario_consulta');
        $nota->modalidad_terapeutica = $request->input('modalidad_terapeutica');
        $nota->comentarios = $request->input('comentarios');
        $nota->diagnostico = $request->input('diagnostico');
        $nota->planes_tratamiento = $request->input('planes_tratamiento');
        $nota->save();

        $nota_clinica = nota_clinica::where('id_nota_clinica_helper','=',$nota->id_nota_clinica_helper)->get();
        return view('nota_clinica.index', ['notas' => $nota_clinica, 'helper' => $nota->id_nota_clinica_helper]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nota = nota_clinica::find($id);
        $nota->delete();

        return redirect()->action('PacienteController@index');

    }
}
