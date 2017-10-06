@extends('layouts.app')

@section('content')
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
            <h2>Lista de Pacientes</h2>
        </div>



        <div id="div_pacientes" class="container">
            @foreach($pacientes as $paciente)
            <div class="panel panel-default">
                <div class="panel-heading" role="tab">
                    <h4 class="panel-title">
                        <a href="#patient" data-toggle="collapse">{{$paciente->nombre}} {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}}</a>
                    </h4>
                </div>
                <div id="patient" class="panel-collapse collapse" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="personal_info">
                                <p>Nombre completo:{{$paciente->nombre}} {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}}</p>
                                <p>Edad:{{$paciente->fecha_nacimiento}}</p>
                                <a class="btn btn-info">Ver mas información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Complete patient info -->
            @endforeach
        </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


