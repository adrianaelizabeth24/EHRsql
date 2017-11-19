@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">


    <form class="jumbotron" method="post" action="{{url('substancias')}}">
        {{csrf_field()}}

        <div class="container">
            <h2>Datos Substancias</h2>
            <div class="row">
                <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="Nombre" name="nombre" required/>
                </div>
            </div>

			<br/>
			<div class="row col-xs-offset-2">

                <div class="form-group col-xs-4">
                    <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
                </div>

                <div class="form-group col-xs-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </form>
@stop