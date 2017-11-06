@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('NotaClinicaController@update', $nota->id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="jumbotron">
            <div class="container">
                <h2>Nota Clinica</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="No. de sesión" name="no_de_sesion" value="{{$nota->no_de_sesion}}"/>
                    <br/>
                    <input type="number" placeholder="Edad" name="edad" value="{{$nota->edad}}"/>
                    <br/>
                    <input type="date" placeholder="Fecha" name="fecha" value="{{$nota->fecha}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input placeholder="Horario de consulta" type="time" name="horario_consulta"
                           value="{{$nota->horario_consulta}}"/>
                    <br/>
                    <input placeholder="Modalidad terapeutica" type="text" name="modalidad_terapeutica"
                           value="{{$nota->modalidad_terapeutica}}"/>
                    <br/>
                    <textarea name="comentarios" rows="10"
                              cols="40"
                              placeholder="Escribe aquí tus notas de evolución">{{$nota->comentarios}}</textarea>
                    <br/>
                    <textarea name="diagnostico" placeholder="diagnostico">{{$nota->diagnostico}}</textarea>
                    <br/>
                    <textarea name="planes_tratamiento"
                              placeholder="Planes y/o Tratamiento">{{$nota->planes_tratamiento}}</textarea>
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                </div>
            </div>
        </div>
    </form>
@stop