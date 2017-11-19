@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="container">
            <h2>Detalle de la Pregunta</h2>
        </div>
        <br>
        <div id="div_pacientes" class="container">
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="personal_info">
                            <label>Nombre :</label><p>{{$opciones->nombre}}</p>
                        </div>
                    </div>

                </div>
                <br/>

                <div class="col-xs-2">
                    <a href="/opciones_exploracion_fisica" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
                </div>

                <div class="col-xs-2">
                    <a href="/opciones_exploracion_fisica/{{{$opciones_exploracion_fisica->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
                </div>

                <form action="{{action('OpcionesExploracionFisicaController@destroy', $opciones_exploracion_fisica->id)}}" method="post" style="display:unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">

                    <div class="col-xs-2">
                        <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
                    </div>
                </form>
                

                <br/>


            </div>
        </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


