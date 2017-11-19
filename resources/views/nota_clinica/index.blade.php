@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar substancia">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div class="container">
            <h2>Notas Clínicas del Paciente</h2>
        </div>

        <div id="div_substancias" class="container">
            @foreach($notas as $nota)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a href="/nota_clinica/{{{$nota->id}}}">
                                Nota Clínica</a>
                        </h4>
                    </div>
                </div> <!-- Complete patient info -->

            @endforeach

            <div class="row col-xs-offset-2">

                <div class="form-group col-xs-4">
                    <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
                </div>

                <div class="form-group col-xs-4">
                    <a href="/nota_clinica/nota_clinica/{{{$helper}}}" class="btn btn-primary btn-lg btn-block">Agregar Nota Clinica</a>

                </div>
            </div>
                
        </div> <!-- div_pacientes -->

    </div> <!-- jumbotron -->
    <hr>
@stop


