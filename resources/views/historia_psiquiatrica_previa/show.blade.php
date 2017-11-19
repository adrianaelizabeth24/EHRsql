@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div id="div_pacientes" class="container">
            <h2>Historial Tratamiento <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>



            <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-4"></th>
                    <th class="col-xs-6"></th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <label>Tratamiento Previo por problemas emocionales</label>
                        </td>
                        <td>
                            {{$historial->tratamiento_previo}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Quien lo trató</label>
                        </td>
                        <td>
                            {{$historial->quien_lo_trato}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Alguna hospitalizacion por problemas emocionales</label>
                        </td>
                        <td>
                            @if($historial->hospitalizacion == 1) Si @else No @endif
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Edad de Primera Hospitalizacion</label>
                        </td>
                        <td>
                            {{$historial->primera_hospitalizacion}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Número de hospitalizaciones</label>
                        </td>
                        <td>
                            {{$historial->no_hospitalizaciones}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Duración de la última hospitalización</label>
                        </td>
                        <td>
                            {{$historial->duracion_hospitalizacion}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Motivo de su última hospitalizacion</label>
                        </td>
                        <td>
                            {{$historial->motivo_hospitalizacion}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Tratamiento :</label>
                        </td>
                        <td>
                            {{$historial->tratamiento}}
                        </td>
                    </tr>
                </tbody>
            </table>



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



            <div class="col-xs-2">
                <a href="/paciente/{{{$historial->id_paciente}}}" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
            </div>

            <div class="col-xs-2">
                <a href="/historia_psiquiatrica_previa/{{{$historial->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
            </div>

                <form action="{{action('HistoriaPsiquiatricaPreviaController@destroy', $historial->id)}}" method="post"
                      style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">

                    <div class="col-xs-2">
                        <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
                    </div>
                </form>


    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


