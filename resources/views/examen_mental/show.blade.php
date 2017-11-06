@extends('layouts.app')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="container">
            <h2>Examen Mental</h2>
        </div>
        <div id="div_pacientes" class="container">
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Persona que realizó las escalas : </label><p>{{$examen->escalas_realizadas}}</p>
                            <label>HAM-D : </label><p>{{$examen->ham_d}}</p>
                            <label>HAM-A : </label><p>{{$examen->ham_a}}</p>
                            <label>Y-BOCS : </label><p>{{$examen->y_bocs}}</p>
                            <label>Q-LES-Q : </label><p>{{$examen->q_les_q}}</p>
                            <label>GADI : </label><p>{{$examen->gadi}}</p>
                            <label>BDI : </label><p>{{$examen->bdi}}</p>
                            <label>SPIN : </label><p>{{$examen->spin}}</p>
                            <label>PAS : </label><p>{{$examen->pas}}</p>            
                            <label>Descripción de hallazgos físicos o neurológicos que no hayan sido documentados en otra parte de la historia :</label><p>{{$examen->hallazgos}}</p>
                            <label>Acostado PT (Despues de 2 minutos) :</label>
                            <label>Solicitado : </label><p>{{$examen->pt_acostado_solicitado}}</p>
                            <label>Diagnosticado : </label><p>{{$examen->pt_acostado_diagnosticado}}</p>                     
                            <label>Acostado ST (Despues de 2 minutos) :</label> 
                            <label>Solicitado : </label><p>{{$examen->st_acostado_solicitado}}</p>
                            <label>Diagnosticado : </label><p>{{$examen->st_acostado_diagnosticado}}</p>   
                            <label>Parado PT (Despues de 2 minutos) :</label> 
                            <label>Solicitado : </label><p>{{$examen->pt_parado_solicitado}}</p>
                            <label>Diagnosticado : </label><p>{{$examen->pt_parado_diagnosticado}}</p> 
                            <label>Parado ST (Despues de 2 minutos) :</label> 
                            <label>Solicitado : </label><p>{{$examen->st_parado_solicitado}}</p>
                            <label>Diagnosticado : </label><p>{{$examen->st_parado_diagnosticado}}</p> 
                            <label>Frecuencia cardiaca :</label> 
                            <label>Acostado (despues de 5 min) : </label><p>{{$examen->frecuencia_acostado}}</p>
                            <label>Parado (despues de 2 min) : </label><p>{{$examen->frecuencia_parado}}</p> 
                            <label>Ritmo regular : </label><p>{{$examen->ritmo_regular}}</p>
                            <label>Ritmo irregular : </label><p>{{$examen->ritmo_irregular}}</p> 
                            <label>Peso : </label><p>{{$examen->peso}}</p>
                            <label>KGS : </label><p>{{$examen->kgs}}</p> 
                            <label>Talla : </label><p>{{$examen->talla}}</p>
                            <label>CMS : </label><p>{{$examen->cms}}</p> 
                            <label>Circunferencia abdominal (en cm) : </label><p>{{$examen->circunferencia}}</p>
                            <label>Temperatura (en gc) : </label><p>{{$examen->temperatura}}</p> 
                            <label>Peso usual : </label><p>{{$examen->peso}}</p>
                            <label>IMC : </label><p>{{$examen->imc}}</p> 


                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$examen->id_paciente}}}" class="btn btn-info">Regresar</a>
				<a href="/examen_mental/{{{$examen->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('ExamenMentalController@destroy', $examen->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


