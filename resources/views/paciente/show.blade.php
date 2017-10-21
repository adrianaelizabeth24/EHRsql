@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="container">
            <h2>Detalle del Paciente</h2>
        </div>
		<br>
        <div id="div_pacientes" class="container">
			<div id="patient" role="tabpanel">
				<div class="row">
					<div class="col-md-6">
						<div class="personal_info">
							<label>Nombre Completo :</label><p>{{$paciente->nombre}} {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}}</p>
							<label>Fecha de Nacimiento :</label><p>{{$paciente->nacimiento}}</p>
							<label>Estado Civil :</label><p>{{$paciente->estado_civil}}</p>
							<label>Sustento :</label><p>{{$paciente->sustento}}</p>
							<label>Ocupación del paciente</label><p>{{$paciente->ocupacion_paciente}}</p>
							<label>Bebidas alcoholicas consumidas frecuentemente:</label><p>{{$paciente->bebidas_alcoholicas}}</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="personal_info">
							<label>Sexo :</label><p>{{$paciente->sexo}}</p>
							<label>Religion :</label><p>{{$paciente->religion}}</p>
							<label>Escolaridad :</label><p>{{$paciente->escolaridad}}</p>
							<label>Ocupación del sustento</label><p>{{$paciente->ocupacion_sustento}}</p>
							<label>Número de tasas de té y/o café diarias :</label><p>{{$paciente->cafe_te_numero_tasas}}</p>
							<label>Dudas relacionadas con el alcoholismo:</label><p>{{$paciente->dudas_alcoholismo}}</p>
						</div>
					</div>
				</div>
				</br>
				<a href="/paciente" class="btn btn-info">Regresar</a>
				<a href="/paciente/{{{$paciente->id}}}/edit" class="btn btn-warning">Editar Datos</a>
				<form action="{{action('PacienteController@destroy', $paciente->id)}}" method="post" style="display: unset;">
					{{csrf_field()}}
					<input name="_method" type="hidden" value="DELETE">
					<a class="btn btn-danger" type="submit">Borrar Paciente</a>
				</form>

				<br/>

				<h2>Examenes del paciente</h2>
				<br/>

				@if ($paciente->id_exploracion_fisica == 0)
					<a href="/exploracion_fisica/paciente/{{{$paciente->id}}}" class="btn btn-info">Agregar Examen Exploracion Fisica</a>
				@else
					<a href="/exploracion_fisica/{{{$paciente->id_exploracion_fisica}}}" class="btn btn-info">Ver Examen Exploracion Fisica</a>
				@endif

				@if ($paciente->id_examen_mental == 0)
					<a href="/examen_mental/paciente/{{{$paciente->id}}}" class="btn btn-info">Agregar Examen Mental</a>
				@else
					<a href="/examen_mental/{{{$paciente->id_examen_mental}}}" class="btn btn-info">Ver Examen Mental</a>
				@endif

				@if ($paciente->id_historia_psiquiatrica_fam == 0)
					<a href="/historia_psiquiatrica/paciente/{{{$paciente->id}}}" class="btn btn-info">Agregar Historial Psiquiatrico</a>
				@else
					<a href="/historia_psiquiatrica/{{{$paciente->id_historia_psiquiatrica_fam}}}" class="btn btn-info">Ver Historial Psiquiatrico</a>
				@endif
				@if ($paciente->id_historial_tratamiento == 0)
					<a href="/historial_tratamiento/paciente/{{{$paciente->id}}}" class="btn btn-info">Agregar Historial Tratamiento</a>
				@else
					<a href="/historial_tratamiento/{{{$paciente->id_historial_tratamiento}}}" class="btn btn-info">Ver Historial Tratamiento</a>
				@endif
				@if ($paciente->id_antecedentes_ginecobstetricos == 0)
					<a href="/antecedentes_ginecobstetricos/paciente/{{{$paciente->id}}}" class="btn btn-info">Agregar Antecedentes Ginecobstetricos</a>
				@else
					<a href="/antecedentes_ginecobstetricos/{{{$paciente->id_antecedentes_ginecobstetricos}}}" class="btn btn-info">Ver Antecedentes Ginecobstetricos</a>
				@endif
			</div>
        </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


