@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

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
                        @foreach($ritmo_cardiaco as $opciones_ginecobstetricos_ritmo)
                            <option value="{{$opciones_ginecobstetricos_ritmo->id}}">{{$opciones_ginecobstetricos_ritmo->nombre}}</option>
                        @endforeach
                        <br/>

                        <label>Tensión Premenstrual</label><br/>
                        @foreach($tension_premenstrual as $opciones_ginecobstetricos_tension_premenstrual)
                            <option value="{{$opciones_ginecobstetricos_tension_premenstrual->id}}">{{$opciones_ginecobstetricos_tension_premenstrual->nombre}}</option>
                        @endforeach
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
                        @foreach($antecedentes_obstetricos as $opciones_ginecobstetricos_antecedentes_obstetricos)
                            <option value="{{$opciones_ginecobstetricos_antecedentes_obstetricos->id}}">{{$opciones_ginecobstetricos_antecedentes_obstetricos->nombre}}</option>
                        @endforeach
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
                        @foreach($anticonceptivos as $opciones_ginecobstetricos_anticonceptivos)
                            <option value="{{$opciones_ginecobstetricos_anticonceptivos->id}}">{{$opciones_ginecobstetricos_anticonceptivos->nombre}}</option>
                        @endforeach
                        <br/>

                    </div>
                </div>
                <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
            </div>
        </div> <!-- jumbotron -->

    </form>
@stop