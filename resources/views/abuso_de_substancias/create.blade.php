@extends('layouts.app')
@section('content')

	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('abuso_de_substancias')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">

				<h2>Crear Reporte Abuso de Substancias de <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
				<div class="row">
					<input type="hidden" name="id_paciente" value="{{$paciente->id}}">
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

				<div class="row col-xs-offset-2">

        			<div class="form-group col-xs-4">
         				<button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
        			</div>

        			<div class="form-group col-xs-4">
          				<button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
        			</div>
      			</div>
				

				</div>

			</div>
    </form>
@stop