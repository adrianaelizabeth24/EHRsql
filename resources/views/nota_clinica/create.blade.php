@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form class="jumbotron" method="post" action="{{url('nota_clinica')}}">
        {{csrf_field()}}

        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <input type="hidden" name="id_nota_clinica_helper" value="{{$id}}"/>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2>Nota Clinica</h2>


            <div class="row">
                <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="No. de sesión" name="no_de_sesion"/>
                    <br/>
                    <input class="form-control" type="number" placeholder="Edad" name="edad"/>
                    <br/>
					<label>Fecha de la sesión</label>
                    <input class="form-control" type="date" placeholder="Fecha" name="fecha"/>
					<br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
					<label>Horario de la consulta</label>
                    <input class="form-control" placeholder="Horario de consulta" type="time" name="horario_consulta"/>
                    <br/>
                    <input class="form-control" placeholder="Modalidad terapeutica" type="text" name="modalidad_terapeutica"/>
                    <br/>
                    <textarea class="form-control" name="comentarios" rows="10" cols="40" placeholder="Escribe aquí tus notas de evolución"></textarea>
                    <br/>
                    <textarea class="form-control" name="diagnostico" placeholder="Diagnostico"></textarea>
                    <br/>
                    <textarea class="form-control" name="planes_tratamiento" placeholder="Planes y/o Tratamiento"></textarea>
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info">
                </div>
            </div>
        </div>
        </div>
    </form>
@stop