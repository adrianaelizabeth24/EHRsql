@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="container">
            <h2>Detalle del Sustento</h2>
        </div>
        <br>
        <div id="div_pacientes" class="container">
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="personal_info">
                            <label>Nombre :</label><p>{{$sustentos->nombre}}</p>
                        </div>
                    </div>

                </div>
                <br/>
                <a href="/sustento" class="btn btn-info">Regresar</a>
                <form action="{{action('SustentoController@destroy', $sustentos->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>

                <br/>


            </div>
        </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop