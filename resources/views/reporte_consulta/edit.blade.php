@extends('layouts.app')
@section('content')

<link href="{{ asset('css/paciente.css')}}" rel="stylesheet">

    <form method="post" action="{{action('ReporteConsultaController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

            <div class="container">
                <h2>Reporte de Consulta</h2>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" placeholder="Fecha Actual" name="fecha" value="{{$reporte->fecha}}"/>
                        <input class="form-control" type="text" placeholder="Interrogatorio" name="interrogatorio" value="{{$reporte->interrogatorio}}" />
                        <input class="form-control" type="text" placeholder="Motivo" name="motivo" value="{{$reporte->motivo}}" />

                        <label>Tuvo Episodio</label><br/>
                        @if($reporte->fecha == 1)
                        <input type="radio" name="episodio" value="1" checked>Sí<br/>
                        <input type="radio" name="episodio" value="0">No<br/>
                        @else
                            <input type="radio" name="episodio" value="1">Sí<br/>
                            <input type="radio" name="episodio" value="0" checked>No<br/>
                        @endif
                        <br/>

                        <input class="form-control" type="number" placeholder="Número de Episodios" name="numero_de_episodios" value="{{$reporte->numero_de_episodios}}"/>

                        <input class="form-control" type="number" placeholder="Edad Primer Episodio" name="edad_primer_episodio" value="{{$reporte->edad_primer_episodio}}"/>
                        <input class="form-control" type="date" placeholder="Fecha último episodio" name="fecha_ultimo_episodio" value="{{$reporte->fecha_ultimo_episodio}}"/>

                        <input class="form-control" type="text" placeholder="tratamiento actual" name="tratamiento_actual" value="{{$reporte->tratamiento_actual}}"/>

                        <input class="form-control" type="text"  placeholder="tratamiento anterior" name="tratamiento_anterior" value="{{$reporte->tratamiento_anterior}}"/>
                    </div>
                </div>

                <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
            </div>
    </form>
@stop