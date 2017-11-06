@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('DiagnositicoController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="jumbotron">

            <div class="container">
                <h2>Diagnósitico</h2>

                <div class="row">
					<div class="col-md-12">

						<input type="text" name="diagnostico_primario" placeholder="Diagnostico primario" value="{{$diagnostico->diagnostico_primario}}"/>
						<br/>
						<input type="text" name="codigo" placeholder="Código" value="{{$diagnostico->codigo}}"/>
						<br/>
						<input type="text" name="icg_s" placeholder="ICG-S" value="{{$diagnostico->icg_s}}"/>
						<br/>

						<label>Código</label>
						@if($diagnostico->código == "No se evaluó")
							<input type="radio" name="diagnostico" value="No se evaluó" checked>No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@elseif($diagnostico->código == "Normal, no enferno")
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno" checked>Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@elseif($diagnostico->código == "limite")
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite" checked>limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@elseif($diagnostico->código == "Levemente enfermo")
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo" checked>Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@elseif($diagnostico->código == "Moderadamente enfermo")
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo" checked>Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@elseif($diagnostico->código == "Marcadamente enfermo")
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo" checked>Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@elseif($diagnostico->código == "Severamente enfermo")
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo" checked>Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@elseif($diagnostico->código == "Extremadamente enfermo")
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo" checked>Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos">Entre los pacientes
							mas enfermos<br/>
							<br/>
						@else
							<input type="radio" name="diagnostico" value="No se evaluó">No se evaluó<br/>
							<input type="radio" name="diagnostico" value="Normal, no enferno">Normal, no enferno<br/>
							<input type="radio" name="diagnostico" value="limite">limite<br/>
							<input type="radio" name="diagnostico" value="Levemente enfermo">Levemente enfermo<br/>
							<input type="radio" name="diagnostico" value="Moderadamente enfermo">Moderadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Marcadamente enfermo">Marcadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Severamente enfermo">Severamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Extremadamente enfermo">Extremadamente enfermo<br/>
							<input type="radio" name="diagnostico" value="Entre los pacientes mas enfermos" checked>Entre los pacientes
							mas enfermos<br/>
							<br/>
						@endif

						<input type="text" name="diagnostico_secundario" placeholder="Diagnostico Secundario" value="{{$diagnostico->diagnostico_secundario}}"/>
						<br/>
						<input type="text" name="codigo_secunadrio" placeholder="Código" value="{{$diagnostico->codigo_secunadrio}}"/>
						<br/>
						<input type="text" name="icg_s_secunadrio" placeholder="ICG-S" value="{{$diagnostico->icg_s_secunadrio}}"/>
						<br/>


					</div>
				</div>
			</div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop

