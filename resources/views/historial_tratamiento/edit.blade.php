@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('HistorialTratamientoController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="jumbotron">

            <div class="container">
                <h2>Historial Tratamiento</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="tratamiento_previo" placeholder="Tratamiento previo" value="{{$historial->tratamiento_previo}}"/>
                    <br/>

                    <label>Ha sido tratado por</label><br/>
                    @switch($historial->quien_lo_trato)
                        @case('Psiquiatra)
                    <input type="radio" name="quien_lo_trato" value="psiquiatra" checked>Psiquiatra<br/>
                    <input type="radio" name="quien_lo_trato" value="medico no psiquiatra">Médico no psiquiatra<br/>
                    <input type="radio" name="quien_lo_trato" value="psicologo">Psicólogo<br/>
                    <input type="radio" name="quien_lo_trato" value="psicoanalista">Psicoanalista<br/>
                    <input type="radio" name="quien_lo_trato" value="otro">Otro<br/>
                    @break
                    @case('Médico no psiquiatra')
                        <input type="radio" name="quien_lo_trato" value="psiquiatra">Psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="medico no psiquiatra" checked>Médico no psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="psicologo">Psicólogo<br/>
                        <input type="radio" name="quien_lo_trato" value="psicoanalista">Psicoanalista<br/>
                        <input type="radio" name="quien_lo_trato" value="otro">Otro<br/>
                    @break
                    @case('Psicólogo')
                        <input type="radio" name="quien_lo_trato" value="psiquiatra">Psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="medico no psiquiatra">Médico no psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="psicologo" checked>Psicólogo<br/>
                        <input type="radio" name="quien_lo_trato" value="psicoanalista">Psicoanalista<br/>
                        <input type="radio" name="quien_lo_trato" value="otro">Otro<br/>
                    @break
                    @case('Psicoanalista')
                        <input type="radio" name="quien_lo_trato" value="psiquiatra">Psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="medico no psiquiatra">Médico no psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="psicologo">Psicólogo<br/>
                        <input type="radio" name="quien_lo_trato" value="psicoanalista" checked>Psicoanalista<br/>
                        <input type="radio" name="quien_lo_trato" value="otro">Otro<br/>
                    @break
                    @case('Otro')
                        <input type="radio" name="quien_lo_trato" value="psiquiatra">Psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="medico no psiquiatra">Médico no psiquiatra<br/>
                        <input type="radio" name="quien_lo_trato" value="psicologo">Psicólogo<br/>
                        <input type="radio" name="quien_lo_trato" value="psicoanalista">Psicoanalista<br/>
                        <input type="radio" name="quien_lo_trato" value="otro" checked>Otro<br/>
                    @break
                    @endswitch
                    <br/>

                    <label>Hospitalización</label><br/>
                    @if($historial->hospitalizacion == 1)
                    <input type="radio" name="hospitalizacion" value="1" checked/> Sí<br/>
                    <input type="radio" name="hospitalizacion" value="0"/> No<br/>
                    @else
                        <input type="radio" name="hospitalizacion" value="1"/> Sí<br/>
                        <input type="radio" name="hospitalizacion" value="0" checked/> No<br/>
                    @endif
                    <br/>

                    <input type="number" name="primera_hospitalizacion" placeholder="Edad Primera Hospitalizacion" value="{{$historial->primera_hospitalizacion}}"/>
                    <br/>

                    <input type="number" name="no_hospitalizaciones" placeholder="Número de Hospitalizaciones" value="{{$historial->no_hospitalizaciones}}"/>
                    <br/>

                    <input type="number" name="duracion_hospitalizacion" placeholder="Duración de la última hospitalizacion" value="{{$historial->duracion_hospitalizacion}}"/>
                    <br/>

                    <input type="text" name="motivo_hospitalizacion" placeholder="Motivo última hospitalizacion" value="{{$historial->motivo_hospitalizacion}}"/>
                    <br/>

                    <input type="text" name="tratamiento" placeholder="Tratamiento" value="{{$historial->tratamiento}}"/>
                    <br/>

                </div>
            </div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop