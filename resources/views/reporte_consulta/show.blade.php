@extends('layouts.app')
@section('content')

        <div class="jumbotron">


            <div class="container">
                <h2>Reporte de Consulta</h2>
                <div class="row">
                    <div class="col-md-6">
                        <label>Fecha Actual :</label>
						<p>{{$reporte->fecha}}</p>
						
                        <label>Motivo: </label>
						<p>{{$reporte->motivo}}</p>
						
                        <label>Número de Episodios</label>
						<p>{{$reporte->numero_de_episodios}}</p>             

                        <label>Fecha último episodio</label> 
						<p>{{$reporte->fecha_ultimo_episodio}}</p>

                        <label>Tratamiento anterior</label>
						<p>{{$reporte->tratamiento_anterior}}</p>
                    </div>
					<div class="col-md-6">
						<label>Interrogatorio:  </label>
						<p>{{$reporte->interrogatorio}}</p>
						
						<label>Tuvo Episodio</label>
						<p>{{$reporte->episodio}}</p>
						
						<label>Edad Primer Episodio</label> 
						<p>{{$reporte->edad_primer_episodio}}</p>
						
						<label>Tratamiento actual</label> 
						<p>{{$reporte->tratamiento_actual}}</p>
					</div>
                </div>
                <a href="/paciente/{{{$reporte->id_paciente}}}" class="btn btn-info">Regresar</a>
				<a href="/reporte_consulta/{{{$reporte->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('ReporteConsultaController@destroy', $reporte->id)}}" method="post" style="display:unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
                
            </div>


@stop