@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <form method="post" action="{{action('HistoriaPsiquiatricaFamiliarController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>Historia Psiquiatrica Familiar <span
                            style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

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
                                    @foreach ($valores as $values)
                                        @if($tras->id == $values->id_trastorno)
                                            @if($values->valor == 'Si')
                                                <td><input type="radio" name="{{$tras->id}}" value="Si" checked></td>
                                                <td><input type="radio" name="{{$tras->id}}" value="No"></td>
                                                <td><input type="radio" name="{{$tras->id}}" value="No sé"></td>
                                            @elseif($values->valor == 'No')
                                                <td><input type="radio" name="{{$tras->id}}" value="Si"></td>
                                                <td><input type="radio" name="{{$tras->id}}" value="No" checked></td>
                                                <td><input type="radio" name="{{$tras->id}}" value="No sé"></td>
                                            @else
                                                <td><input type="radio" name="{{$tras->id}}" value="Si"></td>
                                                <td><input type="radio" name="{{$tras->id}}" value="No"></td>
                                                <td><input type="radio" name="{{$tras->id}}" value="No sé" checked></td>
                                            @endif
                                            <td><input type="text" name="fam_{{$tras->id}}"
                                                       value="{{$values->fam_trastorno}}"/></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

                <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                <a href="/historia_psiquiatrica/{{$historia->id}}" class="btn btn-default btn-lg btn-block">Cancelar</a>
            </div>
        </div>
        <!-- jumbotron -->

    </form>
@stop