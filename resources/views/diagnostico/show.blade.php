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
                            <label>Diagnostico Primario :</label><p>{{$historial->diagnostico_primario}}</p>
                            <label>Código :</label><p>{{$historial->codigo}}</p>
                            <label>ICG-S :</label><p>{{$historial->icg-s}}</p>

                            <div class="col-md-12">

                                <h2>Diagnóstico</h2>

                                <label>No se evaluó</label><p>{{$historial->no_se_evaluo}}</p>
                                <label>Normal, no enferno</label><p>{{$historial->normal}}</p>
                                <label>Límite</label><p>{{$historial->limite}}</p>
                                <label>Levemente enfermo</label><p>{{$historial->levemente_enfermo}}</p>
                                <label>Moderadamente enfermo</label><p>{{$historial->moderadamente_enfermo}}</p>
                                <label>Marcadamente enfermo</label><p>{{$historial->marcadamente_enfermo}}</p>
                                <label>Severamente enfermo</label><p>{{$historial->severamente_enfermo}}</p>
                                <label>Extremadamente enfermo</label><p>{{$historial->extremadamente_enfermo}}</p>
                                <label>Entre los pacientes mas enfermos</label><p>{{$historial->mas_enfermos}}</p>
                                
                            </div>

                            <label>Diagnostico Secundario :</label><p>{{$historial->diagnostico_secundario}}</p>
                            <label>Código :</label><p>{{$historial->codigo_secunadrio}}</p>
                            <label>ICG-S :</label><p>{{$historial->icg-s_secundario}}</p>


                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historial->id_paciente}}}" class="btn btn-info">Regresar</a>
                <a href="/diagnostico/{{{$historial->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('DiagnosticoController@destroy', $historial->id)}}" method="post" style="display: unset;">
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