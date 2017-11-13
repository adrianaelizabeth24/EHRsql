@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron">
	<div class="container">

    	<h2>PEEA del Episodio Actual</h2>

         <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-4"></th>
                    <th class="col-xs-6"></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label>El episodio actual es: </label>
                        </td>
                        <td>
                            {{$peea->ep_actual}}
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <label>El episodio actual es: </label>
                        </td>
                        <td>
                            {{$peea->ep_actual}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Número de episodios previos: </label>
                        </td>
                        <td>
                            {{$peea->epPrevios}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Edad de inicio del primer episodio: </label>
                        </td>
                        <td>
                            {{$peea->edadIni}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Inicio de los sintomas el episodio actual: </label>
                        </td>
                        <td>
                            {{$peea->inicio_sintomas}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Fecha probable de inicio del actual episodio: </label>
                        </td>
                        <td>
                            {{$peea->inicioEpisodio}}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>¿Ha Recibido Tratamiento para el Episodio Actual?</label><br>
                        </td>
                        <td>
                            @foreach ( explode(',', $peea->tratamiento) as $trat )
                                {{ $trat }}<br>
                            @endforeach
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label>Psicofármacos Empleados para el Episodio Actual: </label>
                        </td>
                        <td>
                            {{$peea->psicofármacos}}
                        </td>
                    </tr>


                </tbody>
        </table>

        <div class="col-xs-2">
        	<a href="/paciente/{{{$peea->id_paciente}}}" class="btn btn-info btn-lg btn-block"> <strong>Regresar</strong> </a>
        </div>

        <div class="col-xs-2">
            <a href="/peea/{{{$peea->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
        </div>

        <form action="{{action('PeeaController@destroy', $peea->id)}}" method="post" style="display:unset;"> {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">

            <div class="col-xs-2">
                <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
            </div>
        </form>
        </div>


    </div>
</div>

@stop