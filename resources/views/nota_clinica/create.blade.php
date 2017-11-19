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
                    <input type="text" placeholder="No. de sesión" name="no_de_sesion"/>
                    <br/>
                    <input type="number" placeholder="Edad" name="edad"/>
                    <br/>
                    <input type="date" placeholder="Fecha" name="fecha"/>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input placeholder="Horario de consulta" type="time" name="horario_consulta"/>
                    <br/>
                    <input placeholder="Modalidad terapeutica" type="text" name="modalidad_terapeutica"/>
                    <br/>
                    <textarea name="comentarios" rows="10"
                              cols="40" placeholder="Escribe aquí tus notas de evolución"></textarea>
                    <br/>
                    <textarea name="diagnostico" placeholder="diagnostico"></textarea>
                    <br/>
                    <textarea name="planes_tratamiento" placeholder="Planes y/o Tratamiento"></textarea>
                    <br/>
                    <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
                </div>
            </div>
        </div>
        </div>
    </form>
@stop