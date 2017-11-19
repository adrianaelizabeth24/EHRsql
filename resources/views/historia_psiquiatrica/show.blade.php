@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div id="div_pacientes" class="container">
            <h2>Historia Psiquiatrica Familiar <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

            <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-6" align="center"></th>
                    <th class="col-xs-1">Si</th>
                    <th class="col-xs-1">No</th>
                    <th class="col-xs-2">No sé</th>
                    <th class="col-xs-5">Especificar Parentezco</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($trastorno as $tras)
                        <tr>
                            <th scope="row"> {{$tras->nombre}} </th>
                            @foreach($valores as $val)
                                @if($val->id_trastorno == $tras->id)
                                    @if($val->valor == 'Si')
                                        <td>X</td>
                                    <td></td>
                                    <td></td>
                                    @elseif($val->valor == 'No')
                                        <td></td>
                                    <td>X</td>
                                    <td></td>
                                    @else
                                        <td></td>
                                    <td></td>
                                    <td>X</td>
                                    @endif
                                        <td>{{$val->fam_trastorno}}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="col-xs-2">
                <a href="/paciente/{{{$historia->id_paciente}}}" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
            </div>

            <div class="col-xs-2">
				<a href="/historia_psiquiatrica/{{{$historia->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
            </div>


                <form action="{{action('HistoriaPsiquiatricaFamiliarController@destroy', $historia->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">

                    <div class="col-xs-2">
                        <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
                    </div>
                </form>

        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


