@extends('layouts.app')
@section('content')


    <form method="post" action="{{action('AntecedentesGinecobstetricosController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

              <div class="container">
                <h2>Antecedentes Ginecobstetricos</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="date" name="fecha" placeholder="Fecha" value="{{$antecedentes->fecha}}"/>
                    <br/>

                    <input type="number" name="ritmo_cardiaco" placeholder="Ritmo Cardiáco" value="{{$antecedentes->ritmo_cardiaco}}">
                    <br/>

                    <label>Tensión Premenstrual</label><br/>
                    @if($antecedentes->tension_premenstrual == 1)
                        <input type="radio" name="tension_premenstrual" value="1" checked> Sí<br/>
                        <input type="radio" name="tension_premenstrual" value="0"> No<br/>
                    @else
                        <input type="radio" name="tension_premenstrual" value="1"> Sí<br/>
                        <input type="radio" name="tension_premenstrual" value="0" checked> No<br/>
                    @endif
                    <br/>

                    <label>Vida Sexual</label><br/>
                    @if($antecedentes->vida_sexual == 1)
                        <input type="radio" name="vida_sexual" value="1" checked> Sí<br/>
                        <input type="radio" name="vida_sexual" value="0"> No<br/>
                    @else
                        <input type="radio" name="vida_sexual" value="1"> Sí<br/>
                        <input type="radio" name="vida_sexual" value="0" checked> No<br/>
                    @endif
                    <br/>

                    <label>Número de Compañeros Sexuales"</label>{{$antecedentes->numero_compañeros_sexuales}}
                    <br/>

                    <label>Antecedentes Obstetricos</label><br/>
                    @if($antecedentes->antecedentes_obstetricos == 1)
                        <input type="radio" name="antecedentes_obstetricos" value="1" checked> Sí<br/>
                        <input type="radio" name="antecedentes_obstetricos" value="0"> No<br/>
                    @else
                        <input type="radio" name="antecedentes_obstetricos" value="1"> Sí<br/>
                        <input type="radio" name="antecedentes_obstetricos" value="0" checked> No<br/>
                    @endif
                    <br/>

                    <label>Embarazo Actual</label><br/>
                    @if($antecedentes->embarazo_actual == 1)
                        <input type="radio" name="embarazo_actual" value="1" checked> Sí<br/>
                        <input type="radio" name="embarazo_actual" value="0"> No<br/>
                    @else
                        <input type="radio" name="embarazo_actual" value="1"> Sí<br/>
                        <input type="radio" name="embarazo_actual" value="0" checked> No<br/>
                    @endif
                    <br/>

                    <label>Lactancia</label><br/>
                    @if($antecedentes->lactancia == 1)
                        <input type="radio" name="lactancia" value="1" checked> Sí<br/>
                        <input type="radio" name="lactancia" value="0"> No<br/>
                    @else
                        <input type="radio" name="lactancia" value="1"> Sí<br/>
                        <input type="radio" name="lactancia" value="0" checked> No<br/>
                    @endif
                    <br/>

                    <label>Posibilidad de Embarazo</label><br/>
                    @if($antecedentes->posibilidad_embarazo == 1)
                        <input type="radio" name="posibilidad_embarazo" value="1" checked> Sí<br/>
                        <input type="radio" name="posibilidad_embarazo" value="0"> No<br/>
                    @else
                        <input type="radio" name="posibilidad_embarazo" value="1"> Sí<br/>
                        <input type="radio" name="posibilidad_embarazo" value="0" checked> No<br/>
                    @endif
                    <br/>

                    <label>Histerectomia</label><br/>
                    @if($antecedentes->histerectomia == 1)
                        <input type="radio" name="histerectomia" value="1" checked> Sí<br/>
                        <input type="radio" name="histerectomia" value="0"> No<br/>
                    @else
                        <input type="radio" name="histerectomia" value="1"> Sí<br/>
                        <input type="radio" name="histerectomia" value="0" checked> No<br/>
                    @endif
                    <br/>

                </div>
            </div>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
        </div> <!-- jumbotron -->

    </form>
@stop