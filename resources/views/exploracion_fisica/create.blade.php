@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('exploracion_fisica')}}">
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
                <h2>Exploración Física</h2>
				<div class="row">
					<div class="col-md-12">
						<textarea class="form-control" name="condicion_general" placeholder="Condición general" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="piel" placeholder="Estado de piel" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="cabeza" placeholder="Estado de cabeza" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="ojos" placeholder="Estado de ojos" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="oidos_nariz_garganta" placeholder="Estado de oídos, nariz y garganta" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="cuello_tiroides" placeholder="Estado de cuello y tiroides" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="pulmones" placeholder="Estado de pulmones" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="corazon" placeholder="Estado de corazón" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="gastro" placeholder="Estado Gastrointestinal" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="lineaticos" placeholder="Estado de lineáticos" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="higado" placeholder="Estado del hígado" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="musculo_esqueletico" placeholder="Estado del músculo esquelético" rows="6" cols="100"></textarea>
						<br/>
						<textarea class="form-control" name="neurologico" placeholder="Estado neurológico" rows="6" cols="100"></textarea>
					</div>
				</div>
			</div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop