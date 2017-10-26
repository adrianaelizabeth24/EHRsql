@extends('layouts.app')
@section('content')
    <form method="post" action="{{action('HistoriaPsiquiatricaFamiliarController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>Historia Psiquiatrica Familiar</h2>

				<div class="row">
					<div class="col-md-12">
						<label>Ezquizofrenia</label><br/>
						@if($historia->ezquizofrenia == 1)
							<input type="radio" name="ezquizofrenia" value="1" checked> Sí<br/>
							<input type="radio" name="ezquizofrenia" value="0"> No<br/>
							<br/>
						@else
							<input type="radio" name="ezquizofrenia" value="1"> Sí<br/>
							<input type="radio" name="ezquizofrenia" value="0" checked> No<br/>
							<br/>
						@endif

						<label>Bipolaridad</label><br/>
						@if($historia->bipolar == 1)
							<input type="radio" name="bipolaridad" value="1" checked> Sí <br/>
							<input type="radio" name="bipolaridad" value="0"> No <br/>
							<br/>
						@else
							<input type="radio" name="bipolaridad" value="1"> Sí <br/>
							<input type="radio" name="bipolaridad" value="0" checked> No <br/>
							<br/>
						@endif

						<label>Alcoholismo</label><br/>
						@if($historia->alcoholismo == 1)
							<input type="radio" name="alcoholismo" value="1" checked>Sí<br/>
							<input type="radio" name="alcoholismo" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="alcoholismo" value="1">Sí<br/>
							<input type="radio" name="alcoholismo" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Drogas</label><br/>
						@if($historia->alcoholismo == 1)
							<input type="radio" name="drogas" value="1" checked>Sí<br/>
							<input type="radio" name="drogas" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="drogas" value="1">Sí<br/>
							<input type="radio" name="drogas" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Depresión</label><br/>
						@if($historia->depresion == 1)
							<input type="radio" name="depresion" value="1" checked>Sí<br/>
							<input type="radio" name="depresion" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="depresion" value="1">Sí<br/>
							<input type="radio" name="depresion" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Disimia</label><br/>
						@if($historia->disimia == 1)
							<input type="radio" name="disimia" value="1" checked>Sí<br/>
							<input type="radio" name="disimia" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="disimia" value="1">Sí<br/>
							<input type="radio" name="disimia" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Panico</label><br/>
						@if($historia->panico == 1)
							<input type="radio" name="panico" value="1" checked>Sí<br/>
							<input type="radio" name="panico" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="panico" value="1">Sí<br/>
							<input type="radio" name="panico" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Agorafobia</label><br/>
						@if($historia->agorafobia == 1)
							<input type="radio" name="agorafobia" value="1" checked>Sí<br/>
							<input type="radio" name="agorafobia" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="agorafobia" value="1">Sí<br/>
							<input type="radio" name="agorafobia" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Obsesivo Compulsivo</label><br/>
						@if($historia->obsesivo_compulsivo == 1)
							<input type="radio" name="obsesion" value="1" checked>Si<br/>
							<input type="radio" name="obsesion" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="obsesion" value="1">Si<br/>
							<input type="radio" name="obsesion" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Fobia Social</label><br/>
						@if($historia->fobia_social == 1)
							<input type="radio" name="fobia_social" value="1" checked>Si<br/>
							<input type="radio" name="fobia_social" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="fobia_social" value="1">Si<br/>
							<input type="radio" name="fobia_social" value="0" checked>No<br/>
							<br/>
						@endif


						<label>Fobia Especifica</label><br/>
						@if($historia->fobia_especifica == 1)
							<input type="radio" name="fobia_especifica" value="1" checked>Sí<br/>
							<input type="radio" name="fobia_especifica" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="fobia_especifica" value="1">Sí<br/>
							<input type="radio" name="fobia_especifica" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Ansiedad</label><br/>
						@if($historia->ansiedad == 1)
							<input type="radio" name="Ansiedad" value="1" checked>Si<br/>
							<input type="radio" name="Ansiedad" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="Ansiedad" value="1">Si<br/>
							<input type="radio" name="Ansiedad" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Demencia</label><br/>
						@if($historia->demencia == 1)
							<input type="radio" name="demencia" value="1" checked>Si<br/>
							<input type="radio" name="demencia" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="demencia" value="1">Si<br/>
							<input type="radio" name="demencia" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Retraso Mental</label><br/>
						@if($historia->retraso_mental == 1)
							<input type="radio" name="retraso_mental" value="1" checked>Si<br/>
							<input type="radio" name="retraso_mental" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="retraso_mental" value="1">Si<br/>
							<input type="radio" name="retraso_mental" value="0" checked>No<br/>
							<br/>
						@endif

						<label>Trastorno de Personalidad</label><br/>
						@if($historia->transtorno_personalidad == 1)
							<input type="radio" name="trastorno_personalidad" value="1" checked>Si<br/>
							<input type="radio" name="trastorno_personalidad" value="0">No<br/>
							<br/>
						@else
							<input type="radio" name="trastorno_personalidad" value="1">Si<br/>
							<input type="radio" name="trastorno_personalidad" value="0" checked>No<br/>
							<br/>
						@endif
					</div>
				</div>
			</div>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div>
        <!-- jumbotron -->

    </form>
@stop