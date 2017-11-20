@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('examen_mental')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Examen mental <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
                <input type="hidden" value="{{$paciente->id}}" name="id_paciente">
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
                        <input class="form-control" type="text" placeholder="Las escalas fueron realizadas por" name="escalas_realizadas"/>
                        <br/>
                        <label>Escalas</label>
                        <br/>
                        <input type="text" placeholder="HAM-D" name="ham_d">
                        <input type="text" placeholder="HAM-A" name="ham_a">
                        <input type="text" placeholder="Y-BOCS" name="y_bocs">
                        <input type="text" placeholder="Q-LES-Q" name="q_les_q">
                        <input type="text" placeholder="GADI" name="gadi">
                        <input type="text" placeholder="BDI" name="bdi">
                        <input type="text" placeholder="SPIN" name="spin">
                        <input type="text" placeholder="PAS" name="pas">
                        <br/>
                        <textarea class="form-control" placeholder="Descripción de hallazgos físicos o neurológicos que no hayan sido documentados en otra parte de la historia" cols="100" rows="8" name="hallazgos"></textarea>
                        <br/>
                        <label>Acostado PT (Despues de 2 minutos) :</label> 
                        <input type="number" placeholder="Sistólica" name="pt_acostado_sistolica">
                        <input type="number" placeholder="Diastólica" name="pt_acostado_diastolica">
                        <br/>
                        <label>Acostado ST (Despues de 2 minutos) :</label> 
                        <input type="number" placeholder="Sistólica" name="st_acostado_sistolica">
                        <input type="number" placeholder="Diastólica" name="st_acostado_diastolica">
                        <br/>
                        <label>Parado PT (Despues de 2 minutos) :</label> 
                        <input type="number" placeholder="Sistólica" name="pt_parado_sistolica">
                        <input type="number" placeholder="Diastólica" name="pt_parado_diastolica">
                        <br/>
                        <label>Parado ST (Despues de 2 minutos) :</label> 
                        <input type="number" placeholder="Sistólica" name="st_parado_sistolica">
                        <input type="number" placeholder="Diastólica" name="st_parado_diastolica">
                        <br/>
                        <label>Frecuencia cardiaca :</label> 
                        <input type="number" placeholder="Acostado (despues de 5 min)" name="frecuencia_acostado">
                        <input type="number" placeholder="Parado (despues de 2 min)" name="frecuencia_parado">
                        <br/>
                        <input type="number" placeholder="Ritmo regular" name="ritmo_regular">
                        <input type="number" placeholder="Ritmo irregular" name="ritmo_irregular">
                        <br/>
                        <input type="number" placeholder="Peso kgs" name="peso">
                        <br/>
                        <input type="number" placeholder="Talla cms" name="talla">
                        <br/>
                        <input type="number" placeholder="Circunferencia abdominal (en cm)" name="circumferencia">
                        <br/>
                        <input type="number" placeholder="Temperatura (en gc)" name="temperatura">
                        <br/>
                        <input type="number" placeholder="Peso usual" name="peso_usual">
                        <br/>
                        <input type="number" placeholder="IMC" name="imc">
                        <br/>
						
						<input type="submit" value="Guardar" class="btn btn-info">
                    	<a href="/paciente/{{{$paciente->id}}}" class="btn btn-default">Cancelar</a>

                    </div>
                    
                </div>
            </div>
        </div>
    </form>
@stop