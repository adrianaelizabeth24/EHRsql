@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div id="div_pacientes" class="container">
            <h2>Historia Psiquiatrica Familiar</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            @foreach($trastorno as $tras)
                                <label>
                                    {{$tras->nombre}}
                                </label>
                                @foreach($valores as $val)
                                    @if($val->id_trastorno == $tras->id)
                                        {{$val->valor}}
                                    <br/>
                                        Familiar:
                                        {{$val->fam_trastorno}}
                                    @endif
                                @endforeach
                                <br/>
                            @endforeach

                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historia->id_paciente}}}" class="btn btn-info">Regresar</a>
				<a href="/historia_psiquiatrica/{{{$historia->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('HistoriaPsiquiatricaFamiliarController@destroy', $historia->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
                
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


