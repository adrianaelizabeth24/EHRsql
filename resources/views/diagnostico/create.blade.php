@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('diagnostico')}}">
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
            <div class="container">
                <h2>Diagnóstico</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input placeholder="Diagnostico primario" name="diagnostico_primario"/>
                    <input placeholder="Código" name="codigo"/>
                    <input placeholder="ICG-S" name="icg-s"/>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Evaluación</label>
                    <select name="evaluacion">
                        <option>No se evaluó</option>
                        <option>Normal, no enferno</option>
                        <option>Límite</option>
                        <option>Levemente enfermo</option>
                        <option>Moderadamente enfermo</option>
                        <option>Marcadamente enfermo</option>
                        <option>Severamente enfermo</option>
                        <option>Extremadamente enfermo</option>
                        <option>Entre los pacientes mas ebfermos</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input placeholder="Diagnostico Secundario" name="diagnostico_secundario"/>
                    <input placeholder="Código" name="codigo_secunadrio"/>
                    <input placeholder="ICG-S" name="icg-s_secundario"/>

                </div>
            </div>

            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div>

    </form>
@stop