@extends('layouts.app')
@section('content')

    <form class="jumbotron" method="post" action="{{url('historia_psiquiatrica')}}">
    {{csrf_field()}}

            <div class="container">
                <h2>Datos del paciente</h2>

				<input type="hidden" name="id_paciente" value="{{$paciente->id}}"/>
				<label>{{$paciente->nombre}}</label>
				<label>{{$paciente->apellido_paterno}}</label>
				<label>{{$paciente->apellido_materno}}</label>


            	<h2>Historia Psiquiatrica Familiar</h2>

            <div class="row">
                <div class="col-md-12">
                    <label>Ezquizofrenia</label><br/>
                    <input type="radio" name="ezquizofrenia" value="1"> Sí<br/>
                    <input type="radio" name="ezquizofrenia" value="0"> No<br/>
                    <br/>

                    <label>Bipolaridad</label><br/>
                    <input type="radio" name="bipolaridad" value="1"> Sí <br/>
                    <input type="radio" name="bipolaridad" value="0"> No <br/>
                    <br/>

                    <label>Alcoholismo</label><br/>
                    <input type="radio" name="alcoholismo" value="1">Sí<br/>
                    <input type="radio" name="alcoholismo" value="0">No<br/>
                    <br/>

                    <label>Drogas</label><br/>
                    <input type="radio" name="drogas" value="1">Sí<br/>
                    <input type="radio" name="drogas" value="0">No<br/>
                    <br/>

                    <label>Depresión</label><br/>
                    <input type="radio" name="depresion" value="1">Sí<br/>
                    <input type="radio" name="depresion" value="0">No<br/>
                    <br/>

                    <label>Disimia</label><br/>
                    <input type="radio" name="disimia" value="1">Sí<br/>
                    <input type="radio" name="disimia" value="0">No<br/>
                    <br/>

                    <label>Panico</label><br/>
                    <input type="radio" name="panico" value="1">Sí<br/>
                    <input type="radio" name="panico" value="0">No<br/>
                    <br/>

                    <label>Agorafobia</label><br/>
                    <input type="radio" name="agorafobia" value="1">Sí<br/>
                    <input type="radio" name="agorafobia" value="0">No<br/>
                    <br/>

                    <label>Obsesivo Compulsivo</label><br/>
                    <input type="radio" name="obsesion" value="1">Si<br/>
                    <input type="radio" name="obsesion" value="0">No<br/>
                    <br/>

                    <label>Fobia Social</label><br/>
                    <input type="radio" name="fobia_social" value="1">Si<br/>
                    <input type="radio" name="fobia_social" value="0">No<br/>
                    <br/>

                    <label>Fobia Especifica</label><br/>
                    <input type="radio" name="fobia_especifica" value="1">Sí<br/>
                    <input type="radio" name="fobia_especifica" value="0">No<br/>
                    <br/>

                    <label>Ansiedad</label><br/>
                    <input type="radio" name="Ansiedad" value="1">Si<br/>
                    <input type="radio" name="Ansiedad" value="0">No<br/>
                    <br/>

                    <label>Demencia</label><br/>
                    <input type="radio" name="demencia" value="1">Si<br/>
                    <input type="radio" name="demencia" value="0">No<br/>
                    <br/>

                    <label>Retraso Mental</label><br/>
                    <input type="radio" name="retraso_mental" value="1">Si<br/>
                    <input type="radio" name="retraso_mental" value="0">No<br/>
                    <br/>

                    <label>Trastorno de Personalidad</label><br/>
                    <input type="radio" name="trastorno_personalidad" value="1">Si<br/>
                    <input type="radio" name="trastorno_personalidad" value="0">No<br/>
                    <br/>
                </div>
            </div>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
		</div>
    </form>
@stop