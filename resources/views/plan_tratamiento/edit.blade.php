@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('PlanTratamientoController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Plan de Tratamiento <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

            <div class="row">
                <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="diagnostico primario" name="diagnostico_primario" value="{{$plan->diagnsotico_primario}}"/>
                    <br/>
                    <input class="form-control" type="text" placeholder="diagnostico secundario" name="diagnostico_secundario" value="{{$plan->diagnsotico_secundario}}"/>
                    <br/>
                    <input class="form-control" type="text" placeholder="Seguimiento Farmacológico" name="seguimiento_farmacologico" value="{{$plan->seguimiento_farmacologico}}"/>
                    <br/>
                    <input class="form-control" type="text" placeholder="Modalidad Terapeutica" name="modalidad_terapeutica" value="{{$plan->modalidad_terapeutica}}"/>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" name="comentarios" rows="10" cols="40" placeholder="Comentarios">{{$plan->comentarios}}</textarea>
                    <br/>
                    <input class="form-control" type="text" name="pronostico" placeholder="Pronostico" value="{{$plan->pronostico}}">
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info">
                    <a href="/plan_tratamiento/{{$plan->id}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </div>
        </div>
    </form>
@stop