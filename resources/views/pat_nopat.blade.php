@extends('layouts.app')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->

<style>

  .table td, th {  
   text-align: center; 
   
 }

</style>




<div class="jumbotron">
  <div class="container">

    <h2>Antecedentes Personales Patológicos y no Patológicos</h2>

    <table class="table">
      <thead>
        <tr>
          <th class="col-xs-3" align="center">ANTECEDENTE</th>
          <th class="col-xs-5">DETALLES</th>
          <th class="col-xs-1">NO</th>
          <th class="col-xs-2">SE DECONOCE</th>
          <th class="col-xs-1">SI</th>
        </tr>
      </thead>
      <tbody>

        @foreach($antecedentes as $antecedente)

        <tr>
          <th scope="row">  {{$antecedente}} </th>

          <td>
            <input type="text" id="{{$antecedente}}" class="form-control mx-sm-3">
          </td>

          <td>
            <input class="form-check-input" type="radio" name="{{$antecedente}}" id="NO">
          </td>

          <td>
            <input class="form-check-input" type="radio" name="{{$antecedente}}" id="SE DESCONOCE">
          </td>

          <td>
            <input class="form-check-input" type="radio" name="{{$antecedente}}" id="SI">
          </td>

        </tr>

        @endforeach

        <tr>
          <th scope="row">  <input type="text" id="otro" class="form-control mx-sm-3" placeholder="Otro"> </th>

          <td>
            <input type="text" id="otro" class="form-control mx-sm-3"/>
          </td>

          <td>
            <input class="form-check-input" type="radio" name="{{$antecedente}}" id="NO">
          </td>

          <td>
            <input class="form-check-input" type="radio" name="{{$antecedente}}" id="SE DESCONOCE">
          </td>

          <td>
            <input class="form-check-input" type="radio" name="{{$antecedente}}" id="SI">
          </td>

        </tr>
      </tbody>
    </table>


    <div class="row">
      <div class="form-group">
        <label>NOTAS DE ANTECEDENTES PERSONALES PATOLÓGICOS Y NO PATOLÓGICOS:</label>
        <textarea class="form-control" id="Psicofármacos" rows="3"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-xs-3">
        <label for="tazasCafé">No. de tazas de café o té negro al día:</label>
        <input type="number" class="form-control input-group-lg" id="tazasCafé">
      </div>
    </div>



    <div class="row">
      <legend>TABAQUISMO</legend>


      @foreach($tabaquismo as $nivel)
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="tabaquismo" id="{{$nivel}}">
          {{$nivel}}
        </label>
        @endforeach

      </div>

      <div class="row">
        <div class="form-group form-inline col-xs-3">
          <label for="consumoDiario">Consumo diario de tabaco</label>
          <input type="number" class="form-control input-group-lg" id="consumoDiario">
          <small>
            Cigarros por día
          </small>
        </div>

        <div class="form-group form-inline  col-xs-3">
          <label for="añosTabaquismo">Años de tabaquismo</label>
          <input type="number" class="form-control input-group-lg" id="añosTabaquismo">
        </div>
      </div>

      <div class="row">
        <div class="form-group form-inline col-xs-3">
          <label for="edadInicio">Edad de Inicio</label>
          <input type="number" class="form-control input-group-lg" id="edadInicio">
        </div>

        <div class="form-group form-inline  col-xs-3">
          <label for="edadSuspendió">Edad en que se suspendió</label>
          <input type="number" class="form-control input-group-lg" id="edadSuspendió">
        </div>
      </div>
    </div>



    <div class="row">
      <legend>BEBIDAS ALCOHOLICAS</legend>

      <fieldset class="form-group col-xs-3">
        <legend>Frecuencia</legend>

        @foreach($bebidas_frecuencia as $frec)
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="frec" id="{{$frec}}">
            {{$frec}}
          </label>
          @endforeach
        </fieldset>


        <fieldset class="form-group col-xs-3">
          <legend>Cantidad</legend>
          @foreach($bebidas_cantidad as $cant)

          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="cant" id="{{$cant}}">
              {{$cant}}
            </label>
          </div>
          @endforeach
        </fieldset>
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
            <th scope="row">  ¿Alguna vez le dijeron o sintió que debería dejar de tomar? </th>

            <td>
              <input class="form-check-input" type="radio" name="dejarTomar" id="NO">
            </td>
            <td>
              <input class="form-check-input" type="radio" name="dejarTomar" id="SI">
            </td>
          </tr>

          <tr>
            <th scope="row">  ¿Alguna vez se sintió mal o culpable por su forma de tomar? </th>

            <td>
              <input class="form-check-input" type="radio" name="formaTomar" id="NO">
            </td>
            <td>
              <input class="form-check-input" type="radio" name="formaTomar" id="SI">
            </td>
          </tr>

          <tr>
            <th scope="row">  ¿Alguna vez tomo en la mañana para calmar sus nervios o cortar la cruda? </th>

            <td>
              <input class="form-check-input" type="radio" name="tomarMañana" id="NO">
            </td>
            <td>
              <input class="form-check-input" type="radio" name="tomarMañana" id="SI">
            </td>
          </tr>

        </tbody>
      </table>



      <div class="row">
        <div class="form-group col-xs-4 col-xs-offset-4">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="HistoriaAbuso">
            Historia de abuso de sustancias
          </label>
        </div>

        <div class="form-group col-xs-4">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="Dependencia">
            Dependencia de sustancias
          </label>
        </div>
      </div>


      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="col-xs-4" align="center">Sustancia</th>
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

            <td>
              <input class="form-check-input" type="radio" name="HistoriaAbuso_{{$substancia}}" id="AbusoActual_{{$substancia}}">
            </td>

            <td>
              <input class="form-check-input" type="radio" name="HistoriaAbuso_{{$substancia}}" id="AbusoAnterior_{{$substancia}}">
            </td>

            <td>
              <input class="form-check-input" type="radio" name="Dependencia_{{$substancia}}" id="DepActual_{{$substancia}}">
            </td>

            <td>
              <input class="form-check-input" type="radio" name="Dependencia_{{$substancia}}" id="DepAnterior_{{$substancia}}">
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>


      <div class="form-group">
        <label>PROBLEMAS RELACIONADOS AL CONSUMO DE SUSTANCIAS:</label>
        <textarea class="form-control" id="Problemas" rows="3"></textarea>
      </div>

    </form>


  </div>
</div>


@stop
