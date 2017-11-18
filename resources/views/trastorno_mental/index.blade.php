@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar trastorno mental">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div class="container">
            <h2>Lista de posibles trastornos mentales</h2>
        </div>

        <div id="div_substancias" class="container">
            @foreach($trastornos as $trastorno)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a href="trastorno/{{{$trastorno->id}}}">
                                {{$trastorno->nombre}}</a>
                        </h4>
                    </div>
                </div> <!-- Complete patient info -->

            @endforeach
            <a href="/trastorno_mental/create" class="btn btn-info">Nuevo trastorno</a>
        </div> <!-- div_pacientes -->

    </div> <!-- jumbotron -->
    <hr>
@stop
