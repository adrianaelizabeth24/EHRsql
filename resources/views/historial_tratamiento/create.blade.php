@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('historial_tratamiento')}}">
        {{csrf_field()}}


        <div class="container">
            <h2>Datos del paciente</h2>

            <div class="row">
                <div class="col-md-8">
                    <input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
                    <label>{{$paciente->nombre}}</label>
                    <label>{{$paciente->apellido_paterno}}</label>
                    <label>{{$paciente->apellido_materno}}</label>
                </div>
            </div>

            <h2>Historial Tratamiento</h2>

            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="tratamiento_previo" placeholder="Tratamiento previo por problemas emocionales"/>
                    <br/>
                    <label>Ha sido tratado por</label><br/>
                    <input type="radio" name="quien_lo_trato" value="psiquiatra">Psiquiatra<br/>
                    <input type="radio" name="quien_lo_trato" value="medico no psiquiatra">Médico no psiquiatra<br/>
                    <input type="radio" name="quien_lo_trato" value="psicologo">Psicólogo<br/>
                    <input type="radio" name="quien_lo_trato" value="psicoanalista">Psicoanalista<br/>
                    <input type="radio" name="quien_lo_trato" value="otro">Otro<br/>

                    <br/>

                    <label>Alguna vez fue hospitalizado por problemas emocionales</label><br/>
                    <input type="radio" name="hospitalizacion" value="1"/> Sí<br/>
                    <input type="radio" name="hospitalizacion" value="0"/> No<br/>
                    <br/>

                    <input class="form-control" type="date" name="primera_hospitalizacion" placeholder="Fecha Primera Hospitalizacion"/>

                    <br/>

                    <input class="form-control" type="number" name="no_hospitalizaciones" placeholder="Número de Hospitalizaciones"/>
                    <br/>

                    <input class="form-control" type="number" name="duracion_hospitalizacion" placeholder="Duración de la última hospitalizacion"/>
                    <br/>

                    <input class="form-control" type="text" name="motivo_hospitalizacion" placeholder="Motivo última hospitalizacion"/>
                    <br/>


                    <input class="form-control" type="text" name="tratamiento" placeholder="Tratamiento"/>

                    <textarea name="tratamiento" placeholder="Cronología de todos los episodios pasados de enfermedad mental y sus tratamientos, incluyendo los síndromes psiquiátricos no formalmente diagnosticados en ese tiempo, diagnósticos previos establecidos, tratamientos ofrecidos y respuestas a los mismos.
Consigne dosis, duración, eficacia, efectos secundarios y adherencia del paciente a los medicamentos prescritos.
"></textarea>

                    <br/>

                </div>
            </div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop