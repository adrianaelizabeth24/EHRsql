@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

	<form class="jumbotron" method="post" action="{{url('historia_clinica_familiar')}}">
		{{csrf_field()}}

		<div class="jumbotron">
			<div class="container">
				<h2>Datos del paciente</h2>
				<div class="row">
					<div class="col-md-8">
						<label>{{$paciente->id}}</label>
						<input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
						<label>{{$paciente->nombre}}</label>
						<label>{{$paciente->apellido_paterno}}</label>
						<label>{{$paciente->apellido_materno}}</label>
					</div>
				</div>
				<h2>Historia Clínica Familiar</h2>
				<div class="row">
					<div class="col-md-12">
						@foreach($preguntas as $quest)
							<label>{{$quest->preguntas}}</label><br/>
							<input type="radio" name="{{$quest->id}}" value="Si"> Sí<br/>
							<input type="radio" name="{{$quest->id}}" value="No"> No<br/>
							<input type="radio" name="{{$quest->id}}" value="Se desconoce">Se desconoce<br/>
							<br/>
						@endforeach
						</div>
				</div>
			</div>


		</div> <!-- jumbotron -->

		<br/>
		<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
	</form>
@stop