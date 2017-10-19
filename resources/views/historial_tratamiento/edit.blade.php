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
                    <input type="text" name="quien_lo_trato" placeholder="Doctor Responsable" value="{{$historial->quien_lo_trato}}"/>
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

                    <input type="date" name="primera_hospitalizacion" placeholder="Fecha Primera Hospitalizacion" value="{{$historial->primera_hospitalizacion}}"/>
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