@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('ExamenMentalController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>Examen Mental</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
					<input type="text" placeholder="Escalas" name="escalas" value="{{$examen->escalas}}"/>
					<br/>
					<textarea placeholder="hallazgos" rows="3" cols="50" name="hallazgos">{{$examen->hallazgos}}</textarea>
					<br/>
					<textarea placeholder="Diágnostico Primario" cols="100" rows="8" name="diagnostico_primario">{{$examen->diagnostico_primario}}</textarea>
					<br/>
					<textarea placeholder="Diágnostico Secundario" cols="100" rows="8" name="diagnostico_secundario">{{$examen->diagnostico_secundario}}</textarea>
					<br/>
					<textarea placeholder="Plan de Tratamiento" cols="100" rows="8" name="plan_tratamiento">{{$examen->plan_tratamiento}}</textarea>
                </div>
            </div>
        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
        </div>
    </form>
@stop