@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
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
                            <label>Tratamiento Previo por problemas emocionales</label>
                            <p>{{$historial->tratamiento_previo}}</p>
                            <label>Quien lo trató :</label>
                            <p>{{$historial->quien_lo_trato}}</p>
                            <label>Alguna hospitalizacion por problemas emocionales :</label>
                            <p>@if($historial->hospitalizacion == 1) Si @else No @endif</p>
                            <label>Edad de Primera Hospitalizacion :</label>
                            <p>{{$historial->primera_hospitalizacion}}</p>
                            <label>Número de hospitalizaciones :</label>
                            <p>{{$historial->no_hospitalizaciones}}</p>
                            <label>Duración de la última hospitalización :</label>
                            <p>{{$historial->duracion_hospitalizacion}}</p>
                            <label>Motivo de su última hospitalizacion :</label>
                            <p>{{$historial->motivo_hospitalizacion}}</p>
                            <label>Tratamiento :</label>
                            <p>{{$historial->tratamiento}}</p>

                        </div>
                        <div class="col-md-12">
                            <h2>Listado de problemas psiquiatricos previos</h2>
                            <label>Ezquizofrenia</label>
                            <p>@if($historial->ezquizofrenia == 2) Si @elseif($historial->ezquizofrenia == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Trastorno Bipolar</label>
                            <p>@if($historial->trastorno_bipolar == 2) Si @elseif($historial->trastorno_bipolar == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Alcoholismo</label>
                            <p>@if($historial->alcoholismo == 2) Si @elseif($historial->alcoholismo == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Drogadicción</label>
                            <p>@if($historial->drogadiccion == 2) Si @elseif($historial->drogadiccion == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Depresión Mayor</label>
                            <p>@if($historial->depresion == 2) Si @elseif($historial->depresion == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Disimia</label>
                            <p>@if($historial->distimia == 2) Si @elseif($historial->distimia == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Ataques de Pánico</label>
                            <p>@if($historial->ataques_de_panico == 2) Si @elseif($historial->ataques_de_panico == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Agorafobia</label>
                            <p>@if($historial->agorafobia == 2) Si @elseif($historial->agorafobia == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Trastorno Obsesivo Compulsivo</label>
                            <p>@if($historial->obsesivo_compulsivo == 2) Si @elseif($historial->obsesivo_compulsivo == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Fobia Social</label>
                            <p>@if($historial->fobia_social == 2) Si @elseif($historial->fobia_social == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Fobia Especifica</label>
                            <p>@if($historial->fobia_especifica == 2) Si @elseif($historial->fobia_especifica == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Ansiedad Generalizada</label>
                            <p>@if($historial->ansiedad == 2) Si @elseif($historial->ansiedad == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Demencia</label>
                            <p>@if($historial->demencia == 2) Si @elseif($historial->demencia == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Retraso Mental</label>
                            <p>@if($historial->retardo_mental == 2) Si @elseif($historial->retardo_mental == 1) No @else
                                    Se desconoce @endif</p>
                            <label>Trastorno de Personalidad</label>
                            <p>@if($historial->trastorno_de_peronsonalidad == 2) Si @elseif($historial->trastorno_de_peronsonalidad == 1) No @else
                                    Se desconoce @endif</p>
                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historial->id_paciente}}}" class="btn btn-info">Regresar</a>
                <a href="/historia_psiquiatrica_previa/{{{$historial->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('HistoriaPsiquiatricaPreviaController@destroy', $historial->id)}}" method="post"
                      style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


