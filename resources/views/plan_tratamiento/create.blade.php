@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('plan_tratamiento')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Plan de Tratamiento <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
            <input type="hidden" name="id_paciente" value="{{$paciente->id}}">

            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="diagnostico primario" name="diagnostico_primario"/>
                    <br/>
                    <input type="text" placeholder="diagnostico secundario" name="diagnostico_secundario"/>
                    <br/>
                    <input type="text" placeholder="Seguimiento Farmacológico" name="seguimiento_farmacologico"/>
                    <br/>
                    <input type="text" placeholder="Modalidad Terapeutica" name="modalidad_terapeutica"/>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea name="comentarios" rows="10"
                              cols="40" placeholder="Comentarios"></textarea>
                    <br/>
                    <input type="text" name="pronostico" placeholder="Pronostico">
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                    <a href="/paciente/{{$paciente->id}}" class="btn btn-default btn-lg btn-block">Cancelar</a>
                </div>
            </div>
        </div>
        </div>
    </form>
@stop