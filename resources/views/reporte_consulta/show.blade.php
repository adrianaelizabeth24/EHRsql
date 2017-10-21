@extends('layouts.app')
@section('content')

        <div class="jumbotron">


            <div class="container">
                <h2>Reporte de Consulta</h2>
                <div class="row">
                    <div class="col-md-12">
                        <label>Fecha Actual :</label>{{$reporte->fecha}}
                        <label>Interrogatorio:  </label>{{$reporte->interrogatorio}}
                        <label>Motivo: </label>{{$reporte->motivo}}

                        <label>Tuvo Episodio</label>{{$reporte->episodio}}
                        <br/>
                        <label>Número de Episodios</label>{{$reporte->numero_de_episodios}}

                        <label>Edad Primer Episodio</label> {{$reporte->edad_primer_episodio}}

                        <label>Fecha último episodio</label> {{$reporte->fecha_ultimo_episodio}}

                        <label>tratamiento actual</label> {{$reporte->tratamiento_actual}}

                        <label>tratamiento anterior</label>{{$reporte->tratamiento_anterior}}
                    </div>
                </div>
                <a href="/paciente/{{{$reporte->id_paciente}}}" class="btn btn-info">Regresar</a>
                <form action="{{action('ReporteConsultaController@destroy', $reporte->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
                <a href="/reporte_consulta/{{{$reporte->id}}}/edit" class="btn btn-warning">Editar</a>
            </div>


@stop