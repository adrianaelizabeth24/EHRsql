@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('antecedentes_ginecobstetricos')}}">
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
                <h2>Antecedentes Ginecobstetricos</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="date" name="fecha" placeholder="Fecha"/>
                    <br/>

                    <input type="number" name="ritmo_cardiaco" placeholder="Ritmo Cardiáco">
                    <br/>

                    <label>Tensión Premenstrual</label><br/>
                    <input type="radio" name="tension_premenstrual" value="1"> Sí<br/>
                    <input type="radio" name="tension_premenstrual" value="0"> No<br/>
                    <br/>

                    <label>Vida Sexual</label><br/>
                    <input type="radio" name="vida_sexual" value="1"> Sí <br/>
                    <input type="radio" name="vida_sexual" value="0"> No <br/>
                    <br/>

                    <input type="number" name="numero_compañeros_sexuales" placeholder="Número de Compañeros Sexuales">
                    <br/>

                    <label>Antecedentes Obstetricos</label><br/>
                    <input type="radio" name="antecedentes_obstetricos" value="1">Sí<br/>
                    <input type="radio" name="antecedentes_obstetricos" value="0">No<br/>
                    <br/>

                    <label>Embarazo Actual</label><br/>
                    <input type="radio" name="embarazo_actual" value="1">Sí<br/>
                    <input type="radio" name="embarazo_actual" value="0">No<br/>
                    <br/>

                    <label>Lactancia</label><br/>
                    <input type="radio" name="lactancia" value="1">Sí<br/>
                    <input type="radio" name="lactancia" value="0">No<br/>
                    <br/>

                    <label>Posibilidad de Embarazo</label><br/>
                    <input type="radio" name="posibilidad_embarazo" value="1">Sí<br/>
                    <input type="radio" name="posibilidad_embarazo" value="0">No<br/>
                    <br/>

                    <label>Histerectomia</label><br/>
                    <input type="radio" name="histerectomia" value="1">Sí<br/>
                    <input type="radio" name="histerectomia" value="0">No<br/>
                    <br/>

                </div>
            </div>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
        </div> <!-- jumbotron -->

    </form>
@stop