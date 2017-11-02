@extends('layouts.app')
@section('content')

	<form class="jumbotron" method="post" action="{{url('historia_clinica_familiar')}}">
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
				<h2>Historia Clínica Familiar</h2>
				<div class="row">
					<div class="col-md-12">
						<label>Del SNC (no psiquiátricas)</label><br/>
						<input type="radio" name="snc" value="2"> No<br/>
						<input type="radio" name="snc" value="1"> Se desconoce<br/>
						<input type="radio" name="snc" value="0"> Si<br/>
						<br/>

						<label>Trastornos Convulsivos</label><br/>
						<input type="radio" name="trastornos_convulsivos" value="2"> No<br/>
						<input type="radio" name="trastornos_convulsivos" value="1"> Se desconoce<br/>
						<input type="radio" name="trastornos_convulsivos" value="0"> Si<br/>
						<br/>

						<label>Respiratorias</label><br/>
						<input type="radio" name="respiratorias" value="2"> No<br/>
						<input type="radio" name="respiratorias" value="1"> Se desconoce<br/>
						<input type="radio" name="respiratorias" value="0"> Si<br/>
						<br/>

						<label>Cardiovasculares</label><br/>
						<input type="radio" name="cardiovasculares" value="2"> No<br/>
						<input type="radio" name="cardiovasculares" value="1"> Se desconoce<br/>
						<input type="radio" name="cardiovasculares" value="0"> Si<br/>
						<br/>

						<label>Hematopoyéticas / Linfáticas</label><br/>
						<input type="radio" name="hematopoyeticas_linfaticas" value="2"> No<br/>
						<input type="radio" name="hematopoyeticas_linfaticas" value="1"> Se desconoce<br/>
						<input type="radio" name="hematopoyeticas_linfaticas" value="0"> Si<br/>
						<br/>

						<label> Ojos / Oídos / Nariz / Garganta</label><br/>
						<input type="radio" name="ojos_oidos_nariz_garganta" value="2"> No<br/>
						<input type="radio" name="ojos_oidos_nariz_garganta" value="1"> Se desconoce<br/>
						<input type="radio" name="ojos_oidos_nariz_garganta" value="0"> Si<br/>
						<br/>

						<label>Hepáticas</label><br/>
						<input type="radio" name="hepaticas" value="2"> No<br/>
						<input type="radio" name="hepaticas" value="1"> Se desconoce<br/>
						<input type="radio" name="hepaticas" value="0"> Si<br/>
						<br/>

						<label>Dermatológicas / Del tejido conectivo</label><br/>
						<input type="radio" name="dermatologicas_tejido_conectivo" value="2"> No<br/>
						<input type="radio" name="dermatologicas_tejido_conectivo" value="1"> Se desconoce<br/>
						<input type="radio" name="dermatologicas_tejido_conectivo" value="0"> Si<br/>
						<br/>


						<label> Músculo - esqueléticas </label><br/>
						<input type="radio" name="musculo_esqueleticas" value="2"> No<br/>
						<input type="radio" name="musculo_esqueleticas" value="1"> Se desconoce<br/>
						<input type="radio" name="musculo_esqueleticas" value="0"> Si<br/>
						<br/>

						<label>Endocrinas / Metabólicas</label><br/>
						<input type="radio" name="endocrinas_metabolicas" value="2"> No<br/>
						<input type="radio" name="endocrinas_metabolicas" value="1"> Se desconoce<br/>
						<input type="radio" name="endocrinas_metabolicas" value="0"> Si<br/>
						<br/>


						<label> Gastrointestinales </label><br/>
						<input type="radio" name="gastro" value="2"> No<br/>
						<input type="radio" name="gastro" value="1"> Se desconoce<br/>
						<input type="radio" name="gastro" value="0"> Si<br/>
						<br/>


						<label> Renales / Genitourinarias </label><br/>
						<input type="radio" name="renales_genitourinarias" value="2"> No<br/>
						<input type="radio" name="renales_genitourinarias" value="1"> Se desconoce<br/>
						<input type="radio" name="renales_genitourinarias" value="0"> Si<br/>
						<br/>

						<label> Cáncer </label><br/>
						<input type="radio" name="cancer" value="2"> No<br/>
						<input type="radio" name="cancer" value="1"> Se desconoce<br/>
						<input type="radio" name="cancer" value="0"> Si<br/>
						<br/>

						<label>Alergia o hipersensibilidad a medicamentos</label><br/>
						<input type="radio" name="alergias" value="2"> No<br/>
						<input type="radio" name="alergias" value="1"> Se desconoce<br/>
						<input type="radio" name="alergias" value="0"> Si<br/>
						<br/>


						<label> Intervenciones quirúrgicas mayores previas </label><br/>
						<input type="radio" name="cirujia_mayor" value="2"> No<br/>
						<input type="radio" name="cirujia_mayor" value="1"> Se desconoce<br/>
						<input type="radio" name="cirujia_mayor" value="0"> Si<br/>
						<br/>


						<label> Intervenciones quirúrgicas programadas </label><br/>
						<input type="radio" name="cirujia_programada" value="2"> No<br/>
						<input type="radio" name="cirujia_programada" value="1"> Se desconoce<br/>
						<input type="radio" name="cirujia_programada" value="0"> Si<br/>
						<br/>

						<label> Otro </label><br/>
						<input type="radio" name="otro" value="2"> No<br/>
						<input type="radio" name="otro" value="1"> Se desconoce<br/>
						<input type="radio" name="otro" value="0"> Si<br/>
						<br/>

					</div>
				</div>
			</div>


		</div> <!-- jumbotron -->

		<br/>
		<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
	</form>
@stop