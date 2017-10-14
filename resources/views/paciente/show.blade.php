@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar paciente">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div class="container">
            <h2>Detalle del Paciente</h2>
        </div>



        <div id="div_pacientes" class="container">
                    <div id="patient" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal_info">
                                    <label>Nombre Completo :</label><p>{{$paciente->nombre}} {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}}</p>
                                    <label>Fecha de Nacimiento :</label><p>{{$paciente->nacimiento}}</p>
                                    <label>Sexo :</label><p>{{$paciente->sexo}}</p>
                                    <label>Estado Civil :</label><p>{{$paciente->estado_civil}}</p>
                                    <label>Religion :</label><p>{{$paciente->religion}}</p>
                                    <label>Escolaridad :</label><p>{{$paciente->escolaridad}}</p>
                                    <label>Sustento :</label><p>{{$paciente->sustento}}</p>
                                    <label>Ocupación del sustento</label><p>{{$paciente->ocupacion_sustento}}</p>
                                    <label>Ocupación del paciente</label><p>{{$paciente->ocupacion_paciente}}</p>
                                    <label>Número de tasas de té y/o café diarias :</label><p>{{$paciente->cafe_te_numero_tasas}}</p>
                                    <label>Bebidas alcoholicas consumidas frecuentemente:</label><p>{{$paciente->bebidas_alcoholicas}}</p>
                                    <label>Dudas relacionadas con el alcoholismo:</label><p>{{$paciente->dudas_alcoholismo}}</p>
                                </div>
                            </div>
                        </div>
                        <a href="/paciente" class="btn btn-info">Regresar</a>
                        <form action="{{action('PacienteController@destroy', $paciente->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Borrar</button>
                        </form>
                        <a href="/paciente/{{{$paciente->id}}}/edit" class="btn btn-warning">Editar</a>
                        <br/>

                        <div class="container">
                            <h2>Examenes del paciente</h2>


                        @if ($paciente->id_exploracion_fisica == 0)
                            <a href="/exploracion_fisica/paciente/{{{$paciente->id}}}" class="btn btn-info">Agregar Examen Exploracion Fisica</a>
                        @else
                            <a href="/exploracion_fisica/{{{$paciente->id_exploracion_fisica}}}" class="btn btn-info">Ver Examen Exploracion Fisica</a>
                        @endif

                            @if ($paciente->id_examen_mental == 0)
                                <a href="/examen_mental/paciente/{{{$paciente->id}}}" class="btn btn-info">Agregar Examen Mental</a>
                            @else
                                <a href="/examen_mental/{{{$paciente->id_exploracion_fisica}}}" class="btn btn-info">Ver Examen Mental</a>
                            @endif
                        </div>
                    </div>
                </div> <!-- Complete patient info -->
        </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


