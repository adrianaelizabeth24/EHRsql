@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('HistoriaClinicaFamiliarController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Historia Clínica Familiar</h2>
                <div class="row">
                    <div class="col-md-12">
                        @foreach($preguntas as $quest)
                            <label>
                                {{$quest->preguntas}}
                            </label><br/>
                            @foreach ($valores as $values)
                                @if($quest->id == $values->id_pregunta)
                                    @if($values->valor == 'Si')
                                        <input type="radio" name="{{$quest->id}}" value="Si" checked> Sí<br/>
                                        <input type="radio" name="{{$quest->id}}" value="No"> No<br/>
                                        <input type="radio" name="{{$quest->id}}" value="Se desconoce">Se desconoce<br/>
                                    @elseif($values->valor == 'No')
                                        <input type="radio" name="{{$quest->id}}" value="Si"> Sí<br/>
                                        <input type="radio" name="{{$quest->id}}" value="No" checked> No<br/>
                                        <input type="radio" name="{{$quest->id}}" value="Se desconoce">Se desconoce<br/>
                                    @else
                                        <input type="radio" name="{{$quest->id}}" value="Si"> Sí<br/>
                                        <input type="radio" name="{{$quest->id}}" value="No"> No<br/>
                                        <input type="radio" name="{{$quest->id}}" value="Se desconoce" checked>Se desconoce<br/>
                                    @endif
                                @endif
                            @endforeach
                            <br/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        </div> <!-- jumbotron -->

        <br/>
        <div class="row col-xs-offset-2">

            <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
            </div>

            <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
            </div>
            
        </div>
    </form>
@stop