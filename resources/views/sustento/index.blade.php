@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar sustento">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div class="container">
            <h2>Lista de posibles sustentos</h2>
        </div>

        <div id="div_substancias" class="container">
            @foreach($sustento as $sustento)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a href="sustento/{{{$sustento->id}}}">{{$sustento->id}}
                                {{$sustento->nombre}}</a>
                        </h4>
                    </div>
                </div> <!-- Complete patient info -->

            @endforeach
            <a href="/sustento/create" class="btn btn-info">Nuevo sustento</a>
        </div> <!-- div_pacientes -->

    </div> <!-- jumbotron -->
    <hr>
@stop


