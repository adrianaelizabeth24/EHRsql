@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('HistoriaClinicaFamiliarController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Historia Clínica Familiar <span
                            style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-xs-6" align="center"></th>
                                <th class="col-xs-1">Si</th>
                                <th class="col-xs-1">No</th>
                                <th class="col-xs-2">Se desconoce</th>
                                <th class="col-xs-5">Especificación</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($preguntas as $quest)
                                <tr>
                                    <th scope="row"> {{$quest->preguntas}} </th>
                                    @foreach ($valores as $values)
                                        @if($quest->id == $values->id_pregunta)
                                            @if($values->valor == 'Si')
                                                <td><input type="radio" name="{{$quest->id}}" value="Si" checked></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="No"></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="Se desconoce"></td>
                                            @elseif($values->valor == 'No')
                                                <td><input type="radio" name="{{$quest->id}}" value="Si"></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="No" checked></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="Se desconoce"></td>
                                            @else
                                                <td><input type="radio" name="{{$quest->id}}" value="Si"></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="No"></td>
                                                <td><input type="radio" name="{{$quest->id}}" value="Se desconoce"
                                                           checked></td>
                                            @endif
                                            <td><input type="text" name="{{$quest->id}}_detalles"
                                                       value="{{$values->detalles}}"/></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br/>
				<input type="submit" value="Guardar" class="btn btn-info"/>
                <a href="/historia_clinica_familiar/{{$historia->id}}" class="btn btn-default">Cancelar</a>
                
            </div>
        </div>

    </form>
@stop