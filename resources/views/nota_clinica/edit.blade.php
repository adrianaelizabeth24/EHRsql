@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('NotaClinicaController@update', $nota->id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="jumbotron">
            <div class="container">
                <h2>Nota Clinica</h2>

				<div class="row">
					<div class="col-md-12">
						<label>No. de Sesión</label>
						<input class="form-control" type="text" placeholder="No. de sesión" name="no_de_sesion" value="{{$nota->no_de_sesion}}"/>
						<br/>
						<label>Edad</label>
						<input class="form-control" type="number" placeholder="Edad" name="edad" value="{{$nota->edad}}"/>
						<br/>
						<label>Fecha de Sesión</label>
						<input class="form-control" type="date" placeholder="Fecha" name="fecha" value="{{$nota->fecha}}"/>
						<br/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>Horario de consulta</label>
						<input class="form-control" placeholder="Horario de consulta" type="time" name="horario_consulta"
							   value="{{$nota->horario_consulta}}"/>
						<br/>
						<label>Modalidad terapeutica</label>
						<input class="form-control" placeholder="Modalidad terapeutica" type="text" name="modalidad_terapeutica"
							   value="{{$nota->modalidad_terapeutica}}"/>
						<br/>
						<label>Escribe aquí tus notas de evolución</label>
						<textarea class="form-control" name="comentarios" rows="10" cols="40" placeholder="Escribe aquí tus notas de evolución">{{$nota->comentarios}}</textarea>
						<br/>
						<label>Diagnóstico</label>
						<textarea class="form-control" name="diagnostico" placeholder="diagnostico">{{$nota->diagnostico}}</textarea>
						<br/>
						<label>Planes y/o Tratamiento</label>
						<textarea class="form-control" name="planes_tratamiento" placeholder="Planes y/o Tratamiento">{{$nota->planes_tratamiento}}</textarea>
						<br/>
						<input type="submit" value="Guardar" class="btn btn-info">
					</div>
				</div>
			</div>
        </div>
    </form>
@stop