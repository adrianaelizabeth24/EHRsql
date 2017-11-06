@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('examen_mental')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Informacion personal</h2>


                <div class="row">
                    <div class="col-md-8">
                        <label>{{$paciente->id}}</label>
                        <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                        <label>{{$paciente->nombre}}</label>
                        <label>{{$paciente->apellido_paterno}}</label>
                        <label>{{$paciente->apellido_materno}}</label>
                    </div>
                </div>
                <h2>Examen mental</h2>
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
                        <textarea class="form-control" placeholder="Descripción de hallazgos físicos o neurológicos que no hayan sido documentados en otra parte de la historia " cols="100" rows="8"
                                  name="hallazgos">
                        </textarea>
                        <br/>
                        <label>Acostado PT (Despues de 2 minutos) :</label> 
                        <input type="text" placeholder="Solicitado" name="pt_acostado_solicitado">
                        <input type="text" placeholder="Diagnosticado" name="pt_acostado_diagnosticado">
                        <br/>
                        <label>Acostado ST (Despues de 2 minutos) :</label> 
                        <input type="text" placeholder="Solicitado" name="st_acostado_solicitado">
                        <input type="text" placeholder="Diagnosticado" name="st_acostado_diagnosticado">
                        <br/>
                        <label>Parado PT (Despues de 2 minutos) :</label> 
                        <input type="text" placeholder="Solicitado" name="pt_parado_solicitado">
                        <input type="text" placeholder="Diagnosticado" name="pt_parado_diagnosticado">
                        <br/>
                        <label>Parado ST (Despues de 2 minutos) :</label> 
                        <input type="text" placeholder="Solicitado" name="st_parado_solicitado">
                        <input type="text" placeholder="Diagnosticado" name="st_parado_diagnosticado">
                        <br/>
                        <label>Frecuencia cardiaca :</label> 
                        <input type="text" placeholder="Acostado (despues de 5 min)" name="frecuencia_acostado">
                        <input type="text" placeholder="Parado (despues de 2 min)" name="frecuencia_parado">
                        <br/>
                        <input type="text" placeholder="Ritmo regular" name="ritmo_regular">
                        <input type="text" placeholder="Ritmo irregular" name="ritmo_irregular">
                        <br/>
                        <input type="text" placeholder="Peso" name="peso">
                        <input type="text" placeholder="KGS" name="kgs">
                        <br/>
                        <input type="text" placeholder="Talla" name="talla">
                        <input type="text" placeholder="CMS" name="cms">
                        <br/>
                        <input type="text" placeholder="Circunferencia abdominal (en cm)" name="circunferencia">
                        <br/>
                        <input type="text" placeholder="Temperatura (en gc)" name="temperatura">
                        <br/>
                        <input type="text" placeholder="Peso usual" name="peso_usual">
                        <br/>
                        <input type="text" placeholder="IMC" name="imc">
                        <br/>

                    </div>
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                </div>
            </div>
    </form>
@stop