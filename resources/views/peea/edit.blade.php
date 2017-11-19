@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
<form method="post" action="{{action('PeeaController@update', $id)}}">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH"/>

<div class="jumbotron">
	<div class="container">

    	<h2>PEEA del Episodio Actual <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

   		<form>

		  <div class="row">
			<div class="form-group col-md-12">
			  <label for="ep_actual">El episodio actual es:</label>
			  <select class="form-control" name="ep_actual">

				@foreach($ep_actual as $ep)
				<option value= "{{ $ep }}" 
					@if ($ep == old('ep_actual', $peea->ep_actual))
						selected="selected"
				    @endif
				  	> {{ $ep }} </option>
				@endforeach

			  </select>
			</div>
		  </div>
			<div class="row">
				<div class="form-group col-md-6">
				  <label for="epPrevios">Número de episodios previos:</label>
				  <input type="number" class="form-control input-group-lg" name="epPrevios" value = {{$peea->epPrevios}}>
				</div>

				<div class="form-group col-md-6">
				  <label for="edadIni">Edad de inicio del primer episodio:</label>
				  <input type="number" class="form-control input-group-lg" name="edadIni" value = {{$peea->edadIni}}>
				</div>
			</div>


      <div class="row">

        <div class="form-group col-md-6">
          <label for="inicio_sintomas">Inicio de los sintomas el episodio actual:</label>
          <select class="form-control" name="inicio_sintomas">


            @foreach($inicio_sintomas as $ini)
				<option value= "{{ $ini }}" 
					@if ($ini == old('inicio_sintomas', $peea->inicio_sintomas))
						selected="selected"
				    @endif
				  	> {{ $ini }} </option>
				@endforeach


          </select>
        </div>


        <div class="form-group col-md-6">
          <label for="inicioEpisodio" class="col-6 col-form-label">Fecha probable de inicio del actual episodio:</label>
          <input class="form-control" type="date" name="inicioEpisodio" value = {{ $peea->inicioEpisodio }}>
        </div>

      </div>


      <div class="row">
        <legend>¿Ha Recibido Tratamiento para el Episodio Actual?</legend>

        <fieldset class="form-group col-xs-3">

          @for($i=0; $i < count($tratamiento)/2 ; $i++)

          {{ Form::checkbox('tratamiento[]', $tratamiento[$i], in_array($tratamiento[$i],explode(',',$peea->tratamiento))  ) }}
          {{ Form::label('tratamiento', $tratamiento[$i] ) }} <br>

          @endfor
        </fieldset>



        <fieldset class="form-group col-xs-3">

          @for($i=count($tratamiento)/2 + 1; $i < count($tratamiento); $i++)

          {{ Form::checkbox('tratamiento[]', $tratamiento[$i], in_array($tratamiento[$i],explode(',',$peea->tratamiento))  ) }}
          {{ Form::label('tratamiento', $tratamiento[$i] ) }} <br>


          @endfor

          <div class="form-check">
            <label class="form-check-label"><input type="text" class="form-control input-group-lg" name="tratamiento[]" placeholder="Otro ¿cuál?">
            </label>
          </div>

        </fieldset>

      </div>

      <div class="form-group">
        <label>Psicofármacos Empleados para el Episodio Actual:</label>
        <textarea class="form-control" name="psicofármacos" rows="3"> {{ $peea->psicofármacos }} </textarea>
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