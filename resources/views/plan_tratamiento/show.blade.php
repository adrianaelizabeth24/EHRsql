@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div id="div_pacientes" class="container">
            <h2>Plan de Tratamiento <span
                        style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Diagnsotico Primario :</label>
                            <p>{{$plan->diagnsotico_primario}}</p><br/>
                            <label>Diagnsotico Secundario : </label>
                            <p>{{$plan->diagnsotico_secundario}}</p><br/>
                            <label>Seguimiento Farmacológico :</label>
                            <p>{{$plan->seguimiento_farmacologico}}</p><br/>
                            <label>Modalidad Terapeutica :</label>
                            <p>{{$plan->modalidad_terapeutica}}</p><br/>
                            <label>Comentarios :</label>
                            <p>{{$plan->comentarios}}</p><br/>
                            <label>Pronostico :</label>
                            <p>{{$plan->pronostico}}</p><br/>
                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$plan->id_paciente}}}" class="btn btn-info">Regresar</a>
                <a href="/plan_tratamiento/{{{$plan->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('PlanTratamientoController@destroy', $plan->id)}}" method="post"
                      style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </div>
<<<<<<< HEAD
        </div> <!-- Complete patient info -->
=======

            <div class="col-xs-2">
                <a href="/paciente/{{{$plan->id_paciente}}}" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
            </div>

            <div class="col-xs-2">
                <a href="/plan_tratamiento/{{{$plan->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
            </div>

            <form action="{{action('PlanTratamientoController@destroy', $plan->id)}}" method="post" style="display:unset;">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">

                <div class="col-xs-2">
                    <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
                </div>
            </form>

        </div>
    </div> <!-- Complete patient info -->
    <hr>
>>>>>>> origin/master
@stop


