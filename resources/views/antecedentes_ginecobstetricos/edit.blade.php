@extends('layouts.app')
@section('content')

    <div class="jumbotron">
        <form method="post" action="{{action('AntecedentesGinecobstetricosController@update', $id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH"/>

            <div class="container">

                <h2>Antecedentes Ginecobstetricos</h2>

                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="number" name="menarca" placeholder="Menarca"
                               value="{{$antecedentes->menarca}}">
                        <br/>
                        <input class="form-control" type="date" name="fecha" placeholder="FUM"
                               value="{{$antecedentes->fecha}}"/>
                        <br/>

                        <label>Ritmo</label><br/>
                        @if($antecedentes->ritmo_cardiaco == 'Regular')
                            <input type="radio" name="ritmo_cardiaco" value="Regular" checked>Regular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Irregular">Irregular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Histerectomía">Histerectomía/Menopausia
                            <br/>
                            <input type="radio" name="ritmo_cardiaco" value="No aplicable">No aplica<br/>
                        @elseif($antecedentes->ritmo_cardiaco == 'Irregular')
                            <input type="radio" name="ritmo_cardiaco" value="Regular">Regular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Irregular" checked>Irregular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Histerectomía">Histerectomía/Menopausia
                            <br/>
                            <input type="radio" name="ritmo_cardiaco" value="No aplicable">No aplica<br/>
                        @elseif($antecedentes->ritmo_cardiaco == 'Histerectomía')
                            <input type="radio" name="ritmo_cardiaco" value="Regular">Regular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Irregular">Irregular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Histerectomía" checked>
                            Histerectomía/Menopausia<br/>
                            <input type="radio" name="ritmo_cardiaco" value="No aplicable">No aplica<br/>
                        @else
                            <input type="radio" name="ritmo_cardiaco" value="Regular">Regular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Irregular">Irregular<br/>
                            <input type="radio" name="ritmo_cardiaco" value="Histerectomía">Histerectomía/Menopausia
                            <br/>
                            <input type="radio" name="ritmo_cardiaco" value="No aplicable">No aplica<br/>
                        @endif
                        <br/>


                        <label>Tensión Premenstrual</label><br/>
                        @if($antecedentes->tension_premenstrual == 'Nada')
                            <input type="radio" name="tension_premenstrual" value="Nada" checked>Nada<br/>
                            <input type="radio" name="tension_premenstrual" value="Ligera">Ligera<br/>
                            <input type="radio" name="tension_premenstrual" value="Moderada">Moderada<br/>
                            <input type="radio" name="tension_premenstrual" value="Marcada">Marcada<br/>
                            <input type="radio" name="tension_premenstrual" value="No aplica">No aplica<br/>
                        @elseif($antecedentes->tension_premenstrual == 'Ligera')
                            <input type="radio" name="tension_premenstrual" value="Nada">Nada<br/>
                            <input type="radio" name="tension_premenstrual" value="Ligera" checked>Ligera<br/>
                            <input type="radio" name="tension_premenstrual" value="Moderada">Moderada<br/>
                            <input type="radio" name="tension_premenstrual" value="Marcada">Marcada<br/>
                            <input type="radio" name="tension_premenstrual" value="No aplica">No aplica<br/>
                        @elseif($antecedentes->tension_premenstrual == 'Moderada')
                            <input type="radio" name="tension_premenstrual" value="Nada">Nada<br/>
                            <input type="radio" name="tension_premenstrual" value="Ligera">Ligera<br/>
                            <input type="radio" name="tension_premenstrual" value="Moderada" checked>Moderada<br/>
                            <input type="radio" name="tension_premenstrual" value="Marcada">Marcada<br/>
                            <input type="radio" name="tension_premenstrual" value="No aplica">No aplica<br/>
                        @elseif($antecedentes->tension_premenstrual == 'Marcada')
                            <input type="radio" name="tension_premenstrual" value="Nada">Nada<br/>
                            <input type="radio" name="tension_premenstrual" value="Ligera">Ligera<br/>
                            <input type="radio" name="tension_premenstrual" value="Moderada">Moderada<br/>
                            <input type="radio" name="tension_premenstrual" value="Marcada" checked>Marcada<br/>
                            <input type="radio" name="tension_premenstrual" value="No aplica">No aplica<br/>
                        @else
                            <input type="radio" name="tension_premenstrual" value="Nada">Nada<br/>
                            <input type="radio" name="tension_premenstrual" value="Ligera">Ligera<br/>
                            <input type="radio" name="tension_premenstrual" value="Moderada">Moderada<br/>
                            <input type="radio" name="tension_premenstrual" value="Marcada">Marcada<br/>
                            <input type="radio" name="tension_premenstrual" value="No aplica" checked>No aplica<br/>
                        @endif
                        <br/>

                        <label>Vida Sexual</label><br/>
                        @if($antecedentes->vida_sexual == 1)
                            <input type="radio" name="vida_sexual" value="1" checked> Sí
                            <input type="number" placeholder="Edad"
                                   name="edad_inicio" value="{{$antecedentes->edad_inicio}}"/><br/>
                            <input type="radio" name="vida_sexual" value="0"> No <br/>
                        @else
                            <input type="radio" name="vida_sexual" value="1"> Sí <input type="number" placeholder="Edad"
                                                                                        value="edad_inicio"/><br/>
                            <input type="radio" name="vida_sexual" value="0" checked> No <br/>
                        @endif
                        <br/>

                        <input class="form-control" type="number" name="numero_compañeros_sexuales"
                               placeholder="Número de Compañeros Sexuales"
                               value="{{$antecedentes->numero_compañeros_sexuales}}">
                        <br/>

                        <label>Antecedentes Obstetricos</label><br/>
                        @if($antecedentes->antecedentes_obstetricos == 'Gesta')
                            <input type="radio" name="antecedentes_obstetricos" value="Gesta" checked>Gesta<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Para">Para<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Cesareas">Cesareas<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Abortos">Abortos<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="No Aplica">No Aplica<br/>
                        @elseif($antecedentes->antecedentes_obstetricos == 'Para')
                            <input type="radio" name="antecedentes_obstetricos" value="Gesta">Gesta<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Para" checked>Para<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Cesareas">Cesareas<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Abortos">Abortos<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="No Aplica">No Aplica<br/>
                        @elseif($antecedentes->antecedentes_obstetricos == 'Cesareas')
                            <input type="radio" name="antecedentes_obstetricos" value="Gesta">Gesta<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Para">Para<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Cesareas" checked>Cesareas<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Abortos">Abortos<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="No Aplica">No Aplica<br/>
                        @elseif($antecedentes->antecedentes_obstetricos == 'Abortos')
                            <input type="radio" name="antecedentes_obstetricos" value="Gesta">Gesta<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Para">Para<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Cesareas">Cesareas<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Abortos" checked>Abortos<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="No Aplica">No Aplica<br/>
                        @else
                            <input type="radio" name="antecedentes_obstetricos" value="Gesta">Gesta<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Para">Para<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Cesareas">Cesareas<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="Abortos">Abortos<br/>
                            <input type="radio" name="antecedentes_obstetricos" value="No Aplica" checked>No Aplica<br/>
                        @endif
                        <br/>

                        <label>Embarazo Actual</label><br/>
                        @if($antecedentes->embarazo_actual == 1)
                            <input type="radio" name="embarazo_actual" value="1" checked>Sí
                            <input type="number" placeholder="Semanas de embarazo"
                                   name="semanas_embarazo" value="{{$antecedentes->semanas_embarazo}}"><br/>
                            <input type="radio" name="embarazo_actual" value="0">No<br/>
                            <input type="radio" name="embarazo_actual" value="2">Incierto<br/>
                        @elseif($antecedentes->embarazo_actual == 0)
                            <input type="radio" name="embarazo_actual" value="1">Sí<input type="number"
                                                                                          placeholder="Semanas de embarazo"
                                                                                          name="semanas_embarazo"><br/>
                            <input type="radio" name="embarazo_actual" value="0" checked>No<br/>
                            <input type="radio" name="embarazo_actual" value="2">Incierto<br/>
                        @else
                            <input type="radio" name="embarazo_actual" value="1">Sí<input type="number"
                                                                                          placeholder="Semanas de embarazo"
                                                                                          name="semanas_embarazo"><br/>
                            <input type="radio" name="embarazo_actual" value="0">No<br/>
                            <input type="radio" name="embarazo_actual" value="2" checked>Incierto<br/>
                        @endif
                        <br/>

                        <label>Lactancia</label><br/>
                        @if($antecedentes->lactancia == 1)
                            <input type="radio" name="lactancia" value="1" checked>Sí<br/>
                            <input type="radio" name="lactancia" value="0">No<br/>
                        @else
                            <input type="radio" name="lactancia" value="1">Sí<br/>
                            <input type="radio" name="lactancia" value="0" checked>No<br/>
                        @endif
                        <br/>

                        <label>Posibilidad de Embarazo</label><br/>
                        @if($antecedentes->posibilidad_embarazo == 1)
                            <input type="radio" name="posibilidad_embarazo" value="1" checked>Sí<br/>
                            <input type="radio" name="posibilidad_embarazo" value="0">No<br/>
                        @else
                            <input type="radio" name="posibilidad_embarazo" value="1">Sí<br/>
                            <input type="radio" name="posibilidad_embarazo" value="0" checked>No<br/>
                        @endif
                        <br/>

                        <label>Anticonceptivos</label><br/>
                        @if($antecedentes->anticonceptivos == 'Ninguno')
                            <input type="radio" name="anticonceptivos" value="Ninguno" checked>Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Histerectomia')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia" checked>Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Salpingoclasia')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia" checked>Salpingoclasia
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Menopausia')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia" checked>Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Ritmo')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo" checked>Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'DIU')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU" checked>DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Anticonceptivos Orales')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales" checked>
                            Anticonceptivos Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Inyectables')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables" checked>Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Espermaticidas')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas" checked>Espermaticidas
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @elseif($antecedentes->anticonceptivos == 'Coito Interrumpido')
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido" checked>Coito
                            Interrumpido<br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @else
                            <input type="radio" name="anticonceptivos" value="Ninguno">Ninguno<br/>
                            <input type="radio" name="anticonceptivos" value="Histerectomia">Histerectomia<br/>
                            <input type="radio" name="anticonceptivos" value="Salpingoclasia">Salpingoclasia<br/>
                            <input type="radio" name="anticonceptivos" value="Menopausia">Menopausia<br/>
                            <input type="radio" name="anticonceptivos" value="Ritmo">Ritmo<br/>
                            <input type="radio" name="anticonceptivos" value="DIU">DIU<br/>
                            <input type="radio" name="anticonceptivos" value="Anticonceptivos Orales">Anticonceptivos
                            Orales<br/>
                            <input type="radio" name="anticonceptivos" value="Inyectables">Inyectables<br/>
                            <input type="radio" name="anticonceptivos" value="Espermaticidas">Espermaticidas<br/>
                            <input type="radio" name="anticonceptivos" value="Coito Interrumpido">Coito Interrumpido
                            <br/>
                            <input type="radio" name="anticonceptivos" value="Perservativo">Perservativo<br/>
                        @endif
                        <br/>

                    </div>
                </div>
                <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
            </div>
        </form>
    </div> <!-- jumbotron -->

@stop