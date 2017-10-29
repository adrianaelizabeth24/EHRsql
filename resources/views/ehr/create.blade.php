@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('ehr')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>

				<label>{{$paciente->id}}</label>
				<input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
				<input type="hidden" name="id_historial_tratamiento" value="{{$paciente->id_historial_tratamiento}}">
				<label>{{$paciente->nombre}}</label>
				<label>{{$paciente->apellido_paterno}}</label>
				<label>{{$paciente->apellido_materno}}</label>


				<h2>EHR</h2>

				<div class="row">
					<div class="col-md-12">
						<input class="form-control" type="number" name="numero_de_episodios" placeholder="Número de Episodios"/>
						<br/>

						<textarea class="form-control" name="problemas_psiquiatricos" placeholder="Problemas Psiquiatricos" rows="6" cols="100"></textarea>
						<br/>

						<textarea class="form-control" name="tratamientos_anteriores" placeholder="Tratamientos Anteriores" rows="6" cols="100"></textarea>
						<br/>

						<textarea class="form-control" name="antecedentes_psicologicos" placeholder="Antecedentes Psicologicos" rows="6" cols="100"></textarea>
						<br/>

						<textarea class="form-control" name="notas_antecedentes" placeholder="Notas Antecedentes" rows="6" cols="100"></textarea>
						<br/>

					</div>
					<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
				</div>
			</div>
        </div> <!-- jumbotron -->
    </form>
@stop