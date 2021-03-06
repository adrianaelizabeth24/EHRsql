@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <form class="jumbotron" method="post" action="{{url('pat_nopat')}}">
        {{csrf_field()}}
        <div class="container">

            <h2>Antecedentes Personales Patológicos y no Patológicos <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

            <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>

            <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-3" align="center">ANTECEDENTE</th>
                    <th class="col-xs-5">DETALLES</th>
                    <th class="col-xs-1">SI</th>
                    <th class="col-xs-2">NO</th>
                    <th class="col-xs-1">SE DESCONOCE</th>
                </tr>
                </thead>
                <tbody>

                @foreach($antecedentes as $antecedente)

                    <tr>
                        <th scope="row"> {{$antecedente->preguntas}} </th>

                        <td>
                            <input type="text" name="antecedentes_detalles[{{$antecedente->preguntas}}]" class="form-control mx-sm-3">
                        </td>



                        <input type="hidden" name="antecedentes[{{$antecedente->preguntas}}]" value="null">
                        
                        <td>
                            <input class="form-check-input" type="radio" name="antecedentes[{{$antecedente->preguntas}}]" value="si"/>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="antecedentes[{{$antecedente->preguntas}}]" value="no"/>
                        </td>

                        <td>
                            <input class="form-check-input" type="radio" name="antecedentes[{{$antecedente->preguntas}}]"
                                   value="se desconoce"/>
                        </td>


                    </tr>

                @endforeach

                <tr>
                    <th scope="row">

                    <input type="text" name="otro" class="form-control mx-sm-3" placeholder="Otro"></th>

                    <td>
                        <input type="text" name="antecedentes_detalles['otro']" class="form-control mx-sm-3"/>
                    </td>



                    <input type="hidden" name="antecedentes['otro']" value="null">

                    <td>
                        <input class="form-check-input" type="radio" name="antecedentes['otro']" id="NO" value="no">
                    </td>

                    <td>
                        <input class="form-check-input" type="radio" name="antecedentes['otro']" id="SE DESCONOCE" value="se desconoce">
                    </td>

                    <td>
                        <input class="form-check-input" type="radio" name="antecedentes['otro']" id="SI" value="si">
                    </td>

                </tr>
                </tbody>
            </table>


            <div class="row">
                <div class="form-group">
                    <label>NOTAS DE ANTECEDENTES PERSONALES PATOLÓGICOS Y NO PATOLÓGICOS:</label>
                    <textarea class="form-control" name="antecedentes_notas" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="tazasCafé">No. de tazas de café o té negro al día:</label>
                    <input type="number" class="form-control input-group-lg" name="tazasCafé">
                </div>
            </div>


            <legend>TABAQUISMO</legend>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="tabaquismo">Nivel</label>
                    <select class="form-control" name="tabaquismo">
                        @foreach($tabaquismo as $nivel)
                            <option> {{$nivel}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group form-inline col-xs-3">
                    <label for="consumoDiario">Consumo diario de tabaco</label>
                    <input type="number" class="form-control input-group-lg" name="consumoDiario">
                    <small>
                        Cigarros por día
                    </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group form-inline  col-xs-3">
                    <label for="añosTabaquismo">Años de tabaquismo</label>
                    <input type="number" class="form-control input-group-lg" name="añosTabaquismo">
                </div>

                <div class="form-group form-inline col-xs-3">
                    <label for="edadInicio">Edad de Inicio</label>
                    <input type="number" class="form-control input-group-lg" name="edadInicio">
                </div>

                <div class="form-group form-inline  col-xs-3">
                    <label for="edadSuspendió">Edad en que se suspendió</label>
                    <input type="number" class="form-control input-group-lg" name="edadSuspendió">
                </div>
            </div>


            <div class="row">
                <legend>BEBIDAS ALCOHOLICAS</legend>

                <div class="form-group col-xs-3">
                    <label for="alcohol_frecuencia">Frecuencia</label>
                    <select class="form-control" name="alcohol_frecuencia">
                        @foreach($alcohol_frecuencia as $frec)
                            <option> {{$frec}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-xs-3">
                    <label for="alcohol_cantidad">Cantidad (cuando toma)</label>
                    <select class="form-control" name="alcohol_cantidad">
                        @foreach($alcohol_cantidad as $cant)
                            <option> {{$cant}} </option>
                        @endforeach
                    </select>
                </div>


            </div>


            <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-3" align="center">PREGUNTA</th>
                    <th class="col-xs-1">NO</th>
                    <th class="col-xs-1">SI</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <th scope="row"> ¿Alguna vez le dijeron o sintió que debería dejar de tomar?</th>

                    <td>
                        <input class="form-check-input" type="radio" name="dejarTomar" id="NO" value="no">
                    </td>
                    <td>
                        <input class="form-check-input" type="radio" name="dejarTomar" id="SI" value="si">
                    </td>
                </tr>

                <tr>
                    <th scope="row"> ¿Alguna vez se sintió mal o culpable por su forma de tomar?</th>

                    <td>
                        <input class="form-check-input" type="radio" name="formaTomar" id="NO" value="no">
                    </td>
                    <td>
                        <input class="form-check-input" type="radio" name="formaTomar" id="SI" value="si">
                    </td>
                </tr>

                <tr>
                    <th scope="row"> ¿Alguna vez tomo en la mañana para calmar sus nervios o cortar la cruda?</th>

                    <td>
                        <input class="form-check-input" type="radio" name="tomarMañana" id="NO" value="no">
                    </td>
                    <td>
                        <input class="form-check-input" type="radio" name="tomarMañana" id="SI" value="si">
                    </td>
                </tr>

                </tbody>
            </table>


            <div class="row" align="center">
                <div class="form-group col-xs-4 col-xs-offset-4">
                    <label>Historia de abuso de sustancias</label>
                </div>

                <div class="form-group col-xs-4" align="center">
                    <label>Dependencia de sustancias</label>
                </div>
            </div>


            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="col-xs-4">Sustancia</th>
                    <th class="col-xs-2">Actual</th>
                    <th class="col-xs-2">Anterior</th>
                    <th class="col-xs-2">Actual</th>
                    <th class="col-xs-2">Anterior</th>
                </tr>
                </thead>
                <tbody>


                @foreach($substancias as $substancia)

                    <tr>
                        <th scope="row">  {{$substancia}} </th>

                        <input type="hidden" name="abuso_actAnt[{{$substancia}}]" value="null">

                        <td>
                            <input class="form-check-input" type="radio" name="abuso_actAnt[{{$substancia}}]" value="actual">
                        </td>

                        <td>
                            <input class="form-check-input" type="radio" name="abuso_actAnt[{{$substancia}}]" value="anterior">
                        </td>

                           <input type="hidden" name="dep_actAnt[{{$substancia}}]" value="null">

                        <td>
                            <input class="form-check-input" type="radio" name="dep_actAnt[{{$substancia}}]" value="actual">
                        </td>

                        <td>
                            <input class="form-check-input" type="radio" name="dep_actAnt[{{$substancia}}]" value="anterior">
                        </td>

                            

                    </tr>
                @endforeach

                </tbody>
            </table>


            <div class="form-group">
                <label>PROBLEMAS RELACIONADOS AL CONSUMO DE SUSTANCIAS:</label>
                <textarea class="form-control" name="problemas" rows="3"></textarea>
            </div>


            <div class="row col-xs-offset-2">

                <div class="form-group col-xs-4">
                    <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
                </div>

                <div class="form-group col-xs-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
                </div>
            </div>

        </div> <!-- container -->

    </form>




@stop
