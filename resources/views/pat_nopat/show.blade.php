@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">
	<div class="container">
    	<h2>Antecedentes Personales Patológicos y no Patológicos</h2>


    	<div class="row">
    		<label>NOTAS DE ANTECEDENTES PERSONALES PATOLÓGICOS Y NO PATOLÓGICOS:</label><br> {{ $pat_nopat-> antecedentes_notas }} <br>
    	</div>


		<div class="col-md-12">
			@foreach($antecedentes as $ant)
				<label>
					{{$ant->preguntas}}
				</label>
				@foreach ($antecedentes_opciones as $ant_opciones)
					@if($ant_opciones->id_antecedente == $ant->id)
						{{$ant_opciones->valor}}
					<br/>
						detalles:
						{{$ant_opciones->detalles}}
					@endif
				@endforeach
				<br/>
			@endforeach
		</div>

    	<div class="row">
    		<label>No. de tazas de café o té negro al día: </label> {{ $pat_nopat-> tazasCafé  }}
    	</div>

    	<br>


    	<div class="row">
    		<legend>TABAQUISMO</legend>
    	</div>

    	<div class="row">
    		<label>Nivel: </label> {{ $pat_nopat-> tabaquismo  }} cigarros por día
    	</div>

    	<div class="row">
    		<label>Consumo diario de tabaco: </label> {{ $pat_nopat-> consumoDiario  }} cigarros por día
    	</div>

    	<div class="row">
    		<label>Años de tabaquismo: </label> {{ $pat_nopat-> añosTabaquismo  }} años
    	</div>

    	<div class="row">
    		<label>Edad de Inicio: </label> {{ $pat_nopat-> edadInicio  }} años
    	</div>

    	<div class="row">
    		<label>Edad en que se suspendió: </label> {{ $pat_nopat-> edadSuspendió  }} años
    	</div>

    	<br>

    	<div class="row">
    		<legend>BEBIDAS ALCOHOLICAS</legend>
    	</div>

    	<div class="row">
    		<label>Frecuencia: </label> {{ $pat_nopat-> alcohol_frecuencia  }}
    	</div>

    	<div class="row">
    		<label>Cantidad: </label> {{ $pat_nopat-> alcohol_cantidad  }}
    	</div>


    	<div class="row">
    		<label>¿Alguna vez le dijeron o sintió que debería dejar de tomar? </label> {{ $pat_nopat-> dejarTomar  }}
    	</div>


    	<div class="row">
    		<label>¿Alguna vez tomo en la mañana para calmar sus nervios o cortar la cruda? </label> {{ $pat_nopat-> formaTomar  }}
    	</div>

    	<div class="row">
    		<label>¿Alguna vez se sintió mal o culpable por su forma de tomar? </label> {{ $pat_nopat-> tomarMañana  }}
    	</div>




    	<div class="row">
    		<label>PROBLEMAS RELACIONADOS AL CONSUMO DE SUSTANCIAS: </label> {{ $pat_nopat-> problemas  }}
    	</div>




    </div>
</div>


@stop