@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="container">
			<div class="input-group" style="width:20%;float:right;">
				<input type="text" class="form-control" placeholder="Buscar pregunta">
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</div>
			</div>
            <h2>Lista de Preguntas Exploración Física</h2>

			<div id="div_substancias" class="container">
				@foreach($opciones as $opcion)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<h4 class="panel-title">
								<a href="opciones_exploracion_fisica/{{{$opcion->id}}}">
									{{$opcion->nombre}}</a>
							</h4>
						</div>
					</div> <!-- Complete patient info -->

				@endforeach
				<a href="/opciones_exploracion_fisica/create" class="btn btn-info">Nueva Pregunta</a>
			</div> <!-- div_pacientes -->
		</div>

    </div> <!-- jumbotron -->
    <hr>
@stop


