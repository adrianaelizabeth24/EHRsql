@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

<div class="jumbotron">
		<div class="container">
			<h2>Antecedentes Ginecobstetricos</h2>
			<div class="row">
				<div class="col-md-12">
					<label>Menarca :</label>{{$antecedentes->menarca}}
                    <br/>
					<label>Fecha : </label>{{$antecedentes->fecha}}
					<br/>
					<label>Ritmo :</label>
					<p>@foreach($ritmo as $opciones_ginecobstetricos_ritmo)
							@if($antecedentes->ritmo == $opciones_ginecobstetricos_ritmo->id)
								{{$opciones_ginecobstetricos_ritmo->nombre}}
							@endif
						@endforeach
					</p>
					
					<br/>
					<label>Tensión Premenstrual</label>
					<p>@foreach($tension_premenstrual as $opciones_ginecobstetricos_tension_premenstrual)
							@if($antecedentes->tension_premenstrual == $opciones_ginecobstetricos_tension_premenstrual->id)
								{{$opciones_ginecobstetricos_tension_premenstrual->nombre}}
							@endif
						@endforeach
					</p>
                    <br/>
					<label>Vida Sexual</label>
					@if($antecedentes->vida_sexual == 1)
						Si
                        <label>Edad Inicio: </label>{{$antecedentes->edad_inicio}}
                        <br/>
                        <label>Número de Compañeros Sexuales:</label>{{$antecedentes->numero_compañeros_sexuales}}
					@else
						No
					@endif
                    <br/>
					<label>Antecedentes Obstetricos: </label>
					<p>@foreach($antecedentes_obstetricos as $opciones_ginecobstetricos_antecedentes_obstetricos)
							@if($antecedentes->antecedentes_obstetricos == $opciones_ginecobstetricos_antecedentes_obstetricos->id)
								{{$opciones_ginecobstetricos_antecedentes_obstetricos->nombre}}
							@endif
						@endforeach
					</p>
                    <br/>

					<label>Embarazo Actual</label>
					@if($antecedentes->embarazo_actual == 1)
						Si
                        <label>Semanas de Embarazo : </label>{{$antecedentes->semanas_embarazo}}
					@else
						No
					@endif
					<br/>

					<label>Lactancia : </label>
					@if($antecedentes->lactancia == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Posibilidad de Embarazo :</label><br/>
					@if($antecedentes->posibilidad_embarazo == 1)
						Si
					@else
						No
					@endif
					<br/>

					<label>Anticonceptivos : </label>
					<p>@foreach($anticonceptivos as $opciones_ginecobstetricos_anticonceptivos)
							@if($antecedentes->anticonceptivos == $opciones_ginecobstetricos_anticonceptivos->id)
								{{$opciones_ginecobstetricos_anticonceptivos->nombre}}
							@endif
						@endforeach
					</p>
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