@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('PlanTratamientoController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Plan de Tratamiento</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Seguimiento Farmacológico" name="seguimiento_farmacologico" value="{{$plan->seguimiento_farmacologico}}"/>
                    <br/>
                    <input type="text" placeholder="Modalidad Terapeutica" name="modalidad_terapeutica" value="{{$plan->modalidad_terapeutica}}"/>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea name="comentarios" rows="10"
                              cols="40" placeholder="Comentarios">{{$plan->comentarios}}</textarea>
                    <br/>
                    <input type="text" name="pronostico" placeholder="Pronostico" value="{{$plan->pronostico}}">
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                </div>
            </div>
        </div>
    </form>
@stop