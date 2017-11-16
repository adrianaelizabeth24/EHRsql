@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('HistoriaPsiquiatricaPreviaController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="jumbotron">

            <div class="container">
                <h2>Historial Tratamiento</h2>

				<div class="row">
					<div class="col-md-12">

						<input type="text" name="quien_lo_trato" placeholder="Doctor Responsable" value="{{$historial->quien_lo_trato}}"/>
						<br/>

						<label>Hospitalización</label><br/>
						@if($historial->hospitalizacion == 2)
							<input type="radio" name="hospitalizacion" value="2" checked> Sí<br/>
							<input type="radio" name="hospitalizacion" value="1"> No<br/>
							<input type="radio" name="hospitalizacion" value="0"> Se desconoce<br/>
						@elseif($historial->hospitalizacion == 1)
							<input type="radio" name="hospitalizacion" value="2"> Sí<br/>
							<input type="radio" name="hospitalizacion" value="1" checked> No<br/>
							<input type="radio" name="hospitalizacion" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="hospitalizacion" value="2"> Sí<br/>
							<input type="radio" name="hospitalizacion" value="1"> No<br/>
							<input type="radio" name="hospitalizacion" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<input class="form-control" type="number" name="primera_hospitalizacion" placeholder="Edad Primera Hospitalizacion" value="{{$historial->primera_hospitalizacion}}"/>
						<br/>

						<input class="form-control" type="number" name="no_hospitalizaciones" placeholder="Número de Hospitalizaciones" value="{{$historial->no_hospitalizaciones}}"/>
						<br/>

						<input class="form-control" type="number" name="duracion_hospitalizacion" placeholder="Duración de la última hospitalizacion" value="{{$historial->duracion_hospitalizacion}}"/>
						<br/>

						<input class="form-control" type="text" name="motivo_hospitalizacion" placeholder="Motivo última hospitalizacion" value="{{$historial->motivo_hospitalizacion}}"/>
						<br/>

						<input class="form-control" type="text" name="tratamiento" placeholder="Tratamiento" value="{{$historial->tratamiento}}"/>
						<br/>


						<h2>Lista de Problemas Psiquiatricos Previos</h2>

						@foreach($trastorno as $tras_previo)
                            <label>
                                {{$tras_previo->nombre}}
                            </label><br/>
                            @foreach ($valores as $values)
                                @if($tras_previo->id == $values->id_trastorno)
                                    @if($values->valor == 'Si')
                                        <input type="radio" name="{{$tras_previo->id}}" value="Si" checked> Sí<br/>
                                        <input type="radio" name="{{$tras_previo->id}}" value="No"> No<br/>
                                        <input type="radio" name="{{$tras_previo->id}}" value="No sé">No Sé<br/>
                                    @elseif($values->valor == 'No')
                                        <input type="radio" name="{{$tras_previo->id}}" value="Si"> Sí<br/>
                                        <input type="radio" name="{{$tras_previo->id}}" value="No" checked> No<br/>
                                        <input type="radio" name="{{$tras_previo->id}}" value="No sé">No Sé<br/>
                                    @else
                                        <input type="radio" name="{{$tras_previo->id}}" value="Si"> Sí<br/>
                                        <input type="radio" name="{{$tras_previo->id}}" value="No"> No<br/>
                                        <input type="radio" name="{{$tras_previo->id}}" value="No sé" checked>No Sé<br/>
                                    @endif
                                @endif
                            @endforeach
                            <br/>
                        @endforeach


					</div>
				</div>
			</div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop