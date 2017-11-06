@extends('layouts.app')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar paciente">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div id="div_pacientes" class="container">
            <h2>Diagnósitico</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Diagnostico Primario :</label><p>{{$diagnostico->diagnostico_primario}}</p>
                            <label>Código :</label><p>{{$diagnostico->codigo}}</p>
                            <label>ICG-S :</label><p>{{$diagnostico->icg_s}}</p>

                            <label>Diagnostico Secundario :</label><p>{{$diagnostico->diagnostico_secundario}}</p>
                            <label>Código :</label><p>{{$diagnostico->codigo_secunadrio}}</p>
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
    </div> <!-- jumbotron -->
    <hr>
@stop