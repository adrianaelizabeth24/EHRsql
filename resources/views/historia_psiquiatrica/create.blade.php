@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('historia_psiquiatrica')}}">
    {{csrf_field()}}

            <div class="container">
            	<h2>Historia Psiquiatrica Familiar <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
            <input type="hidden" name="id_paciente" value="{{$paciente->id}}">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="col-xs-6" align="center"></th>
                            <th class="col-xs-1">Si</th>
                            <th class="col-xs-1">No</th>
                            <th class="col-xs-2">No sé</th>
                            <th class="col-xs-5">Especificar Parentezco</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($trastorno as $tras)
                        <tr>
                            <th scope="row"> {{$tras->nombre}} </th>
                            <td><input type="radio" name="{{$tras->id}}" value="Si"></td>
                            <td><input type="radio" name="{{$tras->id}}" value="No"></td>
                            <td><input type="radio" name="{{$tras->id}}" value="No sé"></td>
                            <td><input type="text" name="fam_{{$tras->id}}"/></td>
                    </tr>
                    @endforeach
                        </tbody>
                    </table>

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
            </div>
    </form>
@stop