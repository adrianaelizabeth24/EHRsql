@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <div class="jumbotron">
        <form method="post" action="{{action('AntecedentesGinecobstetricosController@update', $id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH"/>

            <div class="container">

                <h2>Antecedentes Ginecobstetricos <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="number" name="menarca" placeholder="Menarca"
                               value="{{$antecedentes->menarca}}">
                        <br/>
                        <input class="form-control" type="date" name="fecha" placeholder="FUM"
                               value="{{$antecedentes->fecha}}"/>
                        <br/>

                        <label>Ritmo</label><br/>
                        @foreach($ritmo as $opciones_ginecobstetricos_ritmo)
                            @if($opciones_ginecobstetricos_ritmo->id == $antecedentes->ritmo_cardiaco)
                                <input type="radio" name="ritmo_cardiaco"
                                       value="{{$opciones_ginecobstetricos_ritmo->id}}"
                                       checked/>{{$opciones_ginecobstetricos_ritmo->nombre}}
                                <br/>
                            @else
                                <input type="radio" name="ritmo_cardiaco"
                                       value="{{$opciones_ginecobstetricos_ritmo->id}}"/>{{$opciones_ginecobstetricos_ritmo->nombre}}
                                <br/>
                            @endif
                        @endforeach
                        <br/>


                        <label>Tensión Premenstrual</label><br/>
                        @foreach($tension_premenstrual as $opciones_ginecobstetricos_tension_premenstrual)
                            @if($opciones_ginecobstetricos_tension_premenstrual->id == $antecedentes->tension_premenstrual)
                                <input type="radio" name="tension_premenstrual"
                                       value="{{$opciones_ginecobstetricos_tension_premenstrual->id}}"
                                       checked/>{{$opciones_ginecobstetricos_tension_premenstrual->nombre}}
                                <br/>
                            @else
                                <input type="radio" name="tension_premenstrual"
                                       value="{{$opciones_ginecobstetricos_tension_premenstrual->id}}"/>{{$opciones_ginecobstetricos_tension_premenstrual->nombre}}
                                <br/>
                            @endif
                        @endforeach
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
                        @foreach($antecedentes_obstetricos as $opciones_ginecobstetricos_antecedentes_obstetricos)
                            @if($opciones_ginecobstetricos_antecedentes_obstetricos->id == $antecedentes->antecedentes_obstetricos)
                                <input type="radio" name="antecedentes_obstetricos"
                                       value="{{$opciones_ginecobstetricos_antecedentes_obstetricos->id}}"
                                       checked/>{{$opciones_ginecobstetricos_antecedentes_obstetricos->nombre}}
                                <br/>
                            @else
                                <input type="radio" name="antecedentes_obstetricos"
                                       value="{{$opciones_ginecobstetricos_antecedentes_obstetricos->id}}"/>{{$opciones_ginecobstetricos_antecedentes_obstetricos->nombre}}
                                <br/>
                            @endif
                        @endforeach
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
                        @foreach($anticonceptivos as $opciones_ginecobstetricos_anticonceptivos)
                            @if($opciones_ginecobstetricos_anticonceptivos->id == $antecedentes->anticonceptivos)
                                <input type="radio" name="anticonceptivos"
                                       value="{{$opciones_ginecobstetricos_anticonceptivos->id}}"
                                       checked/>{{$opciones_ginecobstetricos_anticonceptivos->nombre}}
                                <br/>
                            @else
                                <input type="radio" name="anticonceptivos"
                                       value="{{$opciones_ginecobstetricos_anticonceptivos->id}}"/>
                                {{$opciones_ginecobstetricos_anticonceptivos->nombre}}
                                <br/>
                            @endif
                        @endforeach

                        <br/>

                    </div>
                </div>

                <div class="row col-xs-offset-2">

                    <div class="form-group col-xs-4">
                        <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
                    </div>

                    <div class="form-group col-xs-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
                    </div>
                </div>
                
            </div>
        </form>
    </div> <!-- jumbotron -->

@stop