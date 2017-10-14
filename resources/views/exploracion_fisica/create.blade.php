@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('exploracion_fisica')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label>{{$paciente->id}}</label>
                    <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                    <label>{{$paciente->nombre}}</label>
                    <label>{{$paciente->apellido_paterno}}</label>
                    <label>{{$paciente->apellido_materno}}</label>
                </div>
            </div>
            <div class="container">
                <h2>Exploración Física</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea name="condicion_general" placeholder="Condición general" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="piel" placeholder="Estado de piel" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="cabeza" placeholder="Estado de cabeza" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="ojos" placeholder="Estado de ojos" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="oidos_nariz_garganta" placeholder="Estado de oídos, nariz y garganta" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="cuello_tiroides" placeholder="Estado de cuello y tiroides" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="pulmones" placeholder="Estado de pulmones" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="corazon" placeholder="Estado de corazón" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="gastro" placeholder="Estado Gastrointestinal" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="lineaticos" placeholder="Estado de lineáticos" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="higado" placeholder="Estado del hígado" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="musculo_esqueletico" placeholder="Estado del músculo esquelético" rows="6" cols="100"></textarea>
                    <br/>
                    <textarea name="neurologico" placeholder="Estado neurológico" rows="6" cols="100"></textarea>
                </div>
            </div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop