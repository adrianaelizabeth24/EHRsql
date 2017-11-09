@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('ExamenMentalController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>Examen Mental</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label> 
                            Elementos del examen mental: 
                            1. Apariencia general y conducta. 
                            2. Expresión del afecto y humor. 
                            3. Lenguaje y habla (ej. Velocidad, ritmo, estructura, flujo de ideas y rasgos patológicos como tangencialidad, vaguedad, incoherencia o neologismo) 
                            4. Velocidad de movimientos y la presencia de movimientos y posturas sin propósito, repetitivas o inusuales. 
                            5. Pensamientos y percepciones: 
                            A) Expresión espontánea de preocupaciones, inquietudes, pensamientos impulsos y experiencias preceptúales. 
                            B) Síntomas cognitivos y preceptúales: alucinaciones, delirios, ideas de referencia, obsesiones y compulsiones. 
                            C) Pensamientos, deseos o impulsos suicidas homicidas, violentos o auto agresivos. Especificar intensidad y qué impide el actuarlos. 
                            6. Asociaciones: pérdida o idiosincrasia y postulados contradictorios. 
                            7. Insight. 
                            8. Estado cognitivo:
                            A) Nivel de conciencia. 
                            B) Orientación 
                            C) Atención y concentración. 
                            D) Funciones del lenguaje (nombramiento, fluidez, comprensión, repetición, lectura, escritura). 
                            E) Memoria. 
                            F) conocimientos generales. 
                            G) Cálculo. 
                            H) Dibujo. 
                            I) Razonamiento abstracto. 
                            J) Funciones ejecutivas (del sistema frontal) (ej. hacer una lista, inhibición de respuestas impulsivas, resistencia a la distracción, reconocer contradicciones). 
                            K) Cualidad del juicio.
                    </label>
					<input type="text" placeholder="Las escalas fueron realizadas por" name="escalas_realizadas" value="{{$examen->escalas_realizadas}}"/>
					<br/>
                    <label>Escalas</label>
                    <br/>
                    <input type="text" placeholder="HAM-D" name="ham_d" value="{{$examen->ham_d}}"/>
                    <input type="text" placeholder="HAM-A" name="ham_a" value="{{$examen->ham_a}}"/>
                    <input type="text" placeholder="Y-BOCS" name="y_bocs" value="{{$examen->y_bocs}}"/>
                    <input type="text" placeholder="Q-LES-Q" name="q_les_q" value="{{$examen->q_les_q}}"/>
                    <input type="text" placeholder="GADI" name="gadi" value="{{$examen->gadi}}"/>
                    <input type="text" placeholder="BDI" name="bdi" value="{{$examen->bdi}}"/>
                    <input type="text" placeholder="SPIN" name="spin" value="{{$examen->spin}}"/>
                    <input type="text" placeholder="PAS" name="pas" value="{{$examen->pas}}"/>
                    <br/>
					<textarea placeholder="Descripción de hallazgos físicos o neurológicos que no hayan sido documentados en otra parte de la historia " cols="100" rows="8" name="hallazgos">{{$examen->hallazgos}}</textarea>
					<br/>


                    <label>Acostado PT (Despues de 2 minutos) :</label> 
                    <input type="number" placeholder="Solicitado" name="pt_acostado_solicitado" value="{{$examen->pt_acostado_solicitado}}"/>
                    <input type="number" placeholder="Diagnosticado" name="pt_acostado_diagnosticado" value="{{$examen->pt_acostado_diagnosticado}}"/>
                    <br/>
                    <label>Acostado ST (Despues de 2 minutos) :</label> 
                    <input type="number" placeholder="Solicitado" name="st_acostado_solicitado" value="{{$examen->st_acostado_solicitado}}"/>
                    <input type="number" placeholder="Diagnosticado" name="st_acostado_diagnosticado" value="{{$examen->st_acostado_diagnosticado}}"/>
                    <br/>
                    <label>Parado PT (Despues de 2 minutos) :</label> 
                    <input type="number" placeholder="Solicitado" name="pt_parado_solicitado" value="{{$examen->pt_parado_solicitado}}"/>
                    <input type="number" placeholder="Diagnosticado" name="pt_parado_diagnosticado" value="{{$examen->pt_parado_diagnosticado}}"/>
                    <br/>
                    <label>Parado ST (Despues de 2 minutos) :</label> 
                    <input type="number" placeholder="Solicitado" name="st_parado_solicitado" value="{{$examen->st_parado_solicitado}}"/>
                    <input type="number" placeholder="Diagnosticado" name="st_parado_diagnosticado" value="{{$examen->st_parado_diagnosticado}}"/>
                    <br/>
                    <label>Frecuencia cardiaca :</label> 
                    <input type="number" placeholder="Acostado (despues de 5 min)" name="frecuencia_acostado" value="{{$examen->frecuencia_acostado}}"/>
                    <input type="number" placeholder="Parado (despues de 2 min)" name="frecuencia_parado" value="{{$examen->frecuencia_parado}}"/>
                    <br/>
                    <input type="number" placeholder="Ritmo regular" name="ritmo_regular" value="{{$examen->ritmo_regular}}"/>
                    <input type="number" placeholder="Ritmo irregular" name="ritmo_irregular" value="{{$examen->ritmo_irregular}}"/>
                    <br/>
                    <input type="number" placeholder="Peso" name="peso" value="{{$examen->peso}}"/>
                    <input type="number" placeholder="KGS" name="kgs" value="{{$examen->kgs}}"/>
                    <br/>
                    <input type="number" placeholder="Talla" name="talla" value="{{$examen->talla}}"/>
                    <input type="number" placeholder="CMS" name="cms" value="{{$examen->cms}}"/>
                    <br/>
                    <input type="number" placeholder="Circunferencia abdominal (en cm)" name="circunferencia" value="{{$examen->circunferencia}}"/>
                    <br/>
                    <input type="number" placeholder="Temperatura (en gc)" name="temperatura" value="{{$examen->temperatura}}"/>
                    <br/>
                    <input type="number" placeholder="Peso usual" name="peso_usual" value="{{$examen->peso_usual}}"/>
                    <br/>
                    <input type="number" placeholder="IMC" name="imc" value="{{$examen->imc}}"/>
                    <br/>
				
                </div>
            </div>
        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
        </div>
    </form>
@stop