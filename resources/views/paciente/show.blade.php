@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('css/paciente.css')}}" rel="stylesheet">

    <div class="jumbotron">
        <div class="container">
            <h2>Detalle del Paciente</h2>
			<div id="patient" role="tabpanel">
				<div class="row">
					<div class="col-md-6">
						<div class="personal_info">
							<label>Nombre Completo :</label>
							<p>{{$paciente->nombre}} {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}}</p>
							<label>Fecha de Nacimiento :</label>
							<p>{{$paciente->nacimiento}}</p>
							<label>Estado Civil :</label>
							<p>@foreach($estado_civil as $edo)
									@if($paciente->estado_civil == $edo->id)
									{{$edo->nombre}}
									@endif
								@endforeach
							</p>
							<label>Lugar de Residencia :</label>
							<p>@foreach($lugar_residencia as $lugar)
									@if($paciente->lugar_residencia == $lugar->id)
										{{$lugar->nombre}}
									@endif
								@endforeach
							</p>
							<label>Sustento :</label>
							<p>@foreach($sustento as $sus)
									@if($paciente->sustento == $sus->id)
										{{$sus->nombre}}
									@endif
								@endforeach</p>
							<label>Ocupación del paciente</label>
							<p>{{$paciente->ocupacion_paciente}}</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="personal_info">
							<label>Sexo :</label>
							<p>{{$paciente->sexo}}</p>
							<label>Religion :</label>
							<p>{{$paciente->religion}}</p>
							<label>Escolaridad :</label>
							<p>{{$paciente->escolaridad}}</p>
							<label>Ocupación del sustento</label>
							<p>{{$paciente->ocupacion_sustento}}</p>
						</div>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-xs-2">
						<a href="/paciente" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
					</div>

					<div class="col-xs-2">
					<a href="/paciente/{{{$paciente->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar Datos</strong></a>
					</div>

					
					<form action="{{action('PacienteController@destroy', $paciente->id)}}" method="post"
						  style="display: unset;">
						{{csrf_field()}}
						<input name="_method" type="hidden" value="DELETE">

						<div class="col-xs-2">
							<button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
						</div>
					</form>
				</div>
				

				<div class="row">
					<h3>Examenes</h3>
				</div>

				<div id="examenes">
					<div class="row">

						@if ($paciente->id_exploracion_fisica == 0)

							<div class="col-xs-4">
								<a href="/exploracion_fisica/paciente/{{{$paciente->id}}}"
								class="btn btn-info btn-lg btn-block"><strong>Agregar Examen Exploracion Fisica</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/exploracion_fisica/{{{$paciente->id_exploracion_fisica}}}"
								class="btn btn-success btn-lg btn-block"><strong>Ver Examen Exploracion Fisica</strong></a>
							</div>
						@endif

						@if ($paciente->id_examen_mental == 0)
							<div class="col-xs-4">
								<a href="/examen_mental/paciente/{{{$paciente->id}}}"
								class="btn btn-info btn-lg btn-block"><strong>Agregar Examen Mental</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/examen_mental/{{{$paciente->id_examen_mental}}}"
								class="btn btn-success btn-lg btn-block"><strong>Ver Examen Mental</strong></a>
							</div>
						@endif
					</div>
				</div>

				<div class="row">
					<h3>Historial</h3>
				</div>

				<div id="historial">
					<div class="row">

						@if ($paciente->id_historia_psiquiatrica_fam == 0)
							<div class="col-xs-4">
								<a href="/historia_psiquiatrica/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Historial Psiquiatrico</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/historia_psiquiatrica/{{{$paciente->id_historia_psiquiatrica_fam}}}"
								   class="btn btn-success btn-lg btn-block"><strong>Ver Historial Psiquiatrico</strong></a>
							</div>
						@endif




						@if ($paciente->id_historia_previa == 0)
							<div class="col-xs-4">
								<a href="/historia_psiquiatrica_previa/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Historia Psiquiatrica Previa</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/historia_psiquiatrica_previa/{{{$paciente->id_historia_previa}}}"
								   class="btn btn-success btn-lg btn-block"><strong>Ver Historia Psiquiatrica Previa</strong></a>
							</div>
						@endif



						@if ($paciente->id_historia_clinica_familiar == 0)
							<div class="col-xs-4">
								<a href="/historia_clinica_familiar/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Historia Clinico Familiar</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/historia_clinica_familiar/{{{$paciente->id_historia_clinica_familiar}}}"
								   class="btn btn-success btn-lg btn-block"><strong>Ver Historia Clínico Familiar</strong></a>
							</div>
						@endif
					</div>

					<br>

					<div class="row">


						@if ($paciente->id_abuso_de_substancias == 0)
							<div class="col-xs-4">
								<a href="/abuso_de_substancias/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Reporte Substancias</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/abuso_de_substancias/{{{$paciente->id_abuso_de_substancias}}}" class="btn btn-success btn-lg btn-block"><strong>Ver
									Reporte Substancias</strong></a>
							</div>
						@endif


						@if ($paciente->id_peea == 0)
							<div class="col-xs-4">
								<a href="/peea/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar PEEA</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/peea/{{{$paciente->id_peea}}}" class="btn btn-success btn-lg btn-block"><strong>Ver PEEA</strong></a>
							</div>
						@endif



						@if ($paciente->id_pat_nopat == 0)
							<div class="col-xs-4">
								<a href="/pat_nopat/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar Antecedentes
									Patológicos</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/pat_nopat/{{{$paciente->id_pat_nopat}}}" class="btn btn-success btn-lg btn-block"><strong>Ver Antecedentes
									Patológicos</strong></a>
							</div>
						@endif
					</div>

				</div>

				<h3>Antecedentes y consultas</h3>
				<br/>

				<div id="antecedentes">

					<div class="row">

						@if ($paciente->id_antecedentes_ginecobstetricos == 0)
							<div class="col-xs-4">
								<a href="/antecedentes_ginecobstetricos/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Antecedentes Ginecobstetricos</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/antecedentes_ginecobstetricos/{{{$paciente->id_antecedentes_ginecobstetricos}}}"
								   class="btn btn-success btn-lg btn-block"><strong>Ver Antecedentes Ginecobstetricos</strong></a>
							</div>
						@endif


						@if ($paciente->id_diagnostico == 0)
							<div class="col-xs-4">
								<a href="/diagnostico/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Diagnostico</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/diagnostico/{{{$paciente->id_diagnostico}}}"
								   class="btn btn-success btn-lg btn-block"><strong>Ver Diagnóstico</strong></a>
							</div>
						@endif

						@if ($paciente->id_plan_tratamiento == 0)
							<div class="col-xs-4">
								<a href="/plan_tratamiento/paciente/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Plan de Tratamiento</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/plan_tratamiento/{{{$paciente->id_plan_tratamiento}}}"
								   class="btn btn-success btn-lg btn-block"><strong>Ver Plan de Tratamiento</strong></a>
							</div>
						@endif
					</div>

					<br>

					<div class="row">

						@if ($paciente->id_nota_clinica == 0)
							<div class="col-xs-4">
								<a href="/nota_clinica/new/{{{$paciente->id}}}" class="btn btn-info btn-lg btn-block"><strong>Agregar
									Notas Clínicas</strong></a>
							</div>
						@else
							<div class="col-xs-4">
								<a href="/nota_clinica/paciente/{{{$paciente->id}}}"
								   class="btn btn-success btn-lg btn-block"><strong>Ver Notas Clínicas</strong></a>
							</div>
						@endif

					</div>


				</div>
			</div>
        </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


