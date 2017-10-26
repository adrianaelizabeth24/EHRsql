@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('abuso_de_substancias')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>

				<div class="row">
					<div class="col-md-8">
						<input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
						<label>{{$paciente->nombre}}</label>
						<label>{{$paciente->apellido_paterno}}</label>
						<label>{{$paciente->apellido_materno}}</label>
					</div>
				</div>

				<h2>Reporte Abuso de Substancias</h2>

				<div class="row">
					<div class="col-md-12">
						@foreach($substancias as $substancia)
						<label>{{$substancia->nombre}}</label><br/>
						<input type="radio" name="{{$substancia->id}}" value="1"> Sí<br/>
						<input type="radio" name="{{$substancia->id}}" value="0"> No<br/>
						<br/>
						@endforeach


					</div>
				</div>
				<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
			</div>
        </div> <!-- jumbotron -->

    </form>
@stop