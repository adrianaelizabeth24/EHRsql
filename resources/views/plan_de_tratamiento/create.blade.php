@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('plan_tratamiento')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>
                <div class="row">
                    <div class="col-md-8">
                        <label>{{$paciente->id}}</label>
                        <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                        <label>{{$paciente->nombre}}</label>
                        <label>{{$paciente->apellido_paterno}}</label>
                        <label>{{$paciente->apellido_materno}}</label>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2>Plan de Tratamiento</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
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
                </div>
            </div>
        </div>
    </form>
@stop