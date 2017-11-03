@extends('layouts.app')
@section('content')

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

						<label>Ezquizofrenia</label><br/>
						@if($historial->ezquizofrenia == 2)
							<input type="radio" name="ezquizofrenia" value="2" checked> Sí<br/>
							<input type="radio" name="ezquizofrenia" value="1"> No<br/>
							<input type="radio" name="ezquizofrenia" value="0"> Se desconoce<br/>
						@elseif($historial->ezquizofrenia == 1)
							<input type="radio" name="ezquizofrenia" value="2"> Sí<br/>
							<input type="radio" name="ezquizofrenia" value="1" checked> No<br/>
							<input type="radio" name="ezquizofrenia" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="ezquizofrenia" value="2"> Sí<br/>
							<input type="radio" name="ezquizofrenia" value="1"> No<br/>
							<input type="radio" name="ezquizofrenia" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Trastorno Bipolar</label><br/>
						@if($historial->bipolaridad == 2)
							<input type="radio" name="bipolaridad" value="2" checked> Sí<br/>
							<input type="radio" name="bipolaridad" value="1"> No<br/>
							<input type="radio" name="bipolaridad" value="0"> Se desconoce<br/>
						@elseif($historial->bipolaridad == 1)
							<input type="radio" name="bipolaridad" value="2"> Sí<br/>
							<input type="radio" name="bipolaridad" value="1" checked> No<br/>
							<input type="radio" name="bipolaridad" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="bipolaridad" value="2"> Sí<br/>
							<input type="radio" name="bipolaridad" value="1"> No<br/>
							<input type="radio" name="bipolaridad" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Alcoholismo</label><br/>
						@if($historial->alcoholismo == 2)
							<input type="radio" name="alcoholismo" value="2" checked> Sí<br/>
							<input type="radio" name="alcoholismo" value="1"> No<br/>
							<input type="radio" name="alcoholismo" value="0"> Se desconoce<br/>
						@elseif($historial->alcoholismo == 1)
							<input type="radio" name="alcoholismo" value="2"> Sí<br/>
							<input type="radio" name="alcoholismo" value="1" checked> No<br/>
							<input type="radio" name="alcoholismo" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="alcoholismo" value="2"> Sí<br/>
							<input type="radio" name="alcoholismo" value="1"> No<br/>
							<input type="radio" name="alcoholismo" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Drogadicción</label><br/>
						@if($historial->drogas == 2)
							<input type="radio" name="drogas" value="2" checked> Sí<br/>
							<input type="radio" name="drogas" value="1"> No<br/>
							<input type="radio" name="drogas" value="0"> Se desconoce<br/>
						@elseif($historial->drogas == 1)
							<input type="radio" name="drogas" value="2"> Sí<br/>
							<input type="radio" name="drogas" value="1" checked> No<br/>
							<input type="radio" name="drogas" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="drogas" value="2"> Sí<br/>
							<input type="radio" name="drogas" value="1"> No<br/>
							<input type="radio" name="drogas" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Depresión Mayor</label><br/>
						@if($historial->depresion == 2)
							<input type="radio" name="depresion" value="2" checked> Sí<br/>
							<input type="radio" name="depresion" value="1"> No<br/>
							<input type="radio" name="depresion" value="0"> Se desconoce<br/>
						@elseif($historial->depresion == 1)
							<input type="radio" name="depresion" value="2"> Sí<br/>
							<input type="radio" name="depresion" value="1" checked> No<br/>
							<input type="radio" name="depresion" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="depresion" value="2"> Sí<br/>
							<input type="radio" name="depresion" value="1"> No<br/>
							<input type="radio" name="depresion" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Disimia</label><br/>
						@if($historial->disimia == 2)
							<input type="radio" name="disimia" value="2" checked> Sí<br/>
							<input type="radio" name="disimia" value="1"> No<br/>
							<input type="radio" name="disimia" value="0"> Se desconoce<br/>
						@elseif($historial->disimia == 1)
							<input type="radio" name="disimia" value="2"> Sí<br/>
							<input type="radio" name="disimia" value="1" checked> No<br/>
							<input type="radio" name="disimia" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="disimia" value="2"> Sí<br/>
							<input type="radio" name="disimia" value="1"> No<br/>
							<input type="radio" name="disimia" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Ataques de Pánico</label><br/>
						@if($historial->panico == 2)
							<input type="radio" name="panico" value="2" checked> Sí<br/>
							<input type="radio" name="panico" value="1"> No<br/>
							<input type="radio" name="panico" value="0"> Se desconoce<br/>
						@elseif($historial->panico == 1)
							<input type="radio" name="panico" value="2"> Sí<br/>
							<input type="radio" name="panico" value="1" checked> No<br/>
							<input type="radio" name="panico" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="panico" value="2"> Sí<br/>
							<input type="radio" name="panico" value="1"> No<br/>
							<input type="radio" name="panico" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Agorafobia</label><br/>
						@if($historial->agorafobia == 2)
							<input type="radio" name="agorafobia" value="2" checked> Sí<br/>
							<input type="radio" name="agorafobia" value="1"> No<br/>
							<input type="radio" name="agorafobia" value="0"> Se desconoce<br/>
						@elseif($historial->agorafobia == 1)
							<input type="radio" name="agorafobia" value="2"> Sí<br/>
							<input type="radio" name="agorafobia" value="1" checked> No<br/>
							<input type="radio" name="agorafobia" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="agorafobia" value="2"> Sí<br/>
							<input type="radio" name="agorafobia" value="1"> No<br/>
							<input type="radio" name="agorafobia" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Trastorno Obsesivo Compulsivo</label><br/>
						@if($historial->obsesion == 2)
							<input type="radio" name="obsesion" value="2" checked> Sí<br/>
							<input type="radio" name="obsesion" value="1"> No<br/>
							<input type="radio" name="obsesion" value="0"> Se desconoce<br/>
						@elseif($historial->obsesion == 1)
							<input type="radio" name="obsesion" value="2"> Sí<br/>
							<input type="radio" name="obsesion" value="1" checked> No<br/>
							<input type="radio" name="obsesion" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="obsesion" value="2"> Sí<br/>
							<input type="radio" name="obsesion" value="1"> No<br/>
							<input type="radio" name="obsesion" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Fobia Social</label><br/>
						@if($historial->fobia_social == 2)
							<input type="radio" name="fobia_social" value="2" checked> Sí<br/>
							<input type="radio" name="fobia_social" value="1"> No<br/>
							<input type="radio" name="fobia_social" value="0"> Se desconoce<br/>
						@elseif($historial->fobia_social == 1)
							<input type="radio" name="fobia_social" value="2"> Sí<br/>
							<input type="radio" name="fobia_social" value="1" checked> No<br/>
							<input type="radio" name="fobia_social" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="fobia_social" value="2"> Sí<br/>
							<input type="radio" name="fobia_social" value="1"> No<br/>
							<input type="radio" name="fobia_social" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Ansiedad Generalizada</label><br/>
						@if($historial->ansiedad == 2)
							<input type="radio" name="ansiedad" value="2" checked> Sí<br/>
							<input type="radio" name="ansiedad" value="1"> No<br/>
							<input type="radio" name="ansiedad" value="0"> Se desconoce<br/>
						@elseif($historial->ansiedad == 1)
							<input type="radio" name="ansiedad" value="2"> Sí<br/>
							<input type="radio" name="ansiedad" value="1" checked> No<br/>
							<input type="radio" name="ansiedad" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="ansiedad" value="2"> Sí<br/>
							<input type="radio" name="ansiedad" value="1"> No<br/>
							<input type="radio" name="ansiedad" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Demencia</label><br/>
						@if($historial->demencia == 2)
							<input type="radio" name="demencia" value="2" checked> Sí<br/>
							<input type="radio" name="demencia" value="1"> No<br/>
							<input type="radio" name="demencia" value="0"> Se desconoce<br/>
						@elseif($historial->demencia == 1)
							<input type="radio" name="demencia" value="2"> Sí<br/>
							<input type="radio" name="demencia" value="1" checked> No<br/>
							<input type="radio" name="demencia" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="demencia" value="2"> Sí<br/>
							<input type="radio" name="demencia" value="1"> No<br/>
							<input type="radio" name="demencia" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Retraso Mental</label><br/>
						@if($historial->retraso_mental == 2)
							<input type="radio" name="retraso_mental" value="2" checked> Sí<br/>
							<input type="radio" name="retraso_mental" value="1"> No<br/>
							<input type="radio" name="retraso_mental" value="0"> Se desconoce<br/>
						@elseif($historial->retraso_mental == 1)
							<input type="radio" name="retraso_mental" value="2"> Sí<br/>
							<input type="radio" name="retraso_mental" value="1" checked> No<br/>
							<input type="radio" name="retraso_mental" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="retraso_mental" value="2"> Sí<br/>
							<input type="radio" name="retraso_mental" value="1"> No<br/>
							<input type="radio" name="retraso_mental" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<label>Trastorno de Personalidad</label><br/>
						@if($historial->trastorno_personalidad == 2)
							<input type="radio" name="trastorno_personalidad" value="2" checked> Sí<br/>
							<input type="radio" name="trastorno_personalidad" value="1"> No<br/>
							<input type="radio" name="trastorno_personalidad" value="0"> Se desconoce<br/>
						@elseif($historial->trastorno_personalidad == 1)
							<input type="radio" name="trastorno_personalidad" value="2"> Sí<br/>
							<input type="radio" name="trastorno_personalidad" value="1" checked> No<br/>
							<input type="radio" name="trastorno_personalidad" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="trastorno_personalidad" value="2"> Sí<br/>
							<input type="radio" name="trastorno_personalidad" value="1"> No<br/>
							<input type="radio" name="trastorno_personalidad" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<br/>
						<input type="text" name="tratamiento_espesificacion" placeholder="Especifique" value="{{$historia->tratamiento_espesificacion}}"/>
						<br/>

						<label>Otro Trastorno</label><br/>
						@if($historial->otro_trastorno == 2)
							<input type="radio" name="otro_trastorno" value="2" checked> Sí<br/>
							<input type="radio" name="otro_trastorno" value="1"> No<br/>
							<input type="radio" name="otro_trastorno" value="0"> Se desconoce<br/>
						@elseif($historial->otro_trastorno == 1)
							<input type="radio" name="otro_trastorno" value="2"> Sí<br/>
							<input type="radio" name="otro_trastorno" value="1" checked> No<br/>
							<input type="radio" name="otro_trastorno" value="0"> Se desconoce<br/>
						@else
							<input type="radio" name="otro_trastorno" value="2"> Sí<br/>
							<input type="radio" name="otro_trastorno" value="1"> No<br/>
							<input type="radio" name="otro_trastorno" value="0" checked> Se desconoce<br/>
						@endif
						<br/>

						<br/>
						<input type="text" name="otro_tratamiento_espesificacion" placeholder="Especifique" value="{{$historia->otro_tratamiento_espesificacion}}"/>
						<br/>

					</div>
				</div>
			</div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop