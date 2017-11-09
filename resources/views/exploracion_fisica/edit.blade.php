@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('ExploracionFisicaController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Exploración Física</h2>
                <div class="row">
                    <div class="col-md-12">

                        <label>Condición general</label><br/>
                        @if($examen->condicion_general == 2)
                            <input type="radio" name="condicion_general" value="2" checked> Normal<br/>
                            <input type="radio" name="condicion_general" value="1"> Anormal<br/>
                            <input type="radio" name="condicion_general" value="0"> No examinado<br/>
                        @elseif($examen->condicion_general == 1)
                            <input type="radio" name="condicion_general" value="2"> Normal<br/>
                            <input type="radio" name="condicion_general" value="1" checked> Anormal<br/>
                            <input type="radio" name="condicion_general" value="0"> No examinado<br/>
                        @else
                            <input type="radio" name="condicion_general" value="2"> Normal<br/>
                            <input type="radio" name="condicion_general" value="1"> Anormal<br/>
                            <input type="radio" name="condicion_general" value="0" checked> No examinado<br/>
                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_condicion_general"
                               placeholder="Especifique condición general del paciente"
                               value="{{$examen->txt_condicion_general}}"/>
                        <br/>

                        <label>Estado de piel</label><br/>
                        @if($examen->piel == 2)
                            <input type="radio" name="piel" value="2" checked> Normal<br/>
                            <input type="radio" name="piel" value="1"> Anormal<br/>
                            <input type="radio" name="piel" value="0"> No examinado<br/>
                        @elseif($examen->piel == 1)
                            <input type="radio" name="piel" value="2"> Normal<br/>
                            <input type="radio" name="piel" value="1" checked> Anormal<br/>
                            <input type="radio" name="piel" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="piel" value="2"> Normal<br/>
                            <input type="radio" name="piel" value="1"> Anormal<br/>
                            <input type="radio" name="piel" value="0" checked> No examinado<br/>

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_piel"
                               placeholder="Especifique la condición de la piel del paciente"
                               value="{{$examen->txt_piel}}"/>
                        <br/>

                        <label>Estado de cabeza</label><br/>
                        @if($examen->cabeza == 2)
                            <input type="radio" name="cabeza" value="2" checked> Normal<br/>
                            <input type="radio" name="cabeza" value="1"> Anormal<br/>
                            <input type="radio" name="cabeza" value="0"> No examinado<br/>

                        @elseif($examen->cabeza == 1)
                            <input type="radio" name="cabeza" value="2"> Normal<br/>
                            <input type="radio" name="cabeza" value="1" checked> Anormal<br/>
                            <input type="radio" name="cabeza" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="cabeza" value="2"> Normal<br/>
                            <input type="radio" name="cabeza" value="1"> Anormal<br/>
                            <input type="radio" name="cabeza" value="0" checked> No examinado<br/>

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_cabeza"
                               placeholder="Especifique la condición de la cabeza del paciente"
                               value="{{$examen->txt_cabeza}}"/>
                        <br/>

                        <label>Estado de ojos</label><br/>
                        @if($examen->ojos == 2)
                            <input type="radio" name="ojos" value="2" checked> Normal<br/>
                            <input type="radio" name="ojos" value="1"> Anormal<br/>
                            <input type="radio" name="ojos" value="0"> No examinado<br/>

                        @elseif($examen->ojos == 1)
                            <input type="radio" name="ojos" value="2"> Normal<br/>
                            <input type="radio" name="ojos" value="1" checked> Anormal<br/>
                            <input type="radio" name="ojos" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="ojos" value="2"> Normal<br/>
                            <input type="radio" name="ojos" value="1"> Anormal<br/>
                            <input type="radio" name="ojos" value="0" checked> No examinado<br/>

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_ojos"
                               placeholder="Especifique la condición de los ojos del paciente"
                               value="{{$examen->txt_ojos}}"/>
                        <br/>


                        <label>Estado de oídos, nariz y garganta</label><br/>
                        @if($examen->oidos_nariz_garganta == 2)
                            <input type="radio" name="oidos_nariz_garganta" value="2" checked> Normal<br/>
                            <input type="radio" name="oidos_nariz_garganta" value="1"> Anormal<br/>
                            <input type="radio" name="oidos_nariz_garganta" value="0"> No examinado<br/>

                        @elseif($examen->ojos_nariz_garganta == 1)
                            <input type="radio" name="oidos_nariz_garganta" value="2"> Normal<br/>
                            <input type="radio" name="oidos_nariz_garganta" value="1" checked> Anormal<br/>
                            <input type="radio" name="oidos_nariz_garganta" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="oidos_nariz_garganta" value="2"> Normal<br/>
                            <input type="radio" name="oidos_nariz_garganta" value="1"> Anormal<br/>
                            <input type="radio" name="oidos_nariz_garganta" value="0" checked> No examinado<br/>
                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_oidos_nariz_garganta"
                               placeholder="Especifique la condición de los oídos, nariz y garganta del paciente"
                               value="{{$examen->txt_oidos_nariz_garganta}}"/>
                        <br/>

                        <label>Estado de cuello y tiroides</label><br/>
                        @if($examen->cuello_tiroides == 2)
                            <input type="radio" name="cuello_tiroides" value="2" checked> Normal<br/>
                            <input type="radio" name="cuello_tiroides" value="1"> Anormal<br/>
                            <input type="radio" name="cuello_tiroides" value="0"> No examinado<br/>

                        @elseif($examen->cuello_tiroides == 1)
                            <input type="radio" name="cuello_tiroides" value="2"> Normal<br/>
                            <input type="radio" name="cuello_tiroides" value="1" checked> Anormal<br/>
                            <input type="radio" name="cuello_tiroides" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="cuello_tiroides" value="2"> Normal<br/>
                            <input type="radio" name="cuello_tiroides" value="1"> Anormal<br/>
                            <input type="radio" name="cuello_tiroides" value="0" checked> No examinado

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_cuello_tiroides"
                               placeholder="Especifique la condición del cuello y tiroides del paciente"
                               value="{{$examen->txt_cuello_tiroides}}"/>
                        <br/>

                        <label>Estado de pulmones</label><br/>
                        @if($examen->pulmones == 2)
                            <input type="radio" name="pulmones" value="2" checked> Normal<br/>
                            <input type="radio" name="pulmones" value="1"> Anormal<br/>
                            <input type="radio" name="pulmones" value="0"> No examinado<br/>

                        @elseif($examen->pulmones == 1)
                            <input type="radio" name="pulmones" value="2"> Normal<br/>
                            <input type="radio" name="pulmones" value="1" checked> Anormal<br/>
                            <input type="radio" name="pulmones" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="pulmones" value="2"> Normal<br/>
                            <input type="radio" name="pulmones" value="1"> Anormal<br/>
                            <input type="radio" name="pulmones" value="0" checked> No examinado<br/>

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_pulmones"
                               placeholder="Especifique la condición de los pulmones del paciente"
                               value="{{$examen->txt_pulmones}}"/>
                        <br/>


                        <label>Estado de corazón</label><br/>
                        @if($examen->corazon == 2)
                            <input type="radio" name="corazon" value="2" checked> Normal<br/>
                            <input type="radio" name="corazon" value="1"> Anormal<br/>
                            <input type="radio" name="corazon" value="0"> No examinado<br/>

                        @elseif($examen->corazon == 1)
                            <input type="radio" name="corazon" value="2"> Normal<br/>
                            <input type="radio" name="corazon" value="1" checked> Anormal<br/>
                            <input type="radio" name="corazon" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="corazon" value="2"> Normal<br/>
                            <input type="radio" name="corazon" value="1"> Anormal<br/>
                            <input type="radio" name="corazon" value="0" checked> No examinado<br/>

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_corazon"
                               placeholder="Especifique la condición del corazón del paciente"
                               value="{{$examen->txt_corazon}}"/>
                        <br/>

                        <label>Estado Gastrointestinal</label><br/>
                        @if($examen->gastro == 2)
                            <input type="radio" name="gastro" value="2" checked> Normal<br/>
                            <input type="radio" name="gastro" value="1"> Anormal<br/>
                            <input type="radio" name="gastro" value="0"> No examinado<br/>

                        @elseif($examen->gastro == 1)
                            <input type="radio" name="gastro" value="2"> Normal<br/>
                            <input type="radio" name="gastro" value="1" checked> Anormal<br/>
                            <input type="radio" name="gastro" value="0"> No examinado<br/>

                        @else
                            <input type="radio" name="gastro" value="2"> Normal<br/>
                            <input type="radio" name="gastro" value="1"> Anormal<br/>
                            <input type="radio" name="gastro" value="0" checked> No
                            examinado<br/>

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_gastro"
                               placeholder="Especifique la condición gastrointestinal del paciente"
                               value="{{$examen->txt_gastro}}"/>
                        <br/>


                        <label>Estado de lineáticos</label><br/>
                        @if($examen->lineaticos == 2)
                            <input type="radio" name="lineaticos" value="2" checked> Normal
                            <br/>
                            <input type="radio" name="lineaticos" value="1"> Anormal<br/>
                            <input type="radio" name="lineaticos" value="0"> No examinado
                            <br/>
                        @elseif($examen->lineaticos == 1)
                            <input type="radio" name="lineaticos" value="2"> Normal<br/>
                            <input type="radio" name="lineaticos" value="1" checked> Anormal
                            <br/>
                            <input type="radio" name="lineaticos" value="0"> No examinado
                            <br/>

                        @else
                            <input type="radio" name="lineaticos" value="2"> Normal<br/>
                            <input type="radio" name="lineaticos" value="1"> Anormal
                            <br/>
                            <input type="radio" name="lineaticos" value="0" checked> No
                            examinado<br/>
                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_lineaticos"
                               placeholder="Especifique la condición lineática del paciente"
                               value="{{$examen->txt_lineaticos}}"/>
                        <br/>

                        <label>Estado del hígado</label><br/>
                        @if($examen->higado == 2)
                            <input type="radio" name="higado" value="2" checked> Normal
                            <br/>
                            <input type="radio" name="higado" value="1"> Anormal<br/>
                            <input type="radio" name="higado" value="0"> No examinado
                            <br/>
                        @elseif($examen->higado == 1)
                            <input type="radio" name="higado" value="2"> Normal<br/>
                            <input type="radio" name="higado" value="1" checked> Anormal
                            <br/>
                            <input type="radio" name="higado" value="0"> No examinado
                            <br/>
                        @else
                            <input type="radio" name="higado" value="2"> Normal<br/>
                            <input type="radio" name="higado" value="1"> Anormal
                            <br/>
                            <input type="radio" name="higado" value="0" checked> No
                            examinado<br/>
                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_higado"
                               placeholder="Especifique la condición del hígado del paciente"
                               value="{{$examen->txt_higado}}"/>
                        <br/>

                        <label>Estado del músculo esquelético</label><br/>
                        @if($examen->musculo_esqueletico == 2)
                            <input type="radio" name="musculo_esqueletico" value="2"
                                   checked> Normal<br/>
                            <input type="radio" name="musculo_esqueletico"
                                   value="1"> Anormal<br/>
                            <input type="radio" name="musculo_esqueletico"
                                   value="0"> No examinado<br/>
                        @elseif($examen->musculo_esqueletico == 1)
                            <input type="radio" name="musculo_esqueletico"
                                   value="2"> Normal<br/>
                            <input type="radio" name="musculo_esqueletico" value="1"
                                   checked> Anormal<br/>
                            <input type="radio" name="musculo_esqueletico"
                                   value="0"> No examinado<br/>
                        @else
                            <input type="radio" name="musculo_esqueletico"
                                   value="2"> Normal<br/>
                            <input type="radio" name="musculo_esqueletico"
                                   value="1"> Anormal<br/>
                            <input type="radio" name="musculo_esqueletico"
                                   value="0" checked> No examinado<br/>
                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_musculo_esqueletico"
                               placeholder="Especifique la condición del musculo esquelético del paciente"
                               value="{{$examen->txt_musculo_esqueletico}}"/>
                        <br/>

                        <label>Estado neurológico</label><br/>
                        @if($examen->neurologico == 2)
                            <input type="radio" name="neurologico" value="2"
                                   checked> Normal<br/>
                            <input type="radio" name="neurologico" value="1">
                            Anormal<br/>
                            <input type="radio" name="neurologico" value="0"> No
                            examinado<br/>
                        @elseif($examen->neurologico == 1)
                            <input type="radio" name="neurologico" value="2">
                            Normal<br/>
                            <input type="radio" name="neurologico" value="1"
                                   checked> Anormal<br/>
                            <input type="radio" name="neurologico" value="0"> No
                            examinado<br/>

                        @else
                            <input type="radio" name="neurologico"
                                   value="2"> Normal<br/>
                            <input type="radio" name="neurologico"
                                   value="1"> Anormal<br/>
                            <input type="radio" name="neurologico" value="0"
                                   checked> No examinado<br/>

                        @endif
                        <br/>
                        <input class="form-control" type="text" name="txt_neurologico"
                               placeholder="Especifique la condición neurológica del paciente"
                               value="{{$examen->txt_neurologico}}"/>
                        <br/>

                    </div>
                </div>
				<br/>
        		<input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
            </div>
        </div>


        </div> <!-- jumbotron -->
    </form>
@stop