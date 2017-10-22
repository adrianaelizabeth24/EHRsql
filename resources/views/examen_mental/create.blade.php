@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('examen_mental')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Informacion personal</h2>


                <div class="row">
                    <div class="col-md-8">
                        <label>{{$paciente->id}}</label>
                        <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                        <label>{{$paciente->nombre}}</label>
                        <label>{{$paciente->apellido_paterno}}</label>
                        <label>{{$paciente->apellido_materno}}</label>
                    </div>
                </div>
                <h2>Examen mental</h2>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" placeholder="Escalas" name="escalas"/>
                        <br/>
                        <textarea class="form-control" placeholder="hallazgos" rows="3" cols="50" name="hallazgos"></textarea>
                        <br/>
                        <textarea class="form-control" placeholder="Diágnostico Primario" cols="100" rows="8"
                                  name="diagnostico_primario"></textarea>
                        <br/>
                        <textarea class="form-control" placeholder="Diágnostico Secundario" cols="100" rows="8"
                                  name="diagnostico_secundario"></textarea>
                        <br/>
                        <textarea class="form-control" placeholder="Plan de Tratamiento" cols="100" rows="8"
                                  name="plan_tratamiento"></textarea>
                    </div>
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                </div>
            </div>
        </div>
    </form>
@stop