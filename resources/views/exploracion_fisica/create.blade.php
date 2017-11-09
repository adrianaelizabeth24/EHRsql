@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

	<form class="jumbotron" method="post" action="{{url('exploracion_fisica')}}">
		{{csrf_field()}}

		<div class="jumbotron">
			<div class="container">
				<h2>Datos del paciente</h2>
				<div class="row">
					<div class="col-md-8">
						<label>{{$paciente->id}}</label>
						<input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
						<label>{{$paciente->nombre}}</label>
						<label>{{$paciente->apellido_paterno}}</label>
						<label>{{$paciente->apellido_materno}}</label>
					</div>
				</div>
				<h2>Exploración Física</h2>
				<div class="row">
					<div class="col-md-12">
						<label>Condición general</label><br/>
						<input type="radio" name="condicion_general" value="2"> Normal<br/>
						<input type="radio" name="condicion_general" value="1"> Anormal<br/>
						<input type="radio" name="condicion_general" value="0"> No examinado<br/>
						<input type="text" name="txt_condicion_general" placeholder="Especifique condición general del paciente"/>
						<br/>

						<label>Estado de piel</label><br/>
						<input type="radio" name="piel" value="2"> Normal<br/>
						<input type="radio" name="piel" value="1"> Anormal<br/>
						<input type="radio" name="piel" value="0"> No examinado<br/>
						<input type="text" name="txt_piel" placeholder="Especifique la condición de la piel del paciente"/>
						<br/>

						<label>Estado de cabeza</label><br/>
						<input type="radio" name="cabeza" value="2"> Normal<br/>
						<input type="radio" name="cabeza" value="1"> Anormal<br/>
						<input type="radio" name="cabeza" value="0"> No examinado<br/>
						<input type="text" name="txt_cabeza" placeholder="Especifique la condición de la cabeza del paciente"/>
						<br/>

						<label>Estado de ojos</label><br/>
						<input type="radio" name="ojos" value="2"> Normal<br/>
						<input type="radio" name="ojos" value="1"> Anormal<br/>
						<input type="radio" name="ojos" value="0"> No examinado<br/>
						<input type="text" name="txt_ojos" placeholder="Especifique la condición de los ojos del paciente"/>
						<br/>

						<label>Estado de oídos, nariz y garganta</label><br/>
						<input type="radio" name="oidos_nariz_garganta" value="2"> Normal<br/>
						<input type="radio" name="oidos_nariz_garganta" value="1"> Anormal<br/>
						<input type="radio" name="oidos_nariz_garganta" value="0"> No examinado<br/>
						<input type="text" name="txt_oidos_nariz_garganta" placeholder="Especifique la condición de los oídos, nariz y garganta del paciente"/>
						<br/>

						<label>Estado de cuello y tiroides</label><br/>
						<input type="radio" name="cuello_tiroides" value="2"> Normal<br/>
						<input type="radio" name="cuello_tiroides" value="1"> Anormal<br/>
						<input type="radio" name="cuello_tiroides" value="0"> No examinado<br/>
						<input type="text" name="txt_cuello_tiroides" placeholder="Especifique la condición del cuello y tiroides del paciente"/>
						<br/>

						<label>Estado de pulmones</label><br/>
						<input type="radio" name="pulmones" value="2"> Normal<br/>
						<input type="radio" name="pulmones" value="1"> Anormal<br/>
						<input type="radio" name="pulmones" value="0"> No examinado<br/>
						<input type="text" name="txt_pulmones" placeholder="Especifique la condición de los pulmones del paciente"/>
						<br/>

						<label>Estado de corazón</label><br/>
						<input type="radio" name="corazon" value="2"> Normal<br/>
						<input type="radio" name="corazon" value="1"> Anormal<br/>
						<input type="radio" name="corazon" value="0"> No examinado<br/>
						<input type="text" name="txt_corazon" placeholder="Especifique la condición del corazón del paciente"/>
						<br/>


						<label>Estado Gastrointestinal</label><br/>
						<input type="radio" name="gastro" value="2"> Normal<br/>
						<input type="radio" name="gastro" value="1"> Anormal<br/>
						<input type="radio" name="gastro" value="0"> No examinado<br/>
						<input type="text" name="txt_gastro" placeholder="Especifique la condición gastrointestinal del paciente"/>
						<br/>

						<label>Estado de lineáticos</label><br/>
						<input type="radio" name="lineaticos" value="2"> Normal<br/>
						<input type="radio" name="lineaticos" value="1"> Anormal<br/>
						<input type="radio" name="lineaticos" value="0"> No examinado<br/>
						<input type="text" name="txt_lineaticos" placeholder="Especifique la condición lineática del paciente"/>
						<br/>


						<label>Estado del hígado</label><br/>
						<input type="radio" name="higado" value="2"> Normal<br/>
						<input type="radio" name="higado" value="1"> Anormal<br/>
						<input type="radio" name="higado" value="0"> No examinado<br/>
						<input type="text" name="txt_higado" placeholder="Especifique la condición del hígado del paciente"/>
						<br/>


						<label>Estado del músculo esquelético</label><br/>
						<input type="radio" name="musculo_esqueletico" value="2"> Normal<br/>
						<input type="radio" name="musculo_esqueletico" value="1"> Anormal<br/>
						<input type="radio" name="musculo_esqueletico" value="0"> No examinado<br/>
						<input type="text" name="txt_musculo_esqueletico" placeholder="Especifique la condición del musculo esquelético del paciente"/>
						<br/>

						<label>Estado neurológico</label><br/>
						<input type="radio" name="neurologico" value="2"> Normal<br/>
						<input type="radio" name="neurologico" value="1"> Anormal<br/>
						<input type="radio" name="neurologico" value="0"> No examinado<br/>
						<input type="text" name="txt_neurologico" placeholder="Especifique la condición neurológica del paciente"/>
						<br/>

					</div>
				</div>
			</div>


		</div> <!-- jumbotron -->

		<br/>
		<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
	</form>
@stop