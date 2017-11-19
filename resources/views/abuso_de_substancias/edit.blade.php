@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('AbusoDeSubstanciasController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
				<h2>Reporte de Abuso de Substancias de <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
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
						@foreach($substancia as $subs)
							<tr>
								<th scope="row">{{$subs->nombre}}</th>
							@foreach ($substancia_abusada as $substancia_abs)
								@if($substancia_abs->id_substancia == $subs->id)
									@if($substancia_abs->valor == 1)
											<td><input type="radio" name="{{$subs->id}}" value="1" checked/></td>
											<td><input type="radio" name="{{$subs->id}}" value="0"/></td>
									@else
											<td><input type="radio" name="{{$subs->id}}" value="1"/></td>
											<td><input type="radio" name="{{$subs->id}}" value="0" checked/></td>
									@endif
								@endif
							@endforeach
							</tr>
						@endforeach
						</tbody>
					</table>
					</div>
				<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
				<a href="/abuso_de_substancias/{{$abuso_de_substancias->id}}" class="btn btn-default btn-lg btn-block">Cancelar</a>
				</div>
			</div>
    </form>
@stop