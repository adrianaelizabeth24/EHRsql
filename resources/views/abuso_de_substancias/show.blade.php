@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <div class="jumbotron">
        <div class="container">
            <h2>Reporte de Abuso de Substancias de <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
            <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-6" align="center">Substancia</th>
                    <th class="col-xs-2">Si</th>
                    <th class="col-xs-2">No</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($substancias as $subs)
                    <tr>
                        <th scope="row">{{$subs->nombre}}</th>
                        @foreach ($substancia_abusada as $substancia_abs)
                            @if($substancia_abs->id_substancia == $subs->id)
                                @if($substancia_abs->valor == 1)
                                    <td>X</td>
                                    <td></td>
                                @else
                                    <td></td>
                                    <td>X</td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br/>
            <br/>

            <div class="col-xs-2">
                <a href="/paciente/{{{$abuso_de_substancias->id_paciente}}}" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
            </div>

            <div class="col-xs-2">
                <a href="/abuso_de_substancias/{{{$abuso_de_substancias->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
            </div>

            <form action="{{action('AbusoDeSubstanciasController@destroy', $abuso_de_substancias->id)}}" method="post" style="display: unset;">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">

                <div class="col-xs-2">
                    <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
                </div>
            </form>

        </div>
    </div> <!-- jumbotron -->


@stop