@extends('layouts.app')
@section('content')


    <form class="jumbotron" method="post" action="{{url('estado_civil')}}">
        {{csrf_field()}}

        <div class="container">
            <h2>Crear Estado Civil</h2>
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