@extends('layouts.app')
@section('content')

<div class="jumbotron">
		<div class="container">
			<h2>Antecedentes Ginecobstetricos</h2>
			<div class="row">
				<div class="col-md-12">
					<label>Fecha : </label>{{$antecedentes->fecha}}
					<br/>
					<label>Ritmo Cardiaco :</label>{{$antecedentes->ritmo_cardiaco}}
					<br/>

					<label>Tensión Premenstrual</label>
					@if($antecedentes->tension_premenstrual == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Vida Sexual</label>
					@if($antecedentes->vida_sexual == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Número de Compañeros Sexuales:</label>{{$antecedentes->numero_compañeros_sexuales}}
					<br/>

					<label>Antecedentes Obstetricos</label>
					@if($antecedentes->antecedentes_obstetricos == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Embarazo Actual</label>
					@if($antecedentes->embarazo_actual == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Lactancia</label>
					@if($antecedentes->lactancia == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Posibilidad de Embarazo</label><br/>
					@if($antecedentes->posibilidad_embarazo == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Histerectomia</label><br/>
					@if($antecedentes->histerectomia == 1)
						Si
					@else
						No
					@endif
					<br/>

				</div>
			</div>
		<a href="/paciente/{{{$antecedentes->id_paciente}}}" class="btn btn-info">Regresar</a>
		<a href="/antecedentes_ginecobstetricos/{{{$antecedentes->id}}}/edit" class="btn btn-warning">Editar</a>
		<form action="{{action('AntecedentesGinecobstetricosController@destroy', $antecedentes->id)}}" method="post" style="display:unset;">
			{{csrf_field()}}
			<input name="_method" type="hidden" value="DELETE">
			<button class="btn btn-danger" type="submit">Borrar</button>
		</form>
		
	</div>
</div> <!-- jumbotron -->
@stop