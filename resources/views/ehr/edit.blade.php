@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('EHRController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>EHR</h2>
				<div class="row">
					<div class="col-md-12">
						<input class="form-control" type="number" name="numero_de_episodios" placeholder="Número de Episodios" value="{{$ehr->numero_de_episodios}}"/>
						<br/>

						<textarea class="form-control" name="problemas_psiquiatricos" placeholder="Problemas Psiquiatricos" rows="6" cols="100">{{$ehr->problemas_psiquiatricos}}</textarea>
						<br/>

						<textarea class="form-control" name="tratamientos_anteriores" placeholder="Tratamientos Anteriores" rows="6" cols="100">{{$ehr->tratamientos_anteriores}}</textarea>
						<br/>

						<textarea class="form-control" name="antecedentes_psicologicos" placeholder="Antecedentes Psicologicos" rows="6" cols="100">{{$ehr->antecedentes_psicologicos}}</textarea>
						<br/>

						<textarea class="form-control" name="notas_antecedentes" placeholder="Notas Antecedentes" rows="6" cols="100">{{$ehr->notas_antecedentes}}</textarea>
						<br/>
						
						<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">

					</div>
				</div>
			</div>

        </div> <!-- jumbotron -->
    </form>
@stop