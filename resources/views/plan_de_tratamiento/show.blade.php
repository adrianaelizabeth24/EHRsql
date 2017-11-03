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
            <h2>Nota Clinica</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        < class="personal_info">
                        <label>Seguimiento Farmacológico :</label><p>{{$plan->seguimiento_farmacologico}}</p><br/>
                        <label>Modalidad Terapeutica :</label><p>{{$plan->modalidad_terapeutica}}</p><br/>
                        <label>Comentarios :</label><p>{{$plan->comentarios}}</p><br/>
                        <label>Pronostico :</label><p>{{$plan->pronostico}}</p><br/>
                    </div>
                </div>
            </div>
            <a href="/paciente/{{{$plan->id_paciente}}}" class="btn btn-info">Regresar</a>
            <a href="/plan_tratamiento/{{{$plan->id}}}/edit" class="btn btn-warning">Editar</a>
            <form action="{{action('PlanTratamientoController@destroy', $plan->id)}}" method="post" style="display: unset;">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Borrar</button>
            </form>
        </div>
    </div> <!-- Complete patient info -->
    <hr>
@stop


