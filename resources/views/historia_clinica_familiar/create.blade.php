@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

	<form class="jumbotron" method="post" action="{{url('historia_clinica_familiar')}}">
		{{csrf_field()}}

		<div class="jumbotron">
			<div class="container">

				<h2>Historia Clínica Familiar <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
				<input type="hidden" name="id_paciente" value="{{$paciente->id}}">
				<div class="row">
					<div class="col-md-12">
						<table class="table">
							<thead>
							<tr>
								<th class="col-xs-6" align="center"></th>
								<th class="col-xs-1">Si</th>
								<th class="col-xs-1">No</th>
								<th class="col-xs-2">Se desconoce</th>
								<th class="col-xs-5">Especificación</th>
							</tr>
							</thead>
							<tbody>
						@foreach($preguntas as $quest)
							<tr>
								<th scope="row"> {{$quest->preguntas}} </th>
								<td><input type="radio" name="{{$quest->id}}" value="Si"></td>
								<td><input type="radio" name="{{$quest->id}}" value="No"></td>
								<td><input type="radio" name="{{$quest->id}}" value="Se desconoce"></td>
								<td><input type="text" name="{{$quest->id}}_detalles"/></td>
							</tr>
						@endforeach
							</tbody>
						</table>
						</div>
				</div>
				<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
				<a href="/paciente/{{$paciente->id}}" class="btn btn-default btn-lg btn-block">Cancelar</a>
			</div>


		</div> <!-- jumbotron -->

		<br/>

	</form>
@stop