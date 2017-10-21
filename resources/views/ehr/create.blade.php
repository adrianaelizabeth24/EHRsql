@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('ehr')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label>{{$paciente->id}}</label>
                    <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                    <input type="hidden" name="id_historial_tratamiento" value="{{$paciente->id_historial_tratamiento}}">
                    <label>{{$paciente->nombre}}</label>
                    <label>{{$paciente->apellido_paterno}}</label>
                    <label>{{$paciente->apellido_materno}}</label>
                </div>
            </div>
            <div class="container">
                <h2>EHR</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="number" name="numero_de_episodios" placeholder="Número de Episodios"/>
                    <br/>

                    <textarea name="problemas_psiquiatricos" placeholder="Problemas Psiquiatricos"></textarea>
                    <br/>

                    <textarea name="tratamientos_anteriores" placeholder="Tratamientos Anteriores"></textarea>
                    <br/>

                    <textarea name="antecedentes_psicologicos" placeholder="Antecedentes Psicologicos"></textarea>
                    <br/>

                    <textarea name="notas_antecedentes" placeholder="Notas Antecedentes"></textarea>
                    <br/>

                </div>
            </div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop