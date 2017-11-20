@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">


    <form class="jumbotron" method="post" action="{{url('preguntasPatNoPat')}}">
        {{csrf_field()}}

        <div class="container">
            <h2>Pregunta</h2>
            <div class="row">
                <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="Nombre" name="preguntas" required/>
                </div>
            </div>

            <br/>
            <input type="submit" value="Guardar" class="btn btn-info">
        </div>
    </form>
@stop