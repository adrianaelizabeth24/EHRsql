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
                            <label>Ezquizofrenia</label><p>{{$historial->ezquizofrenia}}</p>
                            <label>Trastorno Bipolar</label><p>{{$historial->bipolaridad}}</p>
                            <label>Alcoholismo</label><p>{{$historial->alcoholismo}}</p>
                            <label>Drogadicción</label><p>{{$historial->drogas}}</p>
                            <label>Depresión Mayor</label><p>{{$historial->depresion}}</p>
                            <label>Disimia</label><p>{{$historial->disimia}}</p>
                            <label>Ataques de Pánico</label><p>{{$historial->panico}}</p>
                            <label>Agorafobia</label><p>{{$historial->agorafobia}}</p>
                            <label>Trastorno Obsesivo Compulsivo</label><p>{{$historial->obsesion}}</p>
                            <label>Fobia Social</label><p>{{$historial->fobia_social}}</p>
                            <label>Fobia Especifica</label><p>{{$historial->fobia_especifica}}</p>
                            <label>Ansiedad Generalizada</label><p>{{$historial->ansiedad}}</p>
                            <label>Demencia</label><p>{{$historial->demencia}}</p>
                            <label>Retraso Mental</label><p>{{$historial->retraso_mental}}</p>
                            <label>Trastorno de Personalidad</label><p>{{$historial->trastorno_personalidad}}</p>
                            <label>Espesificación</label><p>{{$historial->tratamiento_espesificacion}}</p>
                            <label>Otro Trastorno</label><p>{{$historial->otro_trastorno}}</p>
                            <label>Espesificación</label><p>{{$historial->otro_tratamiento_espesificacion}}</p>



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


