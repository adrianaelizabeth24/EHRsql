@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('diagnostico')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <h2>Datos del paciente</h2>
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
                <h2>Diagnóstico</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input placeholder="Diagnostico Primario" name="diagnostico_primario"/>
                    <input placeholder="Código" name="codigo"/>
                    <input placeholder="ICG-S" name="icg-s"/>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                 
                    <h2>Diagnóstico</h2>
                    <label>No se evaluó</label><br/>
                            <input type="radio" name="no_se_evaluo" value="1"> Sí<br/>
                            <input type="radio" name="no_se_evaluo" value="0"> No<br/>
                            <br/>
                    <label>Normal, no enferno</label><br/>
                            <input type="radio" name="normal" value="1"> Sí<br/>
                            <input type="radio" name="normal" value="0"> No<br/>
                            <br/>
                    <label>Límite</label><br/>
                            <input type="radio" name="limite" value="1"> Sí<br/>
                            <input type="radio" name="limite" value="0"> No<br/>
                            <br/>
                    <label>Levemente enfermo</label><br/>
                            <input type="radio" name="levemente_enfermo" value="1"> Sí<br/>
                            <input type="radio" name="levemente_enfermo" value="0"> No<br/>
                            <br/>
                    <label>Moderadamente enfermo</label><br/>
                            <input type="radio" name="moderadamente_enfermo" value="1"> Sí<br/>
                            <input type="radio" name="moderadamente_enfermo" value="0"> No<br/>
                            <br/>
                    <label>Marcadamente enfermo</label><br/>
                            <input type="radio" name="marcadamente_enfermo" value="1"> Sí<br/>
                            <input type="radio" name="marcadamente_enfermo" value="0"> No<br/>
                            <br/>
                    <label>Severamente enfermo</label><br/>
                            <input type="radio" name="severamente_enfermo" value="1"> Sí<br/>
                            <input type="radio" name="severamente_enfermo" value="0"> No<br/>
                            <br/>
                    <label>Extremadamente enfermo</label><br/>
                            <input type="radio" name="extremadamente_enfermo" value="1"> Sí<br/>
                            <input type="radio" name="extremadamente_enfermo" value="1"> No<br/>
                            <br/>
                    <label>Entre los pacientes mas enfermos</label><br/>
                            <input type="radio" name="mas_enfermos" value="1"> Sí<br/>
                            <input type="radio" name="mas_enfermos" value="0"> No<br/>
                            <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input placeholder="Diagnostico Secundario" name="diagnostico_secundario"/>
                    <input placeholder="Código" name="codigo_secunadrio"/>
                    <input placeholder="ICG-S" name="icg-s_secundario"/>

                </div>
            </div>

            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div>

    </form>
@stop