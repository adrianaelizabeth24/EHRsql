@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <form method="post" action="{{action('HistoriaPsiquiatricaFamiliarController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>Historia Psiquiatrica Familiar</h2>

                <div class="row">
                    <div class="col-md-12">
                        @foreach($trastorno as $tras)
                            <label>
                                {{$tras->nombre}}
                            </label><br/>
                            @foreach ($valores as $values)
                                @if($tras->id == $values->id_trastorno)
                                    @if($values->valor == 'Si')
                                        <input type="radio" name="{{$tras->id}}" value="Si" checked> Sí<br/>
                                        <input type="radio" name="{{$tras->id}}" value="No"> No<br/>
                                        <input type="radio" name="{{$tras->id}}" value="No sé">No Sé<br/>
                                    @elseif($values->valor == 'No')
                                        <input type="radio" name="{{$tras->id}}" value="Si"> Sí<br/>
                                        <input type="radio" name="{{$tras->id}}" value="No" checked> No<br/>
                                        <input type="radio" name="{{$tras->id}}" value="No sé">No Sé<br/>
                                    @else
                                        <input type="radio" name="{{$tras->id}}" value="Si"> Sí<br/>
                                        <input type="radio" name="{{$tras->id}}" value="No"> No<br/>
                                        <input type="radio" name="{{$tras->id}}" value="No sé" checked>No Sé<br/>
                                    @endif
                                    <input type="text" name="fam_{{$tras->id}}"
                                           placeholder="Especifique parentezco de familiar"
                                           value="{{$values->fam_trastorno}}"/>
                                @endif
                            @endforeach
                            <br/>
                        @endforeach

                    </div>
                </div>
            </div>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div>
        <!-- jumbotron -->

    </form>
@stop