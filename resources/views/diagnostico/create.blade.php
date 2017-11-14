@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

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
                        <input placeholder="Diagnostico Primario" name="diagnostico_primario"/>
                        <label>Código</label><br/>
                        <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                        <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                        <input type="radio" name="codigo" value="limite">limite<br/>
                        <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                        <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                        <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                        <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                        <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                        <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los pacientes
                        mas enfermos<br/>
                        <br/>
                        <input placeholder="ICG-S" name="icg_s"/>

                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-12">
                        <input placeholder="Diagnostico Secundario" name="diagnostico_secundario"/>
                        <input placeholder="Código" name="codigo_secundario"/>
                        <input placeholder="ICG-S" name="icg_s_secundario"/>

                    </div>
                </div>

                <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
            </div>
        </div>
    </form>
@stop