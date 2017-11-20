@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">

        <div class="container">
            <h2>Notas Clínicas del Paciente</h2>
        </div>

        <div id="div_substancias" class="container">
            @foreach($notas as $nota)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a href="/nota_clinica/{{{$nota->id}}}">
                                Nota Clínica {{$nota->no_de_sesion}}</a>
                        </h4>
                    </div>
                </div> <!-- Complete patient info -->

            @endforeach
                <a href="/nota_clinica/nota_clinica/{{{$helper}}}" class="btn btn-info">Agregar
                    Nota Clinica</a>
                <a href="/paciente" class="btn btn-default">Regresar</a>
        </div> <!-- div_pacientes -->

    </div> <!-- jumbotron -->
    <hr>
@stop


