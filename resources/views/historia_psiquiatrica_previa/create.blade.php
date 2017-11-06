@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('historia_psiquiatrica_previa')}}">
        {{csrf_field()}}


        <div class="container">
            <h2>Datos del paciente</h2>

            <div class="row">
                <div class="col-md-8">
                    <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                    <label>{{$paciente->nombre}}</label>
                    <label>{{$paciente->apellido_paterno}}</label>
                    <label>{{$paciente->apellido_materno}}</label>
                </div>
            </div>

            <h2>Historial Tratamiento</h2>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="tratamiento_previo"
                           placeholder="Tratamiento previo por problemas emocionales"/>
                    <br/>
                    <label>Ha sido tratado por</label><br/>
                    <input type="radio" name="quien_lo_trato" value="psiquiatra">Psiquiatra<br/>
                    <input type="radio" name="quien_lo_trato" value="medico no psiquiatra">Médico no psiquiatra<br/>
                    <input type="radio" name="quien_lo_trato" value="psicologo">Psicólogo<br/>
                    <input type="radio" name="quien_lo_trato" value="psicoanalista">Psicoanalista<br/>
                    <input type="radio" name="quien_lo_trato" value="otro">Otro<br/>

                    <br/>

                    <label>Alguna vez fue hospitalizado por problemas emocionales</label><br/>
                    <input type="radio" name="hospitalizacion" value="2"> Sí<br/>
                    <input type="radio" name="hospitalizacion" value="1"> No<br/>
                    <input type="radio" name="hospitalizacion" value="0"> Se desconoce<br/>
                    <br/>

                    <input class="form-control" type="number" name="primera_hospitalizacion"
                           placeholder="Edad Primera Hospitalizacion"/>

                    <br/>

                    <input class="form-control" type="number" name="no_hospitalizaciones"
                           placeholder="Número de Hospitalizaciones"/>
                    <br/>

                    <input class="form-control" type="number" name="duracion_hospitalizacion"
                           placeholder="Duración de la última hospitalizacion"/>
                    <br/>

                    <input class="form-control" type="text" name="motivo_hospitalizacion"
                           placeholder="Motivo última hospitalizacion"/>
                    <br/>

                    <textarea name="tratamiento" placeholder="Cronología de todos los episodios pasados de enfermedad mental y sus tratamientos, incluyendo los síndromes psiquiátricos no formalmente diagnosticados en ese tiempo, diagnósticos previos establecidos, tratamientos ofrecidos y respuestas a los mismos.
Consigne dosis, duración, eficacia, efectos secundarios y adherencia del paciente a los medicamentos prescritos."></textarea>

                    <br/>

                    <div class="row">
                        <h2>Lista de Problemas Psiquiatricos Previos</h2>
                        <div class="col-md-12">
                            <label>Ezquizofrenia</label><br/>
                            <input type="radio" name="ezquizofrenia" value="2"> Sí<br/>
                            <input type="radio" name="ezquizofrenia" value="1"> No<br/>
                            <input type="radio" name="ezquizofrenia" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Trastorno Bipolar</label><br/>
                            <input type="radio" name="bipolaridad" value="2"> Sí <br/>
                            <input type="radio" name="bipolaridad" value="1"> No <br/>
                            <input type="radio" name="bipolaridad" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Alcoholismo</label><br/>
                            <input type="radio" name="alcoholismo" value="2">Sí<br/>
                            <input type="radio" name="alcoholismo" value="1">No<br/>
                            <input type="radio" name="alcoholismo" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Drogadicción</label><br/>
                            <input type="radio" name="drogas" value="2">Sí<br/>
                            <input type="radio" name="drogas" value="1">No<br/>
                            <input type="radio" name="drogas" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Depresión Mayor</label><br/>
                            <input type="radio" name="depresion" value="2">Sí<br/>
                            <input type="radio" name="depresion" value="1">No<br/>
                            <input type="radio" name="depresion" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Disimia</label><br/>
                            <input type="radio" name="disimia" value="2">Sí<br/>
                            <input type="radio" name="disimia" value="1">No<br/>
                            <input type="radio" name="disimia" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Ataques de Pánico</label><br/>
                            <input type="radio" name="panico" value="2">Sí<br/>
                            <input type="radio" name="panico" value="1">No<br/>
                            <input type="radio" name="panico" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Agorafobia</label><br/>
                            <input type="radio" name="agorafobia" value="2">Sí<br/>
                            <input type="radio" name="agorafobia" value="1">No<br/>
                            <input type="radio" name="agorafobia" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Trastorno Obsesivo Compulsivo</label><br/>
                            <input type="radio" name="obsesion" value="2">Si<br/>
                            <input type="radio" name="obsesion" value="1">No<br/>
                            <input type="radio" name="obsesion" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Fobia Social</label><br/>
                            <input type="radio" name="fobia_social" value="2">Si<br/>
                            <input type="radio" name="fobia_social" value="1">No<br/>
                            <input type="radio" name="fobia_social" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Fobia Especifica</label><br/>
                            <input type="radio" name="fobia_especifica" value="2">Sí<br/>
                            <input type="radio" name="fobia_especifica" value="1">No<br/>
                            <input type="radio" name="fobia_especifica" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Ansiedad Generalizada</label><br/>
                            <input type="radio" name="ansiedad" value="2">Si<br/>
                            <input type="radio" name="ansiedad" value="1">No<br/>
                            <input type="radio" name="ansiedad" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Demencia</label><br/>
                            <input type="radio" name="demencia" value="2">Si<br/>
                            <input type="radio" name="demencia" value="1">No<br/>
                            <input type="radio" name="demencia" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Retraso Mental</label><br/>
                            <input type="radio" name="retraso_mental" value="2">Si<br/>
                            <input type="radio" name="retraso_mental" value="1">No<br/>
                            <input type="radio" name="retraso_mental" value="0"> Se desconoce<br/>
                            <br/>

                            <label>Trastorno de Personalidad</label><br/>
                            <input type="radio" name="trastorno_personalidad" value="2">Si<br/>
                            <input type="radio" name="trastorno_personalidad" value="1">No<br/>
                            <input type="radio" name="trastorno_personalidad" value="0"> Se desconoce<br/>
                            <br/>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop