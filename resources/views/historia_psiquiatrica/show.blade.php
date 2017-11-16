@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div id="div_pacientes" class="container">
            <h2>Historia Psiquiatrica Familiar</h2>

            <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-4">Historia Familiar de:</th>
                    <th class="col-xs-2"></th>
                    <th class="col-xs-6">¿Quién?</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($trastorno as $tras)
                    <tr>
                        <td><label>{{$tras->nombre}}</label></td>

                            @foreach($valores as $val)
                                @if($val->id_trastorno == $tras->id)
                                    <td>{{$val->valor}}</td>
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


