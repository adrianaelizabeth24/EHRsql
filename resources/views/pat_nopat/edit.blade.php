@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
<form method="post" action="{{action('PatnoPatController@update', $id)}}">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH"/>

<div class="jumbotron">
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

                <?php
                    $antecedentes_detalles = explode(",",$pat_nopat->antecedentes_detalles );
                    $ant = explode(",",$pat_nopat->antecedentes);
                ?>

                @foreach($antecedentes as $antecedente)

                    <tr>
                        <th scope="row"> {{$antecedente->preguntas}} </th>

                        <?php
                            $detalle =  array_shift($antecedentes_detalles);
                            $opcion = array_shift($ant);
                        ?>

                        <td>
                            <input type="text" name="antecedentes_detalles[{{$antecedente->preguntas}}]" class="form-control mx-sm-3" value="{{$detalle}}">
                        </td>



                        <input type="hidden" name="antecedentes[{{$antecedente->preguntas}}]" value="null">

                        <td>
                            <input type="radio" class="form" name="antecedentes[{{$antecedente->preguntas}}]"  value="si" 
                              {{ $opcion == 'si' ? 'checked' : '' }} >
                        </td>

                        <td>
                            <input type="radio" class="form" name="antecedentes[{{$antecedente->preguntas}}]"  value="no" 
                              {{ $opcion == 'no' ? 'checked' : '' }} >
                        </td>

                        <td>
                            <input type="radio" class="form" name="antecedentes[{{$antecedente->preguntas}}]"  value="se desconoce" 
                              {{ $opcion == 'se desconoce' ? 'checked' : '' }} >
                        </td>



                    </tr>

                @endforeach

                <?php
                    $detalle =  array_shift($antecedentes_detalles);
                    $opcion = array_shift($ant);
                ?>

                <tr>
                    <th scope="row">


                    <input type="text" name="otro" class="form-control mx-sm-3" placeholder="Otro" value="{{$pat_nopat->otro}}"></th>


                    <td>
                        <input type="text" name="antecedentes_detalles['otro']" class="form-control mx-sm-3"/ value="{{$detalle}}">
                    </td>

                    <td>
                        <input type="radio" class="form" name="antecedentes['otro']"  value="si" 
                          {{ $opcion == 'si' ? 'checked' : '' }} >
                    </td>

                    <td>
                        <input type="radio" class="form" name="antecedentes['otro']"  value="no" 
                          {{ $opcion == 'no' ? 'checked' : '' }} >
                    </td>

                    <td>
                        <input type="radio" class="form" name="antecedentes['otro']"  value="se desconoce" 
                          {{ $opcion == 'se desconoce' ? 'checked' : '' }} >
                    </td>

                </tr>
                </tbody>
            </table>


            <div class="row">
                <div class="form-group">
                    <label>NOTAS DE ANTECEDENTES PERSONALES PATOLÓGICOS Y NO PATOLÓGICOS:</label>
                    <textarea class="form-control" name="antecedentes_notas" rows="3"> {{$pat_nopat->antecedentes_notas}}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="tazasCafé">No. de tazas de café o té negro al día:</label>
                    <input type="number" class="form-control input-group-lg" name="tazasCafé" value= {{$pat_nopat->tazasCafé}}>
                </div>
            </div>


            <legend>TABAQUISMO</legend>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="tabaquismo">Nivel</label>
                    <select class="form-control" name="tabaquismo">
                        @foreach($tabaquismo as $nivel)
                            <option value= "{{ $nivel }}" 
                            @if ($nivel == old('tabaquismo', $pat_nopat->tabaquismo))
                                selected="selected"
                            @endif
                            > {{ $nivel }} </option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group form-inline col-xs-3">
                    <label for="consumoDiario">Consumo diario de tabaco</label>
                    <input type="number" class="form-control input-group-lg" name="consumoDiario" value = {{$pat_nopat->consumoDiario}}>
                    <small>
                        Cigarros por día
                    </small>
                </div>
            </div>

            <div class="row">
                <div class="form-group form-inline  col-xs-3">
                    <label for="añosTabaquismo">Años de tabaquismo</label>
                    <input type="number" class="form-control input-group-lg" name="añosTabaquismo" value = {{$pat_nopat->añosTabaquismo}}>
                </div>

                <div class="form-group form-inline col-xs-3">
                    <label for="edadInicio">Edad de Inicio</label>
                    <input type="number" class="form-control input-group-lg" name="edadInicio" value = {{$pat_nopat->edadInicio}}>
                </div>

                <div class="form-group form-inline  col-xs-3">
                    <label for="edadSuspendió">Edad en que se suspendió</label>
                    <input type="number" class="form-control input-group-lg" name="edadSuspendió" value = {{$pat_nopat->edadSuspendió}}>
                </div>
            </div>


            <div class="row">
                <legend>BEBIDAS ALCOHOLICAS</legend>

                <div class="form-group col-xs-3">
                    <label for="alcohol_frecuencia">Frecuencia</label>
                    <select class="form-control" name="alcohol_frecuencia">
                        @foreach($alcohol_frecuencia as $frec)
                            <option value= "{{ $frec }}" 
                            @if ($frec == old('alcohol_frecuencia', $pat_nopat->alcohol_frecuencia))
                                selected="selected"
                            @endif
                            > {{ $frec }} </option>
                        @endforeach
                    </select>

                </div>

                <div class="form-group col-xs-3">
                    <label for="alcohol_cantidad">Cantidad (cuando toma)</label>
                    <select class="form-control" name="alcohol_cantidad">
                        @foreach($alcohol_cantidad as $cant)
                            <option value= "{{ $cant }}" 
                            @if ($cant == old('alcohol_cantidad', $pat_nopat->alcohol_cantidad))
                                selected="selected"
                            @endif
                            > {{ $cant }} </option>
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
                        <input type="radio" class="form" name="dejarTomar"  value="no" 
                          {{ $pat_nopat->dejarTomar == 'no' ? 'checked' : '' }} >
                    </td>
                    <td>
                        <input type="radio" class="form" name="dejarTomar"  value="si" 
                          {{ $pat_nopat->dejarTomar == 'si' ? 'checked' : '' }} >
                    </td>

                    

                </tr>

                <tr>
                    <th scope="row"> ¿Alguna vez se sintió mal o culpable por su forma de tomar?</th>

                    <td>
                        <input type="radio" class="form" name="formaTomar"  value="no" 
                          {{ $pat_nopat->formaTomar == 'no' ? 'checked' : '' }} >
                    </td>
                    <td>
                        <input type="radio" class="form" name="formaTomar"  value="si" 
                          {{ $pat_nopat->formaTomar == 'si' ? 'checked' : '' }} >
                    </td>
                    
                </tr>

                <tr>
                    <th scope="row"> ¿Alguna vez tomo en la mañana para calmar sus nervios o cortar la cruda?</th>

                    
                    <td>
                        <input type="radio" class="form" name="tomarMañana"  value="no" 
                          {{ $pat_nopat->tomarMañana == 'no' ? 'checked' : '' }} >
                    </td>
                    <td>
                        <input type="radio" class="form" name="tomarMañana"  value="si" 
                          {{ $pat_nopat->tomarMañana == 'si' ? 'checked' : '' }} >
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




            <?php
                $abuso_actAnt = explode(',', $pat_nopat->abuso_actAnt);
                $dep_actAnt = explode(',', $pat_nopat->dep_actAnt);
            ?>


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
                        <th scope="row"> {{$substancia}} </th>

                        <?php
                            $abuso = array_shift($abuso_actAnt);
                            $dependencia = array_shift($dep_actAnt);
                        ?>

                        <input type="hidden" name="abuso_actAnt[{{$substancia}}]" value="null">

                        <td>
                            <input type="radio" class="form" name="abuso_actAnt[{{$substancia}}]"  value="actual" 
                              {{ $abuso == 'actual' ? 'checked' : '' }} >
                        </td>

                        <td>
                            <input class="form-check-input" type="radio" name="abuso_actAnt[{{$substancia}}]" value="anterior"
                            {{ $abuso == 'anterior' ? 'checked' : '' }} >
                        </td>


                           <input type="hidden" name="dep_actAnt[{{$substancia}}]" value="null">

                        <td>
                            <input class="form-check-input" type="radio" name="dep_actAnt[{{$substancia}}]" value="actual"
                            {{ $dependencia == 'actual' ? 'checked' : '' }} >
                        </td>

                        <td>
                            <input class="form-check-input" type="radio" name="dep_actAnt[{{$substancia}}]" value="anterior"
                            {{ $dependencia == 'anterior' ? 'checked' : '' }} >
                        </td>
    
                    </tr>

                @endforeach

                </tbody>
            </table>


            <div class="form-group">
                <label>PROBLEMAS RELACIONADOS AL CONSUMO DE SUSTANCIAS:</label>
                <textarea class="form-control" name="problemas" rows="3">{{ $pat_nopat-> problemas }}</textarea>
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