@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">


    <form class="jumbotron" method="post" action="{{url('trastornol')}}">
        {{csrf_field()}}

        <div class="container">
            <h2>Crear Trastorno Mental</h2>
            <div class="row">
                <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="Nombre" name="nombre" required/>
                </div>
            </div>

            <br/>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div>
    </form>
@stop