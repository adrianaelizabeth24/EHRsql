@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('AbusoDeSubstanciasController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>Reporte Abuso de Substancias</h2>
				<div class="row">
					<div class="col-md-12">
						@foreach($substancias as $subs)
							<label>
								{{$subs->nombre}}
							</label><br/>
							@foreach ($substancia_abusada as $substancia_abs)
								@if($substancia_abs->id_substancia == $subs->id)
									@if($substancia_abs->valor == 1)
										<input type="radio" name="{{$subs->id}}" value="1" checked> Sí<br/>
										<input type="radio" name="{{$subs->id}}" value="0"> No<br/>
									@else
										<input type="radio" name="{{$subs->id}}" value="1"> Sí<br/>
										<input type="radio" name="{{$subs->id}}" value="0" checked> No<br/>
									@endif
								@endif
							@endforeach
							<br/>
						@endforeach
					</div>
				</div>
			</div>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div> <!-- jumbotron -->

    </form>
@stop