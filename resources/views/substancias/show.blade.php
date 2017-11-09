@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


<div class="jumbotron">
	<div class="container">
		<h2>Detalle de la Substancia</h2>
		<br>
		<div id="patient" role="tabpanel">
			<div class="row">
				<div class="col-md-6">
					<div class="personal_info">
						<label>Nombre :</label><p>{{$substancias->nombre}}</p>
					</div>
				</div>

			</div>
			<br/>
			<a href="/substancias" class="btn btn-info">Regresar</a>
			<form action="{{action('SubstanciasController@destroy', $substancias->id)}}" method="post" style="display:unset;">
				{{csrf_field()}}
				<input name="_method" type="hidden" value="DELETE">
				<button class="btn btn-danger" type="submit">Borrar</button>
			</form>

			<br/>
		</div>
		</div> <!-- div_pacientes -->

	</div>
</div> <!-- jumbotron -->
<hr>
@stop


