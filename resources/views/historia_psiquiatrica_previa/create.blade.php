@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
<form>
    <div class="jumbotron" method="post" action="{{url('historia_psiquiatrica_previa')}}">
        {{csrf_field()}}


        <div class="container">
            <h2>Historial Tratamiento <span
                        style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
            <input type="hidden" name="id_paciente" value="{{$paciente->id}}">
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
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-xs-3" align="center">Problemas</th>
                                <th class="col-xs-1">Si</th>
                                <th class="col-xs-1">No</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($trastorno as $tras)
                                <tr>
                                    <th scope="row">{{$tras->nombre}}</th>
                                    <td><input type="radio" name="{{$tras->id}}" value="Si"></td>
                                    <td><input type="radio" name="{{$tras->id}}" value="No"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                <a href="/paciente/{{$paciente->id}}" class="btn btn-default btn-lg btn-block">Cancelar</a>
            </div>
        </div>
    </div>
        </form>
@stop