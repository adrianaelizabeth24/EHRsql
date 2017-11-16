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

        <div class="container">
            <h2>Historia Clínica Familiar</h2>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <th class="col-xs-3">ANTECEDENTE</th>
                        <th class="col-xs-9">¿PRESENTA ANTECEDENTE?</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($preguntas as $quest)
                    <tr>
                        <td><label>{{$quest->preguntas}}</label></td>

                        @foreach ($valores as $val)
                            @if($val->id_pregunta == $quest->id)
                                <td>{{$val->valor}}</td>
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
                <a href="/historia_clinica_familiar/{{{$historia->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
            </div>

                <form action="{{action('HistoriaClinicaFamiliarController@destroy', $historia->id)}}" method="post"
                      style="display: unset;">
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