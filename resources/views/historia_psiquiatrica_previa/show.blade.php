@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
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
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-xs-3" align="center">Problemas</th>
                                    <th class="col-xs-1">Si</th>
                                    <th class="col-xs-1">No</th>
                                </tr>
                                </thead>
                                <tbody>
                             @foreach($trastorno as $tras_previo)
                                 <tr>
                                 <th scope="row">{{$tras_previo->nombre}}</th>
                                 @foreach($valor as $value)
                                     @if($value->id_trastorno == $tras_previo->id)
                                        @if($value->value == 'Si')
                                            <td>X</td>
                                            <td></td>
                                         @else
                                            <td></td>
                                            <td>X</td>
                                        @endif
                                    @endif
                                @endforeach
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
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


