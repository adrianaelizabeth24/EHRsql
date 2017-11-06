@extends('layouts.app')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar paciente">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div id="div_pacientes" class="container">
            <h2>Nota Clinica</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>No. de Sesión</label><p>{{$nota->no_de_sesion}}</p><br/>
                            <label>Edad :</label><p>{{$nota->edad}}</p><br/>
                            <label>Fecha :</label><p>{{$nota->fecha}}</p><br/>
                            <label>Horario Consulta :</label><p>{{$nota->horario_consulta}}</p><br/>
                            <label>Modalidad Terapeútica :</label><p>{{$nota->modalidad_terapeutica}}</p><br/>
                            <label>Evolucion :</label><p>{{$nota->comentarios}}</p><br/>
                            <label>Diagnostico :</label><p>{{$nota->diagnostico}}</p><br/>
                            <label>Planes y/o Tratamiento :</label>{{$nota->planes_tratamiento}}
                        </div>
                    </div>
                </div>
                <a href="/nota_clinica/paciente/{{{$id_paciente}}}" class="btn btn-info">Regresar</a>
                <a href="/nota_clinica/{{{$nota->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('NotaClinicaController@destroy', $nota->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </div>
        </div> <!-- Complete patient info -->
    <hr>
@stop


