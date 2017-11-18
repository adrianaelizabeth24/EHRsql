@extends('layouts.app')
@section('content')

	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('abuso_de_substancias')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">

				<h2>Crear Reporte Abuso de Substancias de</h2>
				<h2 style="color: #3097D1">{{$paciente->nombre}}{{$paciente->apellido_paterno}}</h2>

				<div class="row">
						<table class="table">
							<thead>
							<tr>
								<th class="col-xs-6" align="center">Substancia</th>
								<th class="col-xs-2">Si</th>
								<th class="col-xs-2">No</th>
							</tr>
							</thead>
							<tbody>
						@foreach($substancias as $substancia)
							<tr>
								<th scope="row">{{$substancia->nombre}}</th>
								<td><input type="radio" name="{{$substancia->id}}" value="1"/></td>
								<td><input type="radio" name="{{$substancia->id}}" value="0"/></td>
							</tr>
						@endforeach
							</tbody>
						</table>
					</div>
				<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
				</div>

			</div>
    </form>
@stop