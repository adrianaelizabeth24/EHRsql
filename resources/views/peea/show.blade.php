@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">
	<div class="container">
    	<h2>PEEA del Episodio Actual</h2>
		
		<div class="row">
			<label>El episodio actual es: </label>
			{{$peea->ep_actual}}
		</div>

    	<div class="row">
    		<label>Número de episodios previos: </label><br>{{$peea->epPrevios}}
    	</div>

    	<div class="row">
    		<label>Edad de inicio del primer episodio: </label><br>{{$peea->edadIni}}
    	</div>

    	<div class="row">
    		<label>Inicio de los sintomas el episodio actual: </label><br>{{$peea->inicio_sintomas}}
    	</div>

    	<div class="row">
    		<label>Fecha probable de inicio del actual episodio: </label><br>{{$peea->inicioEpisodio}}
    	</div>



    	<div class="row">
    		<label>¿Ha Recibido Tratamiento para el Episodio Actual?</label><br>

    		<ul>
	    		@foreach ( explode(',', $peea->tratamiento) as $trat )
	    			<li>
	    			{{ $trat }}
	    			</li>
	    		@endforeach
    		</ul>
    	</div>


    	<div class="row">
    		<label>Psicofármacos Empleados para el Episodio Actual: </label><br>{{$peea->psicofármacos}}
    	</div>



    	<a href="/paciente/{{{$peea->id_paciente}}}" class="btn btn-info">Regresar</a>
        <form action="{{action('PeeaController@destroy', $peea->id)}}" method="post" style="display:unset;">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Borrar</button>
        </form>


    </div>
</div>

@stop