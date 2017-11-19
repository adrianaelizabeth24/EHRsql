@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('historia_psiquiatrica')}}">
    {{csrf_field()}}

            <div class="container">
                <h2>Datos del paciente</h2>

				<input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
				<label>{{$paciente->nombre}}</label>
				<label>{{$paciente->apellido_paterno}}</label>
				<label>{{$paciente->apellido_materno}}</label>


            	<h2>Historia Psiquiatrica Familiar</h2>

            <div class="row">
                <div class="col-md-12">
                    @foreach($trastorno as $tras)
                    <label>{{$tras->nombre}}</label><br/>
                    <input type="radio" name="{{$tras->id}}" value="Si"> Sí<br/>
                    <input type="radio" name="{{$tras->id}}" value="No"> No<br/>
                    <input type="radio" name="{{$tras->id}}" value="No sé">No Sé<br/>
                    <input type="text" name="fam_{{$tras->id}}" placeholder="Especifique parentezco de familiar"/>
                    <br/>
                    @endforeach

        <div class="row col-xs-offset-2">

            <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
            </div>

            <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
            </div>
        
        </div>
		
        </div>
            </div>
    </form>
@stop