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
							<input type="radio" name="ezquizofrenia" value="2">No Sé<br/>
						@elseif($historia->ezquizofrenia == 0)
							<input type="radio" name="ezquizofrenia" value="1"> Sí<br/>
							<input type="radio" name="ezquizofrenia" value="0" checked> No<br/>
							<input type="radio" name="ezquizofrenia" value="2">No Sé<br/>
							@else
							<input type="radio" name="ezquizofrenia" value="1"> Sí<br/>
							<input type="radio" name="ezquizofrenia" value="0"> No<br/>
							<input type="radio" name="ezquizofrenia" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_ezquizofrenia" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_ezquizofrenia}}"/>
						<br/>

						<label>Bipolaridad</label><br/>
						@if($historia->bipolar == 1)
							<input type="radio" name="bipolaridad" value="1" checked> Sí <br/>
							<input type="radio" name="bipolaridad" value="0"> No <br/>
							<input type="radio" name="bipolaridad" value="2">No Sé<br/>
						@elseif($historia->bipolar == 0)
							<input type="radio" name="bipolaridad" value="1"> Sí <br/>
							<input type="radio" name="bipolaridad" value="0" checked> No <br/>
							<input type="radio" name="bipolaridad" value="2">No Sé<br/>
						@else
								<input type="radio" name="bipolaridad" value="1"> Sí <br/>
								<input type="radio" name="bipolaridad" value="0"> No <br/>
								<input type="radio" name="bipolaridad" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_bipolaridad" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_bipolar}}"/>
						<br/>

						<label>Alcoholismo</label><br/>
						@if($historia->alcoholismo == 1)
							<input type="radio" name="alcoholismo" value="1" checked>Sí<br/>
							<input type="radio" name="alcoholismo" value="0">No<br/>
							<input type="radio" name="alcoholismo" value="2">No Sé<br/>
						@elseif($historia->alcoholismo == 0)
							<input type="radio" name="alcoholismo" value="1">Sí<br/>
							<input type="radio" name="alcoholismo" value="0" checked>No<br/>
							<input type="radio" name="alcoholismo" value="2">No Sé<br/>
						@else
							<input type="radio" name="alcoholismo" value="1">Sí<br/>
							<input type="radio" name="alcoholismo" value="0">No<br/>
							<input type="radio" name="alcoholismo" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_alcoholismo" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_alcoholismo}}"/>
						<br/>

						<label>Drogas</label><br/>
						@if($historia->drogas == 1)
							<input type="radio" name="drogas" value="1" checked>Sí<br/>
							<input type="radio" name="drogas" value="0">No<br/>
							<input type="radio" name="drogas" value="2">No Sé<br/>
						@elseif($historia->drogas == 0)
							<input type="radio" name="drogas" value="1">Sí<br/>
							<input type="radio" name="drogas" value="0" checked>No<br/>
							<input type="radio" name="drogas" value="2">No Sé<br/>
						@else
							<input type="radio" name="drogas" value="1">Sí<br/>
							<input type="radio" name="drogas" value="0">No<br/>
							<input type="radio" name="drogas" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_drogas" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_drogas}}"/>
						<br/>

						<label>Depresión</label><br/>
						@if($historia->depresion == 1)
							<input type="radio" name="depresion" value="1" checked>Sí<br/>
							<input type="radio" name="depresion" value="0">No<br/>
							<input type="radio" name="depresion" value="2">No Sé<br/>
						@elseif($historia->depresion == 0)
							<input type="radio" name="depresion" value="1">Sí<br/>
							<input type="radio" name="depresion" value="0" checked>No<br/>
							<input type="radio" name="depresion" value="2">No Sé<br/>
						@else
							<input type="radio" name="depresion" value="1">Sí<br/>
							<input type="radio" name="depresion" value="0">No<br/>
							<input type="radio" name="depresion" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_depresion" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_depresion}}"/>
						<br/>

						<label>Disimia</label><br/>
						@if($historia->disimia == 1)
							<input type="radio" name="disimia" value="1" checked>Sí<br/>
							<input type="radio" name="disimia" value="0">No<br/>
							<input type="radio" name="disimia" value="2">No Sé<br/>
						@elseif($historia->disimia == 0)
							<input type="radio" name="disimia" value="1">Sí<br/>
							<input type="radio" name="disimia" value="0" checked>No<br/>
							<input type="radio" name="disimia" value="2">No Sé<br/>

						@else
								<input type="radio" name="disimia" value="1">Sí<br/>
								<input type="radio" name="disimia" value="0">No<br/>
								<input type="radio" name="disimia" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_disimia" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_disimia}}"/>
						<br/>

						<label>Panico</label><br/>
						@if($historia->panico == 1)
							<input type="radio" name="panico" value="1" checked>Sí<br/>
							<input type="radio" name="panico" value="0">No<br/>
							<input type="radio" name="panico" value="2">No Sé<br/>
						@elseif($historia->panico == 0)
							<input type="radio" name="panico" value="1">Sí<br/>
							<input type="radio" name="panico" value="0" checked>No<br/>
							<input type="radio" name="panico" value="2">No Sé<br/>
						@else
							<input type="radio" name="panico" value="1">Sí<br/>
							<input type="radio" name="panico" value="0">No<br/>
							<input type="radio" name="panico" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_panico" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_panico}}"/>
						<br/>

						<label>Agorafobia</label><br/>
						@if($historia->agorafobia == 1)
							<input type="radio" name="agorafobia" value="1" checked>Sí<br/>
							<input type="radio" name="agorafobia" value="0">No<br/>
							<br/>
						@elseif($historia->agorafobia == 0)
							<input type="radio" name="agorafobia" value="1">Sí<br/>
							<input type="radio" name="agorafobia" value="0" checked>No<br/>
							<br/>
						@else
							<input type="radio" name="agorafobia" value="1">Sí<br/>
							<input type="radio" name="agorafobia" value="0">No<br/>
							<input type="radio" name="agorafobia" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_agorafobia" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_agorafobia}}"/>
						<br/>

						<label>Obsesivo Compulsivo</label><br/>
						@if($historia->obsesivo_compulsivo == 1)
							<input type="radio" name="obsesion" value="1" checked>Si<br/>
							<input type="radio" name="obsesion" value="0">No<br/>
							<input type="radio" name="obsesion" value="2">No Sé<br/>
						@elseif($historia->obsesivo_compulsivo == 0)
							<input type="radio" name="obsesion" value="1">Si<br/>
							<input type="radio" name="obsesion" value="0" checked>No<br/>
							<input type="radio" name="obsesion" value="2">No Sé<br/>
						@else
							<input type="radio" name="obsesion" value="1">Si<br/>
							<input type="radio" name="obsesion" value="0">No<br/>
							<input type="radio" name="obsesion" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_obsesion" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_obsesion}}"/>
						<br/>

						<label>Fobia Social</label><br/>
						@if($historia->fobia_social == 1)
							<input type="radio" name="fobia_social" value="1" checked>Si<br/>
							<input type="radio" name="fobia_social" value="0">No<br/>
							<input type="radio" name="fobia_social" value="2" checked>No Sé<br/>
						@elseif($historia->fobia_social == 0)
							<input type="radio" name="fobia_social" value="1">Si<br/>
							<input type="radio" name="fobia_social" value="0" checked>No<br/>
							<input type="radio" name="fobia_social" value="2" checked>No Sé<br/>
						@else
							<input type="radio" name="fobia_social" value="1">Si<br/>
							<input type="radio" name="fobia_social" value="0">No<br/>
							<input type="radio" name="fobia_social" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_fobia_social" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_fobia_social}}"/>
						<br/>


						<label>Fobia Especifica</label><br/>
						@if($historia->fobia_especifica == 1)
							<input type="radio" name="fobia_especifica" value="1" checked>Sí<br/>
							<input type="radio" name="fobia_especifica" value="0">No<br/>
							<input type="radio" name="fobia_especifica" value="2" checked>No Sé<br/>
						@elseif($historia->fobia_especifica == 0)
							<input type="radio" name="fobia_especifica" value="1">Sí<br/>
							<input type="radio" name="fobia_especifica" value="0" checked>No<br/>
							<input type="radio" name="fobia_especifica" value="2" checked>No Sé<br/>
						@else
							<input type="radio" name="fobia_especifica" value="1">Sí<br/>
							<input type="radio" name="fobia_especifica" value="0">No<br/>
							<input type="radio" name="fobia_especifica" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_fobia_especifica" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_fobia_especifica}}"/>
						<br/>


						<label>Ansiedad</label><br/>
						@if($historia->ansiedad == 1)
							<input type="radio" name="Ansiedad" value="1" checked>Si<br/>
							<input type="radio" name="Ansiedad" value="0">No<br/>
							<input type="radio" name="Ansiedad" value="2">No Sé<br/>
						@elseif($historia->ansiedad == 0)
							<input type="radio" name="Ansiedad" value="1">Si<br/>
							<input type="radio" name="Ansiedad" value="0" checked>No<br/>
							<input type="radio" name="Ansiedad" value="2">No Sé<br/>
						@else
							<input type="radio" name="Ansiedad" value="1">Si<br/>
							<input type="radio" name="Ansiedad" value="0">No<br/>
							<input type="radio" name="Ansiedad" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_Ansiedad" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_ansiedad}}"/>
						<br/>

						<label>Demencia</label><br/>
						@if($historia->demencia == 1)
							<input type="radio" name="demencia" value="1" checked>Si<br/>
							<input type="radio" name="demencia" value="0">No<br/>
							<input type="radio" name="demencia" value="2">No Sé<br/>
						@elseif($historia->demencia == 0)
							<input type="radio" name="demencia" value="1">Si<br/>
							<input type="radio" name="demencia" value="0" checked>No<br/>
							<input type="radio" name="demencia" value="2">No Sé<br/>
						@else
							<input type="radio" name="demencia" value="1">Si<br/>
							<input type="radio" name="demencia" value="0">No<br/>
							<input type="radio" name="demencia" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_demencia" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_demencia}}"/>
						<br/>

						<label>Retraso Mental</label><br/>
						@if($historia->retraso_mental == 1)
							<input type="radio" name="retraso_mental" value="1" checked>Si<br/>
							<input type="radio" name="retraso_mental" value="0">No<br/>
							<input type="radio" name="retraso_mental" value="2" checked>No Sabe<br/>
						@elseif($historia->retraso_mental == 0)
							<input type="radio" name="retraso_mental" value="1">Si<br/>
							<input type="radio" name="retraso_mental" value="0" checked>No<br/>
							<input type="radio" name="retraso_mental" value="2" checked>No Sabe<br/>
						@else
							<input type="radio" name="retraso_mental" value="1">Si<br/>
							<input type="radio" name="retraso_mental" value="0">No<br/>
							<input type="radio" name="retraso_mental" value="2" checked>No Sabe<br/>
						@endif
						<br/>
						<input type="text" name="fam_retraso_mental" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_retraso_familiar}}"/>
						<br/>

						<label>Trastorno de Personalidad</label><br/>
						@if($historia->transtorno_personalidad == 1)
							<input type="radio" name="trastorno_personalidad" value="1" checked>Si<br/>
							<input type="radio" name="trastorno_personalidad" value="0">No<br/>
							<input type="radio" name="trastorno_personalidad" value="2">No Sé<br/>
						@elseif($historia->transtorno_personalidad == 0)
							<input type="radio" name="trastorno_personalidad" value="1">Si<br/>
							<input type="radio" name="trastorno_personalidad" value="0" checked>No<br/>
							<input type="radio" name="trastorno_personalidad" value="2">No Sé<br/>
						@else
							<input type="radio" name="trastorno_personalidad" value="1">Si<br/>
							<input type="radio" name="trastorno_personalidad" value="0">No<br/>
							<input type="radio" name="trastorno_personalidad" value="2" checked>No Sé<br/>
						@endif
						<br/>
						<input type="text" name="fam_trastorno_personalidad" placeholder="Especifique parentezco de familiar" value="{{$historia->fam_trastorno_personalidad}}"/>
						<br/>
					</div>
				</div>
			</div>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div>
        <!-- jumbotron -->

    </form>
@stop