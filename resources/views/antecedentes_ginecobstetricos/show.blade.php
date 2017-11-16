@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

<div class="jumbotron">
		<div class="container">
			<h2>Antecedentes Ginecobstetricos</h2>




			<table class="table">
                <thead>
                <tr>
                    <th class="col-xs-4"></th>
                    <th class="col-xs-6"></th>
                </tr>
                </thead>
                <tbody>


                    <tr>
                        <td>
                            <label>Menarca</label>
                        </td>
                        <td>
                            {{$antecedentes->menarca}}
                        </td>
                    </tr>

                    <tr>
                   		<td>
                            <label>Ritmo :</label>
                        </td>
                        <td>
                            @foreach($ritmo as $opciones_ginecobstetricos_ritmo)
								@if($antecedentes->ritmo == $opciones_ginecobstetricos_ritmo->id)
									{{$opciones_ginecobstetricos_ritmo->nombre}}
								@endif
							@endforeach
                        </td>
                    </tr>


                    <tr>
                    	<td>
                            <label>Tensión Premenstrual</label>
                        </td>
                        <td>
                            @foreach($tension_premenstrual as $opciones_ginecobstetricos_tension_premenstrual)
								@if($antecedentes->tension_premenstrual == $opciones_ginecobstetricos_tension_premenstrual->id)
									{{$opciones_ginecobstetricos_tension_premenstrual->nombre}}
								@endif
							@endforeach
                        </td>
                    </tr>


                    <tr>
                    	<td>
                            <label>Vida Sexual</label>
                        </td>
                        <td>
                            @if($antecedentes->vida_sexual == 1)
								Si
							@else
								No
							@endif
						</td>
					</tr>


					@if($antecedentes->vida_sexual == 1)
					<tr>
                        <td><label>Edad Inicio: </label></td>
                        <td>{{$antecedentes->edad_inicio}}</td>
                    </tr>
                    <tr>
                        <td><label>Número de Compañeros Sexuales:</label></td>
                        <td>{{$antecedentes->numero_compañeros_sexuales}}</td>
                    </tr>
					@endif

					<tr>
                    	<td>
                            <label>Antecedentes Obstetricos: </label>
                        </td>
                        <td>
                            @foreach($antecedentes_obstetricos as $opciones_ginecobstetricos_antecedentes_obstetricos)
								@if($antecedentes->antecedentes_obstetricos == $opciones_ginecobstetricos_antecedentes_obstetricos->id)
									{{$opciones_ginecobstetricos_antecedentes_obstetricos->nombre}}
								@endif
							@endforeach
                        </td>
                    </tr>




                    <tr>
                    	<td>
                            <label>Embarazo Actual</label>
                        </td>
                        <td>
                            @if($antecedentes->embarazo_actual == 1)
								Si
							@else
								No
							@endif
						</td>
					</tr>


					@if($antecedentes->embarazo_actual == 1)
					<tr>
                        <td><label>Semanas de Embarazo</label></td>
                        <td>{{$antecedentes->semanas_embarazo}}</td>
                    </tr>
					@endif



					<tr>
                    	<td>
                            <label>Lactancia : </label>
                        </td>
                        <td>
                            @if($antecedentes->lactancia == 1)
								Si
							@else
								No
							@endif
						</td>
					</tr>



					<tr>
                    	<td>
                            <label>Posibilidad de Embarazo</label>
                        </td>
                        <td>
                            @if($antecedentes->posibilidad_embarazo == 1)
								Si
							@else
								No
							@endif
						</td>
					</tr>


					<tr>
                    	<td>
                            <label>Anticonceptivos</label>
                        </td>
                        <td>
                            @foreach($anticonceptivos as $opciones_ginecobstetricos_anticonceptivos)
								@if($antecedentes->anticonceptivos == $opciones_ginecobstetricos_anticonceptivos->id)
									{{$opciones_ginecobstetricos_anticonceptivos->nombre}}
								@endif
							@endforeach
						</td>
					</tr>

            	</tbody>
            </table>

        <div class="col-xs-2">
			<a href="/paciente/{{{$antecedentes->id_paciente}}}" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
		</div>

		<div class="col-xs-2">
			<a href="/antecedentes_ginecobstetricos/{{{$antecedentes->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
		</div>

		<form action="{{action('AntecedentesGinecobstetricosController@destroy', $antecedentes->id)}}" method="post" style="display:unset;">
			{{csrf_field()}}
			<input name="_method" type="hidden" value="DELETE">

			<div class="col-xs-2">
				<button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
			</div>
		</form>
		
	</div>
</div> <!-- jumbotron -->
@stop