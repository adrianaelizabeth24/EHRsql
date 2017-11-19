@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">

        <div id="div_pacientes" class="container">
            <h2>Diagnósitico <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Diagnostico Primario :</label><p>{{$diagnostico->diagnostico_primario}}</p>
                            <label>Código :</label><p>{{$diagnostico->codigo}}</p>
                            <label>ICG-S :</label><p>{{$diagnostico->icg_s}}</p>

                            <label>Diagnostico Secundario :</label><p>{{$diagnostico->diagnostico_secundario}}</p>
                            <label>Código :</label><p>{{$diagnostico->codigo_secundario}}</p>
                            <label>ICG-S :</label><p>{{$diagnostico->icg_s_secundario}}</p>


                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$diagnostico->id_paciente}}}" class="btn btn-info">Regresar</a>
                <a href="/diagnostico/{{{$diagnostico->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('DiagnosticoController@destroy', $diagnostico->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
@stop