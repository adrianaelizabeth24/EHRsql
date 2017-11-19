<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\abuso_de_substancias;
use App\substancia_abusada;
use App\paciente;
use App\substancias;

class AbusoDeSubstanciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = paciente::find($id);
        $substancias = substancias::all();
        return view('abuso_de_substancias.create', ['paciente' => $paciente, 'substancias' => $substancias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abuso_de_substancias = new abuso_de_substancias();
        $abuso_de_substancias->id_paciente = $request->input('id_paciente');
        $abuso_de_substancias->save();

        $substancias = substancias::all();

        foreach($substancias as $susbtancia) {
                $substancia_abusada = new substancia_abusada();
                $substancia_abusada->id_abuso_de_substancias = $abuso_de_substancias->id;
                $substancia_abusada->id_substancia = $susbtancia->id;
                $substancia_abusada->valor = $request->input($susbtancia->id);
                $substancia_abusada->save();
        }
        $paciente = paciente::find($abuso_de_substancias->id_paciente);
        $paciente->id_abuso_de_substancias = $abuso_de_substancias->id;
        $paciente->save();

        return redirect()->action('AbusoDeSubstanciasController@show',$abuso_de_substancias->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abuso_de_substancias = abuso_de_substancias::find($id);
        $paciente = paciente::find($abuso_de_substancias->id_paciente);
        $substancia_abusada = substancia_abusada::where('id_abuso_de_substancias','=',$id)->get();
        $substancias = substancias::all();
        return view('abuso_de_substancias.show', ['abuso_de_substancias' => $abuso_de_substancias,
            'substancia_abusada' => $substancia_abusada, 'substancias' => $substancias, 'paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abuso_de_substancias = abuso_de_substancias::find($id);
        $paciente = paciente::find($abuso_de_substancias->id_paciente);
        $substancia_abusada = substancia_abusada::where('id_abuso_de_substancias','=',$id)->get();
        $substancias = substancias::all();
        return view('abuso_de_substancias.edit', ['abuso_de_substancias' => $abuso_de_substancias,
            'substancia_abusada' => $substancia_abusada, 'substancia' => $substancias, 'id' => $id, 'paciente' => $paciente]);
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
        $substancias_abusadas = substancia_abusada::where('id_abuso_de_substancias', '=', $id)->get();
        $substancias = substancias::all();
        foreach($substancias as $susbtancia) {
            foreach ($substancias_abusadas as $subs_abusada) {
                if($susbtancia->id == $subs_abusada->id_substancia) {
                    $subs_abusada->valor = $request->input($susbtancia->id);
                    $subs_abusada->save();
                }
            }
        }

        return redirect()->action('AbusoDeSubstanciasController@show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abuso_de_substancias = abuso_de_substancias::find($id);
        $paciente = paciente::find($abuso_de_substancias->id_paciente);
        $paciente->id_abuso_de_substancias = 0;
        $paciente->save();
        $substancias_abusadas = substancia_abusada::where('id_abuso_de_substancias', '=', $id)->get();
        foreach ($substancias_abusadas as $subs){
            $subs->delete();
        }
        $abuso_de_substancias->delete();
        return redirect()->action('PacienteController@show', $paciente->id);
    }
}
