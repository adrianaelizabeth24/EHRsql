@extends('layouts.app')

@section('content')  
    <!-- Main jumbotron for a primary marketing message or call to action -->
	<link href="{{ asset('css/paciente.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <div class="jumbotron">
        <div class="container">
			<div class="input-group" style="width: 20%;float: right;">
				<input type="text" class="form-control" placeholder="Buscar paciente">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</div>
			</div>
            <h2>Lista de Pacientes</h2>

			<div id="div_pacientes">
				@foreach($pacientes as $paciente)
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
							<a href="paciente/{{{$paciente->id}}}">
							{{$paciente->nombre}} {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}}
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							{{$paciente->nacimiento}}</a>
						</h4>
					</div>
				</div> <!-- Complete patient info -->

				@endforeach
				<a href="/paciente/create" class="btn btn-info">Nuevo Paciente</a>
			</div> <!-- div_pacientes -->
		</div>

    </div> <!-- jumbotron -->
    <hr>
@stop


