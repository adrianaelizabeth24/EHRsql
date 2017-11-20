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
                    <input class="form-control" type="text" placeholder="Diagnostico primario" name="diagnostico_primario"/>
                    <br/>
                    <input class="form-control" type="text" placeholder="Diagnostico secundario" name="diagnostico_secundario"/>
                    <br/>
                    <input class="form-control" type="text" placeholder="Seguimiento Farmacológico" name="seguimiento_farmacologico"/>
                    <br/>
                    <input class="form-control" type="text" placeholder="Modalidad Terapeutica" name="modalidad_terapeutica"/>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" name="comentarios" rows="10" cols="40" placeholder="Comentarios"></textarea>
                    <br/>
                    <input class="form-control" type="text" name="pronostico" placeholder="Pronostico">
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info">
                    <a href="/paciente/{{$paciente->id}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </div>
        </div>
    </form>
@stop