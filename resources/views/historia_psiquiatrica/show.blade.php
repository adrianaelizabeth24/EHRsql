@extends('layouts.app')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar paciente">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div id="div_pacientes" class="container">
            <h2>Historia Psiquiatrica Familiar</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Ezquizofrenia:</label><p>@if($historia->ezquizofrenia == 1) Sí @else No @endif</p>
                            <label>Bipolaridad:</label><p>@if($historia->bipolar == 1) Sí @else No @endif</p>
                            <label>Alcoholismo:</label><p>@if($historia->alcoholismo == 1) Sí @else No @endif</p>
                            <label>Drogas:</label><p>@if($historia->drogas == 1) Sí @else No @endif</p>
                            <label>Depresión:</label><p>@if($historia->depresion == 1) Sí @else No @endif</p>
                            <label>Disimia:</label><p>@if($historia->disimia == 1) Sí @else No @endif</p>
                            <label>Pánico:</label><p>@if($historia->panico == 1) Sí @else No @endif</p>
                            <label>Agorafobia:</label><p>@if($historia->agorafobia == 1) Sí @else No @endif</p>
                            <label>Obsesivo Compulsivo:</label><p>@if($historia->obsesivo_compulsivo == 1) Sí @else No @endif</p>
                            <label>Fobia Social:</label><p>@if($historia->fobia_social == 1) Sí @else No @endif</p>
                            <label>Fobia Específica:</label><p>@if($historia->fobia_especifica == 1) Sí @else No @endif</p>
                            <label>Ansiedad:</label><p>@if($historia->ansiedad == 1) Sí @else No @endif</p>
                            <label>Demencia:</label><p>@if($historia->demencia == 1) Sí @else No @endif</p>
                            <label>Retraso Mental:</label><p>@if($historia->retraso_mental == 1) Sí @else No @endif</p>
                            <label>Transtorno de Personalidad:</label><p>@if($historia->transtorno_personalidad == 1) Sí @else No @endif</p>
                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historia->id_paciente}}}" class="btn btn-info">Regresar</a>
                <form action="{{action('HistoriaPsiquiatricaFamiliarController@destroy', $historia->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
                <a href="/historia_psiquiatrica/{{{$historia->id}}}/edit" class="btn btn-warning">Editar</a>
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


