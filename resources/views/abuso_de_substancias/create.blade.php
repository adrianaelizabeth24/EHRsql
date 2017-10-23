@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('abuso_de_substancias')}}">
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
                <h2>Historia Psiquiatrica Familiar</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @foreach($substancias as $substancia)
                    <label>{{$substancia->nombre}}</label><br/>
                    <input type="radio" name="{{$substancia->id}}" value="1"> Sí<br/>
                    <input type="radio" name="{{$substancia->id}}" value="0"> No<br/>
                    <br/>
                    @endforeach


                </div>
            </div>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div> <!-- jumbotron -->

    </form>
@stop