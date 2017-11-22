<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;
use App\abuso_de_substancias;
use App\antecedentes_ginecobstetricos;
use App\antecedentes_pat;
use App\antecedentes_pat_pacientes;
use App\diagnostico;
use App\estado_civil;
use App\examen_mental;
use App\exploracion_fisica;
use App\exploracion_fisica_values;
use App\historia_clinica_familiar;
use App\historia_clinica_paciente;
use App\historia_clinica_valores;
use App\historia_psiquiatrica_familiar;
use App\historia_psiquiatrica_previa;
use App\lugar_residencia;
use App\nota_clinica;
use App\nota_clinica_helper;
use App\opciones_exploracion_fisica;
use App\opciones_ginecobstetricos_antecedentes_obstetricos;
use App\opciones_ginecobstetricos_anticonceptivos;
use App\opciones_ginecobstetricos_ritmo;
use App\opciones_ginecobstetricos_tension_premenstrual;
use App\opciones_historia_clinica;
use App\opciones_preguntas;
use App\pat_nopat;
use App\peea;
use App\plan_tratamiento;
use App\preguntas_patnopat;
use App\substancia_abusada;
use App\substancias;
use App\sustento_familiar;
use App\trastorno_historia_psiquiatrica_fam_values;
use App\trastorno_historia_psiquiatrica_previa_values;
use App\trastorno_mental;

class ShowAllController extends Controller
{

    public function show($id)
    {
        $paciente_info = paciente::find($id);

        //substancias

        $abuso_de_substancias = abuso_de_substancias::find($paciente_info->id_abuso_de_substancias);
            $substancia_paciente = substancia_abusada::where('id_abuso_de_substancias', '=', $abuso_de_substancias->id)->get();

        $susbstancias = substancias::all();

        //diagnostico
        $diagnostico_paciente = diagnostico::find($paciente_info->id_diagnostico);

        //exploracion fisica
        $preguntas_exploracion_fisica = opciones_exploracion_fisica::all();
        $exploracion_fisica = exploracion_fisica::find($paciente_info->id_exploracion_fisica);
           $exploracion_fisica_paciente = exploracion_fisica_values::where('id_exploracion_fisica', '=', $exploracion_fisica->id)->get();


        //historia clinica familiar
        $preguntas_historia_clinica = preguntas_patnopat::all();
        $historia_clinica_familiar = historia_clinica_familiar::find($paciente_info->id_historia_clinica_familiar);
           $historia_clinica_pacientes_value = historia_clinica_valores::where('id_historia_paciente', '=', $historia_clinica_familiar->id_tabla_valores)->get();

        //plan de tratamiento
        $plan_tratamiento = plan_tratamiento::find($paciente_info->id_plan_tratamiento);

        //antecedentes ginecobstetricos
        $opciones_antecedentes = opciones_ginecobstetricos_antecedentes_obstetricos::all();
        $tension_premenstrual = opciones_ginecobstetricos_tension_premenstrual::all();
        $anticonceptivos = opciones_ginecobstetricos_anticonceptivos::all();
        $ritmo = opciones_ginecobstetricos_ritmo::all();
        $antecedentes_ginecobstetricos = antecedentes_ginecobstetricos::find($paciente_info->id_antecedentes_ginecobstetricos);

        //examen_mental
        $examen_mental = examen_mental::find($paciente_info->id_examen_mental);

        //antecedentes pat y no pat
        $opciones_patnopat = preguntas_patnopat::all();
        $opciones_preguntas = opciones_preguntas::where('id', '>', 100);
        $pat_nopat = pat_nopat::find($paciente_info->id_pat_nopat);
        $pat_pacientes = antecedentes_pat_pacientes::find($pat_nopat->id_antecedentes);
        $pat_valores = antecedentes_pat::where('id_antecedentes_pat_pacientes','=',$pat_pacientes->id)->get();

        //historia_familiar
        $historia_familiar = historia_psiquiatrica_familiar::find($paciente_info->id_historia_psiquiatrica_fam);

        $historia_familiar_values = trastorno_historia_psiquiatrica_fam_values::where('id_trastorno_historia_psiquiatrica_fam', '=', $historia_familiar->id_tabla_trastorno)->get();

        //historia previa
        $historia_previa = historia_psiquiatrica_previa::find($id);
        $historia_previa_values = trastorno_historia_psiquiatrica_previa_values::where('id_trastorno_historia_psiquiatrica_previa',
            '=', $historia_previa->id_trastorno_tabla)->get();

        //peea
        $peea = peea::find($paciente_info->id_peea);

        //nota clinica
        $nota_clinica_helper = nota_clinica_helper::where('id_paciente', '=' , $paciente_info->id_nota_clinica)->first();
        $nota_clinica = nota_clinica::where('id_nota_clinica_helper','=',$nota_clinica_helper->id)->get();


        //info
        $estado_civil = estado_civil::all();
        $lugar_residencia = lugar_residencia::all();
        $sustento = sustento_familiar::all();
        $trastorno = trastorno_mental::all();


        return view('showall.show', ['paciente' => $paciente_info, 'substancias' => $susbstancias,
            'substancias_paciente' => $substancia_paciente, 'diagnostico' => $diagnostico_paciente,
            'preguntas_exploracion_fisica' => $preguntas_exploracion_fisica,
            'exploracion_fisica_paciente' => $exploracion_fisica_paciente,'preguntas_historia_clinica' => $preguntas_historia_clinica,
            'historia_clinica_paciente' => $historia_clinica_pacientes_value, 'plan' => $plan_tratamiento,
            'examen_mental' => $examen_mental, 'ante_obstetricos' => $opciones_antecedentes, 'tension_premenstrual' => $tension_premenstrual,
            'anticonceptivos' => $anticonceptivos, 'ritmo' => $ritmo, 'antecedentes_obstetricos_paciente' => $antecedentes_ginecobstetricos,
            'antecedentes' => $opciones_patnopat, 'pat_nopat_opciones' => $opciones_preguntas,
            'pat_nopat' => $pat_nopat, 'pat_nopat_valores' => $pat_valores,
            'historia_familiar' => $historia_familiar_values, 'historia_previa' => $historia_previa,
            'historia_previa_values' => $historia_previa_values,
            'peea' => $peea, 'nota_clinica_helper' => $nota_clinica_helper, 'nota_clinica' => $nota_clinica,
            'estado_civil' => $estado_civil, 'lugar_residencia' => $lugar_residencia, 'sustento' => $sustento, 'trastorno' => $trastorno]);




    }


}
