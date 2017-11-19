@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('exploracion_fisica')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>
                <div class="row">
                    <div class="col-md-8">
                        <label>{{$paciente->id}}</label>
                        <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                        <label>{{$paciente->nombre}}</label>
                        <label>{{$paciente->apellido_paterno}}</label>
                        <label>{{$paciente->apellido_materno}}</label>
                    </div>
                </div>
                <h2>Exploración Física</h2>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-xs-6" align="center">Condicion</th>
                                <th class="col-xs-1">Normal</th>
                                <th class="col-xs-1">Anormal</th>
                                <th class="col-xs-2">No Examinado</th>
                                <th class="col-xs-5">Especificar Hallazgos</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($preguntas as $quest)
                                <tr>
                                    <th scope="row"> {{$quest->nombre}} </th>
                                    <td><input type="radio" name="{{$quest->id}}" value="Normal"/></td>
                                    <td><input type="radio" name="{{$quest->id}}" value="Anormal"/></td>
                                    <td><input type="radio" name="{{$quest->id}}" value="No Examinado"/></td>
                                    <td><input type="text" name="{{$quest->id}}_detalles"
                                               placeholder="Especifica Hallazgos"/></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
                <div class="row col-xs-offset-2">

                    <div class="form-group col-xs-4">
                        <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
                    </div>

                    <div class="form-group col-xs-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div> <!-- jumbotron -->
        <br/>
    </form>
@stop