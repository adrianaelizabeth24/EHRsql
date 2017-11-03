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

						<input type="text" name="diagnostico_primario" placeholder="Diagnostico primario" value="{{$historial->diagnostico_primario}}"/>
						<br/>
						<input type="text" name="codigo" placeholder="Código" value="{{$historial->codigo}}"/>
						<br/>
						<input type="text" name="icg-s" placeholder="ICG-S" value="{{$historial->icg-s}}"/>
						<br/>

						<h2>Diagnóstico</h2>

						<label>No se evaluó</label><br/>
						@if($historial->no_se_evaluo == 1)
							<input type="radio" name="no_se_evaluo" value="1" checked> Sí<br/>
							<input type="radio" name="no_se_evaluo" value="0"> No<br/>
						@else
							<input type="radio" name="no_se_evaluo" value="1"> Sí<br/>
							<input type="radio" name="no_se_evaluo" value="0" checked> No<br/>
						@endif
						<br/>

						<label>Normal, no enferno</label><br/>
						@if($historial->normal == 1)
							<input type="radio" name="normal" value="1" checked> Sí<br/>
							<input type="radio" name="normal" value="0"> No<br/>
						@else
							<input type="radio" name="normal" value="1"> Sí<br/>
							<input type="radio" name="normal" value="0" checked> No<br/>
						@endif
						<br/>

						<label>Límite</label><br/>
						@if($historial->limite == 1)
							<input type="radio" name="limite" value="1" checked> Sí<br/>
							<input type="radio" name="limite" value="0"> No<br/>
						@else
							<input type="radio" name="limite" value="1"> Sí<br/>
							<input type="radio" name="limite" value="0" checked> No<br/>
						@endif
						<br/>

						<label>Levemente enfermo</label><br/>
						@if($historial->levemente_enfermo == 1)
							<input type="radio" name="levemente_enfermo" value="1" checked> Sí<br/>
							<input type="radio" name="levemente_enfermo" value="0"> No<br/>
						@else
							<input type="radio" name="levemente_enfermo" value="1"> Sí<br/>
							<input type="radio" name="levemente_enfermo" value="0" checked> No<br/>
						@endif
						<br/>


						<label>Moderadamente enfermo</label><br/>
						@if($historial->moderadamente_enfermo == 1)
							<input type="radio" name="moderadamente_enfermo" value="1" checked> Sí<br/>
							<input type="radio" name="moderadamente_enfermo" value="0"> No<br/>
						@else
							<input type="radio" name="moderadamente_enfermo" value="1"> Sí<br/>
							<input type="radio" name="moderadamente_enfermo" value="0" checked> No<br/>
						@endif
						<br/>

						<label>Marcadamente enfermo</label><br/>
						@if($historial->marcadamente_enfermo == 1)
							<input type="radio" name="marcadamente_enfermo" value="1" checked> Sí<br/>
							<input type="radio" name="marcadamente_enfermo" value="0"> No<br/>
						@else
							<input type="radio" name="marcadamente_enfermo" value="1"> Sí<br/>
							<input type="radio" name="marcadamente_enfermo" value="0" checked> No<br/>
						@endif
						<br/>

						<label>Severamente enfermo</label><br/>
						@if($historial->severamente_enfermo == 1)
							<input type="radio" name="severamente_enfermo" value="1" checked> Sí<br/>
							<input type="radio" name="severamente_enfermo" value="0"> No<br/>
						@else
							<input type="radio" name="severamente_enfermo" value="1"> Sí<br/>
							<input type="radio" name="severamente_enfermo" value="0" checked> No<br/>
						@endif
						<br/>

						<label>Extremadamente enfermo</label><br/>
						@if($historial->extremadamente_enfermo == 1)
							<input type="radio" name="extremadamente_enfermo" value="1" checked> Sí<br/>
							<input type="radio" name="extremadamente_enfermo" value="0"> No<br/>
						@else
							<input type="radio" name="extremadamente_enfermo" value="1"> Sí<br/>
							<input type="radio" name="extremadamente_enfermo" value="0" checked> No<br/>
						@endif
						<br/>

						<label>Entre los pacientes mas enfermos</label><br/>
						@if($historial->mas_enfermos == 1)
							<input type="radio" name="mas_enfermos" value="1" checked> Sí<br/>
							<input type="radio" name="mas_enfermos" value="0"> No<br/>
						@else
							<input type="radio" name="mas_enfermos" value="1"> Sí<br/>
							<input type="radio" name="mas_enfermos" value="0" checked> No<br/>
						@endif
						<br/>

						<input type="text" name="diagnostico_secundario" placeholder="Diagnostico Secundario" value="{{$historial->diagnostico_secundario}}"/>
						<br/>
						<input type="text" name="codigo_secunadrio" placeholder="Código" value="{{$historial->codigo_secunadrio}}"/>
						<br/>
						<input type="text" name="icg-s_secunadrio" placeholder="ICG-S" value="{{$historial->icg-s_secunadrio}}"/>
						<br/>


					</div>
				</div>
			</div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop

