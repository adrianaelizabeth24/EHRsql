@extends('layouts.app')
@section('content')

    <div class="jumbotron">
    <div class="container">
        <h2>Lista de Substancias Abusadas</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach($substancias as $subs)
                <label>
                    {{$subs->nombre}}
                </label>
                @foreach ($substancia_abusada as $substancia_abs)
                    @if($substancia_abs->id_substancia == $subs->id)
                        @if($substancia_abs->valor == 1)
                            Si
                        @else
                            No
                        @endif
                    @endif
                @endforeach
                <br/>
            @endforeach
        </div>
    </div>
        <a href="/paciente/{{{$abuso_de_substancias->id_paciente}}}" class="btn btn-info">Regresar</a>
        <form action="{{action('AbusoDeSubstanciasController@destroy', $abuso_de_substancias->id)}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Borrar</button>
        </form>
        <a href="/abuso_de_substancias/{{{$abuso_de_substancias->id}}}/edit" class="btn btn-warning">Editar</a>
    </div> <!-- jumbotron -->


@stop