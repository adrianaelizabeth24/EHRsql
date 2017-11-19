@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div id="div_pacientes" class="container">
            <h2>Examen Exploracion Fisica <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="col-xs-6" align="center">Condicion</th>
                                    <th class="col-xs-1">Normal</th>
                                    <th class="col-xs-1">Anormal</th>
                                    <th class="col-xs-2">No Examinado</th>
                                    <th class="col-xs-5">Especificar Hallazgos</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($preguntas as $quest)
                                    @foreach($valores as $valor)
                                        <tr>
                                            @if($valor->id_opciones == $quest->id)
                                                <th scope="row"> {{$quest->nombre}} </th>
                                                @if($valor->valor == 'Normal')
                                                    <td>X</td>
                                                    <td></td>
                                                    <td></td>
                                                @elseif($valor->valor == 'Anormal')
                                                    <td></td>
                                                    <td>X</td>
                                                    <td></td>
                                                @else
                                                    <td></td>
                                                    <td></td>
                                                    <td>X</td>
                                                @endif
                                                <td>{{$valor->detalles}}</td>
                                            @endif
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-xs-2">
                    <a href="/paciente/{{{$examen->id_paciente}}}" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
                </div>

                <div class="col-xs-2">
                    <a href="/exploracion_fisica/{{{$examen->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
                </div>

                <form action="{{action('ExploracionFisicaController@destroy', $examen->id)}}" method="post" style="display:unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <div class="col-xs-2">
                        <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
                    </div>
                </form>


            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
@stop


