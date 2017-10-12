@extends('layouts.app')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">

  <div class="container">
    <h2>PEEA del Episodio Actual</h2>

    <form>


      <div class="row">


        <div class="form-group col-xs-6">
          <label for="ep_actual">El episodio actual es:</label>
          <select class="form-control" id="ep_actual">
            @foreach($ep_actual as $ep)
            <option> {{$ep}} </option>
            @endforeach
          </select>
        </div>

        <div class="form-group col-xs-3">
          <label for="epPrevios">Número de episodios previos:</label>
          <input type="number" class="form-control input-group-lg" id="epPrevios">
        </div>

        <div class="form-group col-xs-3">
          <label for="epPrevios">Edad de inicio del primer episodio:</label>
          <input type="number" class="form-control input-group-lg" id="edadIni">
        </div>

      </div>


      <div class="row">

        <div class="form-group col-xs-6">
          <label for="inicio_sintomas">Inicio de los sintomas el episodio actual:</label>
          <select class="form-control" id="inicio_sintomas">
            @foreach($inicio_sintomas as $ini)
            <option> {{$ini}} </option>
            @endforeach
          </select>
        </div>


        <div class="form-group row  col-xs-4">
          <label for="inicioEpisodio" class="col-6 col-form-label">Fecha probable de inicio del actual episodio:</label>
          <input class="form-control" type="date" id="inicioEpisodio">
        </div>

      </div>


      <div class="row">
        <legend>¿Ha Recibido Tratamiento para el Episodio Actual?</legend>

        <fieldset class="form-group col-xs-3">

          @for($i=0; $i < count($tratamiento)/2 ; $i++)

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="$tratamiento[$i]">
              {{ $tratamiento[$i] }}
            </label>
          </div>

          @endfor
        </fieldset>



        <fieldset class="form-group col-xs-3">

          @for($i=count($tratamiento)/2 + 1; $i < count($tratamiento); $i++)

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento" id="$tratamiento[$i]">
              {{ $tratamiento[$i] }}
            </label>
          </div>
          @endfor

          <div class="form-check">
            <label class="form-check-label"><input type="text" class="form-control input-group-lg" id="epPrevios" placeholder="Otro ¿cuál?">
            </label>
          </div>

        </fieldset>

      </div>

      <div class="form-group">
        <label>Psicofármacos Empleados para el Episodio Actual:</label>
        <textarea class="form-control" id="Psicofármacos" rows="3"></textarea>
      </div>


      <div class="row col-xs-offset-2">

        <div class="form-group col-xs-4">
          <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
        </div>

        <div class="form-group col-xs-4">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
        </div>
      </div>

    </form>

  </div>

</div> <!-- jumbotron -->
@stop