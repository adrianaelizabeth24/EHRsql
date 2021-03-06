@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="container">
            <h2>Examen Mental <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-xs-2"></th>
                        <th class="col-xs-4"></th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr><td><label>Persona que realizó las escalas : </label></td><td>{{$examen->escalas_realizadas}}</td>
                            <tr><td><label>HAM-D : </label></td><td>{{$examen->ham_d}}</td></tr>
                            <tr><td><label>HAM-A : </label></td><td>{{$examen->ham_a}}</td></tr>
                            <tr><td><label>Y-BOCS : </label></td><td>{{$examen->y_bocs}}</td></tr>
                            <tr><td><label>Q-LES-Q : </label></td><td>{{$examen->q_les_q}}</td></tr>
                            <tr><td><label>GADI : </label></td><td>{{$examen->gadi}}</td></tr>
                            <tr><td><label>BDI : </label></td><td>{{$examen->bdi}}</td></tr>
                            <tr><td><label>SPIN : </label></td><td>{{$examen->spin}}</td></tr>
                            <tr><td><label>PAS : </label></td><td>{{$examen->pas}}</td></tr>
                            <tr><td><label>Descripción de hallazgos físicos o neurológicos que no hayan sido documentados en otra parte de la historia :</label></td><td>{{$examen->hallazgos}}</td></tr>
                            <tr></tr>
                            <tr><td><label>Acostado PT (Despues de 2 minutos)</label></td>
                            <tr><td><label>Sistolica : </label></td><td>{{$examen->pt_acostado_sistolica}}</td></tr>
                            <tr><td><label>Diastolica : </label></td><td>{{$examen->pt_acostado_diastolica}}</td></tr>
                            <tr></tr>
                            <tr><td><label>Acostado ST (Despues de 2 minutos)</label></td></tr>
                            <tr><td><label>Sistolica : </label></td><td>{{$examen->st_acostado_sistolica}}</td></tr>
                            <tr><td><label>Diastolica : </label></td><td>{{$examen->st_acostado_diastolica}}</td></tr>
                            <tr></tr>
                            <tr><td><label>Parado PT (Despues de 2 minutos)</label>
                            <tr><td><label>Sistolica : </label></td><td>{{$examen->pt_parado_sistolica}}</td></tr>
                            <tr><td><label>Diastolica : </label></td><td>{{$examen->pt_parado_diastolica}}</td></tr>
                            <tr></tr>
                            <tr><td><label>Parado ST (Despues de 2 minutos)</label></td>
                            <tr><td><label>Sistolica : </label></td><td>{{$examen->st_parado_sistolica}}</td></tr>
                            <tr><td><label>Diastolica : </label></td><td>{{$examen->st_parado_diastolica}} </td></tr>
                            <tr></tr>
                            <tr><td><label>Frecuencia cardiaca</label></td>
                            <tr><td><label>Acostado (despues de 5 min) : </label></td><td>{{$examen->frecuencia_acostado}}</td></tr>
                            <tr><td><label>Parado (despues de 2 min) : </label></td><td>{{$examen->frecuencia_parado}}</td></tr>
                            <tr></tr>
                            <tr><td><label>Ritmo regular : </label></td><td>{{$examen->ritmo_regular}}</td></tr>
                            <tr><td><label>Ritmo irregular : </label></td><td>{{$examen->ritmo_irregular}}</td></tr>
                            <tr><td><label>Peso : </label></td><td>{{$examen->peso}} kg</td></tr>
                            <tr><td><label>Talla : </label></td><td>{{$examen->talla}} cm</td></tr>
                            <tr><td><label>Circunferencia abdominal (en cm) : </label></td><td>{{$examen->circumferencia}}</td></tr>
                            <tr><td><label>Temperatura (en gc) : </label></td><td>{{$examen->temperatura}}</td></tr>
                            <tr><td><label>Peso usual : </label></td><td>{{$examen->peso_usual}}</td></tr>
                            <tr><td><label>IMC : </label></td><td>{{$examen->imc}}</td></tr>
                        </tbody>
                    </thead>
                </table>


                <div class="col-xs-2">
                    <a href="/paciente/{{{$examen->id_paciente}}}" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
                </div>

                <div class="col-xs-2">
				    <a href="/examen_mental/{{{$examen->id}}}/edit" class="btn btn-warning btn-lg btn-block"><strong>Editar</strong></a>
                </div>

                <form action="{{action('ExamenMentalController@destroy', $examen->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <div class="col-xs-2">
                        <button class="btn btn-danger btn-lg btn-block" type="submit"><strong>Borrar</strong></button>
                    </div>
                </form>

    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->

@stop


