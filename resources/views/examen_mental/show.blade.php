@extends('layouts.app')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="container">
            <h2>Examen Mental</h2>
        </div>
        <div id="div_pacientes" class="container">
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Escalas : </label><p>{{$examen->escalas}}</p>
                            <label>Hallazgos :</label><p>{{$examen->hallazgos}}</p>
                            <label>Diágnostico Primario :</label><p>{{$examen->diagnostico_primario}}</p>
                            <label>Diágnostico Secundario :</label><p>{{$examen->diagnostico_secundario}}</p>
                            <label>Plan de Tratamiento :</label><p>{{$examen->plan_tratamiento}}</p>
                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$examen->id_paciente}}}" class="btn btn-info">Regresar</a>
				<a href="/examen_mental/{{{$examen->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('ExamenMentalController@destroy', $examen->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


