@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('antecedentes_ginecobstetricos')}}">
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

                <h2>Antecedentes Ginecobstetricos</h2>

                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="number" name="menarca" placeholder="Menarca">
                        <br/>
                        <input class="form-control" type="date" name="fecha" placeholder="FUM"/>
                        <br/>

                        <label>Ritmo</label><br/>
                        <input type="radio" name="ritmo_cardiaco" value="Regular">Regular<br/>
                        <input type="radio" name="ritmo_cardiaco" value="Irregular">Irregular<br/>
                        <input type="radio" name="ritmo_cardiaco" value="Histerectomía">Histerectomía/Menopausia<br/>
                        <input type="radio" name="ritmo_cardiaco" value="No aplicable">No aplica<br/>
                        <br/>
                        <br/>

                        <label>Tensión Premenstrual</label><br/>
                        <input type="radio" name="tension_premenstrual" value="Nada">Nada<br/>
                        <input type="radio" name="tension_premenstrual" value="Ligera">Ligera<br/>
                        <input type="radio" name="tension_premenstrual" value="Moderada">Moderada<br/>
                        <input type="radio" name="tension_premenstrual" value="Marcada">Marcada<br/>
                        <input type="radio" name="tension_premenstrual" value="No aplica">No aplica<br/>
                        <br/>

                        <label>Vida Sexual</label><br/>
                        <input type="radio" name="vida_sexual" value="1"> Sí <input type="number" placeholder="Edad"
                                                                                    name="edad_inicio"/><br/>
                        <input type="radio" name="vida_sexual" value="0"> No <br/>
                        <br/>

                        <input class="form-control" type="number" name="numero_compañeros_sexuales"
                               placeholder="Número de Compañeros Sexuales">
                        <br/>

                        <label>Antecedentes Obstetricos</label><br/>
                        <input type="radio" name="antecedentes_obstetricos" value="Gesta">Gesta<br/>
                        <input type="radio" name="antecedentes_obstetricos" value="Para">Para<br/>
                        <input type="radio" name="antecedentes_obstetricos" value="Cesareas">Cesareas<br/>
                        <input type="radio" name="antecedentes_obstetricos" value="Abortos">Abortos<br/>
                        <input type="radio" name="antecedentes_obstetricos" value="No Aplica">No Aplica<br/>
                        <br/>

                        <label>Embarazo Actual</label><br/>
                        <input type="radio" name="embarazo_actual" value="1">Sí<input type="number"
                                                                                      placeholder="Semanas de embarazo"
                                                                                      name="semanas_embarazo"><br/>
                        <input type="radio" name="embarazo_actual" value="0">No<br/>
                        <input type="radio" name="embarazo_actual" value="2">Incierto<br/>
                        <br/>

                        <label>Lactancia</label><br/>
                        <input type="radio" name="lactancia" value="1">Sí<br/>
                        <input type="radio" name="lactancia" value="0">No<br/>
                        <br/>

                        <label>Posibilidad de Embarazo</label><br/>
                        <input type="radio" name="posibilidad_embarazo" value="1">Sí<br/>
                        <input type="radio" name="posibilidad_embarazo" value="0">No<br/>
                        <br/>

                        <label>Anticonceptivos</label><br/>
                        <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                        <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                        <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                        <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                        <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                        <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                        <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos Orales<br/>
                        <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                        <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                        <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido<br/>
                        <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        <br/>

                    </div>
                </div>
                <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
            </div>
        </div> <!-- jumbotron -->

    </form>
@stop