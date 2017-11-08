@extends('layouts.app')
@section('content')

<link href="{{ asset('css/paciente.css')}}" rel="stylesheet">

<form class="jumbotron" method="post" action="{{url('paciente')}}">
    {{csrf_field()}}

    <div class="container">
        <h2>Datos Generales</h2>
        <div class="row">
            <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Nombre Completo" name="nombre" required/>
                <input class="form-control" type="text" placeholder="Apellido Paterno" name="apellido_paterno" required/>
                <input class="form-control" type="text" placeholder="Apellido Materno" name="apellido_materno" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
				<label>Sexo: </label>
                <select name="sexo" required>
                    <option value="0" Sexo></option>
                    <option value="H">Hombre</option>
                    <option value="M">Mujer</option>
                    <option value="O">Otro</option>
                </select>
                <input class="form-control" type="text" placeholder="Motivo de consulta" name="motivo_consulta"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="form-control" type="number" placeholder="Edad" name="edad" required/>
                <input class="form-control" type="text" placeholder="Referido por" name="referido"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="form-control" type="text" class="allwidth" placeholder="Direccion" name="direccion" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="form-control allwidth" type="text" placeholder="Telefono" name="telefono" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="form-control" type="date" placeholder="Fecha de Nacimiento" name="nacimiento" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
				<label>Lugar de residencia: </label>
                <select name="residencia">
                    <option value="0">Lugar de Residencia</option>
                    @foreach($lugar_residencia as $lugar)
                        <option value="{{$lugar->id}}">{{$lugar->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Datos Demograficos</h2>

        <div class="row">
            <div class="col-md-12">
                <h4>Estado Civil</h4>
                @foreach($estado_civil as $edo)
                    <input type="radio" name="estado_civil" value="{{$edo->id}}"/>{{$edo->nombre}}<br/>
                @endforeach

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Religion" name="religion" required/>
                <input class="form-control" type="text" placeholder="Escolaridad" name="escolaridad" required/>
            </div>
        </div>

        <h4>¿Quién provee el sustento familiar?</h4>
        @foreach($sustento as $sustento_familiar)
            <input type="radio" name="sustento" value="{{$sustento_familiar->id}}"/>{{$sustento_familiar->nombre}}<br/>
        @endforeach

        <br>
        <input class="form-control" type="text" class="allwidth" placeholder="Ocupación del jefe de familia" name="ocupacion_sustento" required/>
        <input class="form-control" type="text" class="allwidth" placeholder="Ocupación del paciente" name="ocupacion_paciente" required/>
    </div>
    <br/>
    <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop