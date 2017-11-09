@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

<!-- Main jumbotron for a primary marketing message or call to action -->

<form class="jumbotron" method="post" action="{{url('peea')}}">
	<div class="container">
    	{{csrf_field()}}

		<div class="row">
			<div class="col-md-8">
				<label>{{$paciente->id}}</label>
				<input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
				<label>{{$paciente->nombre}}</label>
				<label>{{$paciente->apellido_paterno}}</label>
				<label>{{$paciente->apellido_materno}}</label>
			</div>
		</div>


    	<h2>PEEA del Episodio Actual</h2>

   		<form>


		  <div class="row">
			<div class="form-group col-md-12">
			  <label for="ep_actual">El episodio actual es:</label>
			  <select class="form-control" name="ep_actual">
				@foreach($ep_actual as $ep)
				<option> {{$ep}} </option>
				@endforeach
			  </select>
			</div>
		  </div>
			<div class="row">
				<div class="form-group col-md-6">
				  <label for="epPrevios">Número de episodios previos:</label>
				  <input type="number" class="form-control input-group-lg" name="epPrevios">
				</div>

				<div class="form-group col-md-6">
				  <label for="edadIni">Edad de inicio del primer episodio:</label>
				  <input type="number" class="form-control input-group-lg" name="edadIni">
				</div>
			</div>


      <div class="row">

        <div class="form-group col-md-6">
          <label for="inicio_sintomas">Inicio de los sintomas el episodio actual:</label>
          <select class="form-control" name="inicio_sintomas">
            @foreach($inicio_sintomas as $ini)
            <option> {{$ini}} </option>
            @endforeach
          </select>
        </div>


        <div class="form-group col-md-6">
          <label for="inicioEpisodio" class="col-6 col-form-label">Fecha probable de inicio del actual episodio:</label>
          <input class="form-control" type="date" name="inicioEpisodio">
        </div>

      </div>


      <div class="row">
        <legend>¿Ha Recibido Tratamiento para el Episodio Actual?</legend>

        <fieldset class="form-group col-xs-3">

          @for($i=0; $i < count($tratamiento)/2 ; $i++)

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento[]" value="{{ $tratamiento[$i] }}">
              {{ $tratamiento[$i] }}
            </label>
          </div>

          @endfor
        </fieldset>



        <fieldset class="form-group col-xs-3">

          @for($i=count($tratamiento)/2 + 1; $i < count($tratamiento); $i++)

          <div class="form-check">
            <label class="form-check-label"><input class="form-check-input" type="checkbox" name="tratamiento[]" value="{{ $tratamiento[$i] }}">
              {{ $tratamiento[$i] }}
            </label>
          </div>
          @endfor

          <div class="form-check">
            <label class="form-check-label"><input type="text" class="form-control input-group-lg" name="tratamiento[]" placeholder="Otro ¿cuál?">
            </label>
          </div>

        </fieldset>

      </div>

      <div class="form-group">
        <label>Psicofármacos Empleados para el Episodio Actual:</label>
        <textarea class="form-control" name="psicofármacos" rows="3"></textarea>
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

</form> <!-- jumbotron -->
@stop