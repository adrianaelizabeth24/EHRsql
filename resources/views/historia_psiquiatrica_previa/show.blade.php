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
        <div id="div_pacientes" class="container">
            <h2>Historial Tratamiento</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Tratamiento Previo por problemas emocionales</label><p>{{$historial->tratamiento_previo}}</p>
                            <label>Quien lo trató :</label><p>{{$historial->quien_lo_trato}}</p>
                            <label>Alguna hospitalizacion por problemas emocionales :</label><p>@if($historial->hospitalizacion == 1) Si @else No @endif</p>
                            <label>Edad de Primera Hospitalizacion :</label><p>{{$historial->primera_hospitalizacion}}</p>
                            <label>Número de hospitalizaciones :</label><p>{{$historial->no_hospitalizaciones}}</p>
                            <label>Duración de la última hospitalización :</label><p>{{$historial->duracion_hospitalizacion}}</p>
                            <label>Motivo de su última hospitalizacion :</label><p>{{$historial->motivo_hospitalizacion}}</p>
                            <label>Tratamiento :</label><p>{{$historial->tratamiento}}</p>
                        </div>
                        <div class="col-md-12">
                            <h2>Listado de problemas psiquiatricos previos</h2>
                            <label>Ezquizofrenia</label>{{}}
                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historial->id_paciente}}}" class="btn btn-info">Regresar</a>
				<a href="/historia_psiquiatrica_previa/{{{$historial->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('HistoriaPsiquiatricaPreviaController@destroy', $historial->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
				</form>
               @if ($historial->id_ehr == 0)
                    <a href="/exploracion_fisica/paciente/{{{$historial->id}}}" class="btn btn-info">Agregar Examen Exploracion Fisica</a>
                @else
                    <a href="/exploracion_fisica/{{{$historial->id}}}" class="btn btn-info">Ver Examen Exploracion Fisica</a>
                @endif

            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


