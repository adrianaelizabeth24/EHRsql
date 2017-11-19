@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar Lugar Residencia">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div class="container">
            <h2>Lista de Lugares Residencias</h2>
        </div>

        <div id="div_substancias" class="container">
            @foreach($lugares as $lugar)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a href="lugar_residencia/{{{$lugar->id}}}">
                                {{$lugar->nombre}}</a>
                        </h4>
                    </div>
                </div> <!-- Complete patient info -->

            @endforeach
        </div>
        
        <div class="row col-xs-offset-2">

            <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
            </div>

            <div class="form-group col-xs-4">
                <a href="/lugar_residencia/create" class="btn btn-primary btn-lg btn-block">Nuevo Lugar Residencia</button>
            </div>
        </div>

    </div> <!-- jumbotron -->
    <hr>
@stop


