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
            <h2>Examen Exploracion Fisica</h2>
        </div>
        <div class="container">
            <h2>Información del Paciente</h2>
            <div class="row">
            </div>
        </div>
        <div id="div_pacientes" class="container">
            <h2>Resultados del Examen</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Condicion General :</label><p>{{$examen->condicion_general}}</p>
                            <label>Estado de la piel :</label><p>{{$examen->piel}}</p>
                            <label>Estado de la cabeza :</label><p>{{$examen->cabeza}}</p>
                            <label>Estado de los ojos :</label><p>{{$examen->ojos}}</p>
                            <label>Estado de los oidos nariza y garganta :</label><p>{{$examen->oidos_nariz_garganta}}</p>
                            <label>Estado del cuello y tiroides :</label><p>{{$examen->cuello_tiroides}}</p>
                            <label>Estado de los pulmones :</label><p>{{$examen->pulmones}}</p>
                            <label>Estado del corazón</label><p>{{$examen->corazon}}</p>
                            <label>Estado gastrointerino</label><p>{{$examen->gastro}}</p>
                            <label>Estado de los linéaticos :</label><p>{{$examen->lineaticos}}</p>
                            <label>Estado del higado:</label><p>{{$examen->higado}}</p>
                            <label>Estado del musculo esquelético:</label><p>{{$examen->musculo_esqueletico}}</p>
                            <label>Estado neurológico</label><p>{{$examen->neurologico}}</p>
                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$examen->id_paciente}}}" class="btn btn-info">Regresar</a>
				<a href="/exploracion_fisica/{{{$examen->id}}}/edit" class="btn btn-warning">Editar Datos</a>
                <form action="{{action('ExploracionFisicaController@destroy', $examen->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar Examen</button>
                </form>
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


