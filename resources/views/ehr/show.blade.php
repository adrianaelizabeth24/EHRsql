@extends('layouts.app')
@section('content')

<div class="jumbotron">

	<div class="container">
		<h2>EHR</h2>

		<div class="row">
			<div class="col-md-12">
				<label>Número de Episodios</label>: {{$ehr->numero_de_episodios}}
				<br/>

				<label>Problemas Psiquiatricos: </label>{{$ehr->problemas_psiquiatricos}}
				<br/>

				<label>Tratamientos Anteriores: </label>{{$ehr->tratamientos_anteriores}}
				<br/>

				<label>Antecedentes Psicologicos</label>{{$ehr->antecedentes_psicologicos}}
				<br/>

				<label>Notas Antecedentes</label>{{$ehr->notas_antecedentes}}
				<br/>

			</div>
		</div>
		<a href="/paciente/{{{$ehr->id_paciente}}}" class="btn btn-info">Regresar</a>
		<a href="/ehr/{{{$ehr->id}}}/edit" class="btn btn-warning">Editar</a>
		<form action="{{action('EHRController@destroy', $ehr->id)}}" method="post" style="display:unset;">
			{{csrf_field()}}
			<input name="_method" type="hidden" value="DELETE">
			<button class="btn btn-danger" type="submit">Borrar</button>
		</form>
	</div>
</div> <!-- jumbotron -->


@stop