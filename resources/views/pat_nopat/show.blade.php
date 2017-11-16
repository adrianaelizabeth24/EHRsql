@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">
	<div class="container">
    	<h2>Antecedentes Personales Patológicos y no Patológicos</h2>

        <br>

        <h4><strong>HISTORIA CLÍNICA GENERAL</strong></h4>
        <table class="table">
            <thead>
                <tr>
                    <th class="col-xs-3">ANTECEDENTE</th>
                    <th class="col-xs-5">DETALLES</th>
                    <th class="col-xs-4">¿PRESENTA ANTECEDENTE?</th>
                </tr>
            </thead>
            <tbody>

                @foreach($antecedentes as $ant)
                <tr>
                    <td><label>{{$ant->preguntas}}</label></td>

                    @foreach ($antecedentes_opciones as $ant_opciones)
                        @if($ant_opciones->id_antecedente == $ant->id)
                            <td>{{$ant_opciones->detalles}}</td>
                            <td>{{$ant_opciones->valor}}</td>
                        @endif
                    @endforeach

                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row">
            <label>NOTAS DE ANTECEDENTES PERSONALES PATOLÓGICOS Y NO PATOLÓGICOS:</label>
            <textarea disabled class="form-control" name="antecedentes_notas" rows="3">{{ $pat_nopat-> antecedentes_notas }}</textarea>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th class="col-xs-4" align="center"></th>
                    <th class="col-xs-6"></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><label>No. de tazas de café o té negro al día: </label></td>
                    <td>{{ $pat_nopat-> tazasCafé  }}</td>
                </tr>
            </tbody>
        </table>



        <table class="table">
            <thead>
                <tr>
                    <th class="col-xs-4" align="center">TABAQUISMO</th>
                    <th class="col-xs-6"></th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td><label>Nivel: </label></td>
                    <td>{{ $pat_nopat-> tabaquismo  }}</td>
                </tr>

                <tr>
                    <td><label>Consumo diario de tabaco: </label></td>
                    <td>{{ $pat_nopat-> consumoDiario  }} cigarros por día</td>
                </tr>

                <tr>
                    <td><label>Años de tabaquismo: </label></td>
                    <td>{{ $pat_nopat-> añosTabaquismo  }} años</td>
                </tr>

                <tr>
                    <td><label>Edad de Inicio: </label></td>
                    <td>{{ $pat_nopat-> edadInicio  }} años</td>
                </tr>


                <tr>
                    <td><label>Edad en que se suspendió: </label></td>
                    <td>{{ $pat_nopat-> edadSuspendió  }} años</td>
                </tr>
            </tbody>
        </table>



        <table class="table">
            <thead>
                <tr>
                    <th class="col-xs-4" align="center">BEBIDAS ALCOHOLICAS</th>
                    <th class="col-xs-6"></th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td><label>Frecuencia: </label></td>
                    <td>{{ $pat_nopat-> alcohol_frecuencia  }}</td>
                </tr>

                <tr>
                    <td><label>Cantidad: </label></td>
                    <td>{{ $pat_nopat-> alcohol_cantidad  }}</td>
                </tr>

                <tr>
                    <td><label>¿Alguna vez le dijeron o sintió que debería dejar de tomar? </label></td>
                    <td>{{ $pat_nopat-> dejarTomar  }}</td>
                </tr>

                <tr>
                    <td><label>¿Alguna vez tomo en la mañana para calmar sus nervios o cortar la cruda? </label></td>
                    <td>{{ $pat_nopat-> formaTomar  }}</td>
                </tr>

                <tr>
                    <td><label>¿Alguna vez se sintió mal o culpable por su forma de tomar? </label></td>
                    <td>{{ $pat_nopat-> tomarMañana  }}</td>
                </tr>

            </tbody>
        </table>




    	<div class="row">
    		<label>PROBLEMAS RELACIONADOS AL CONSUMO DE SUSTANCIAS: </label> {{ $pat_nopat-> problemas  }}
    	</div>


        <div class="col-xs-2">
            <a href="/paciente/{{{$pat_nopat->id_paciente}}}" class="btn btn-info btn-lg btn-block"> <strong>Regresar</strong> </a>
        </div>

        <div class="col-xs-2">
            <a href="/pat_nopat/{{{$pat_nopat->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
        </div>

        <form action="{{action('PatnoPatController@destroy', $pat_nopat->id)}}" method="post" style="display:unset;"> {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">

            <div class="col-xs-2">
                <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
            </div>
        </form>
        </div>



    </div>
</div>


@stop