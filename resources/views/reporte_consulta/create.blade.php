@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/paciente.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('reporte_consulta')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>
            </div>

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
            <h2>Reporte de Consulta</h2>
            <div class="row">
                <div class="col-md-12">
                    <input class="form-control" type="date" placeholder="Fecha Actual" name="fecha" required/>
                    <input class="form-control" type="text" placeholder="Interrogatorio" name="interrogatorio" required/>
                    <input class="form-control" type="text" placeholder="Motivo" name="motivo" required/>

                    <label>Tuvo Episodio</label><br/>
                    <input type="radio" name="episodio" value="1">Sí<br/>
                    <input type="radio" name="episodio" value="0">No<br/>
                    <br/>

                    <input class="form-control" type="number" placeholder="Número de Episodios" name="numero_de_episodios"/>

                    <input class="form-control" type="number" placeholder="Edad Primer Episodio" name="edad_primer_episodio"/>
                    <input class="form-control" type="date" placeholder="Fecha último episodio" name="fecha_ultimo_episodio"/>

                    <input class="form-control" type="text" placeholder="tratamiento actual" name="tratamiento_actual"/>

                    <input class="form-control" type="text"  placeholder="tratamiento anterior" name="tratamiento_anterior" required/>
                </div>
            </div>

        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop