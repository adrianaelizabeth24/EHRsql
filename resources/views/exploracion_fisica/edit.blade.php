@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('ExploracionFisicaController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Exploración Física <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
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
                                @foreach($valores as $valor)
                                    <tr>
                                        @if($valor->id_opciones == $quest->id)
                                            <th scope="row"> {{$quest->nombre}} </th>
                                            @if($valor->valor == 'Normal')
                                                <td><input type="radio" name="{{$quest->id}}" value="Normal" checked/>
                                                </td>
                                                <td><input type="radio" name="{{$quest->id}}" value="Anormal"/></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="No Examinado"/>
                                                </td>
                                            @elseif($valor->valor == 'Anormal')
                                                <td><input type="radio" name="{{$quest->id}}" value="Normal"/></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="Anormal" checked/>
                                                </td>
                                                <td><input type="radio" name="{{$quest->id}}" value="No Examinado"/>
                                                </td>
                                            @else
                                                <td><input type="radio" name="{{$quest->id}}" value="Normal"/></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="Anormal"/></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="No Examinado"
                                                           checked/></td>
                                            @endif
                                            <td><input type="text" name="{{$quest->id}}_detalles" value="{{$valor->detalles}}"/></td>
                                        @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

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
        </div>
    </form>
@stop