@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div id="div_pacientes" class="container">
            <h2>Historia Psiquiatrica Familiar</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Ezquizofrenia:</label><p>@if($historia->ezquizofrenia == 1) Sí @else No @endif</p>
                            <label>Familiar con ezquizofrenia</label><p>{{$historia->fam_ezquizofrenia}}</p>
                            <label>Bipolaridad:</label><p>@if($historia->bipolar == 1) Sí @else No @endif</p>
                            <label>Familiar con bipolaridad</label><p>{{$historia->fam_bipolar}}</p>
                            <label>Alcoholismo:</label><p>@if($historia->alcoholismo == 1) Sí @else No @endif</p>
                            <label>Familiar con alcoholismi</label><p>{{$historia->fam_alcoholismo}}</p>
                            <label>Drogas:</label><p>@if($historia->drogas == 1) Sí @else No @endif</p>
                            <label>Familiar drogadicto</label><p>{{$historia->fam_drogas}}</p>
                            <label>Depresión:</label><p>@if($historia->depresion == 1) Sí @else No @endif</p>
                            <label>Familiar con depresion</label><p>{{$historia->fam_depresion}}</p>
                            <label>Disimia:</label><p>@if($historia->disimia == 1) Sí @else No @endif</p>
                            <label>Familiar con disimia</label><p>{{$historia->fam_disimia}}</p>
                            <label>Pánico:</label><p>@if($historia->panico == 1) Sí @else No @endif</p>
                            <label>Familiar con panico</label><p>{{$historia->fam_panico}}</p>
                            <label>Agorafobia:</label><p>@if($historia->agorafobia == 1) Sí @else No @endif</p>
                            <label>Familiar con agorafobia</label><p>{{$historia->fam_agorafobia}}</p>
                            <label>Obsesivo Compulsivo:</label><p>@if($historia->obsesivo_compulsivo == 1) Sí @else No @endif</p>
                            <label>Familiar obsesivo compulsivo</label><p>{{$historia->fam_obsesivo_compulsivo}}</p>
                            <label>Fobia Social:</label><p>@if($historia->fobia_social == 1) Sí @else No @endif</p>
                            <label>Familiar con fobia social</label><p>{{$historia->fam_fobia_social}}</p>
                            <label>Fobia Específica:</label><p>@if($historia->fobia_especifica == 1) Sí @else No @endif</p>
                            <label>Familiar con fobia especifica</label><p>{{$historia->fam_fobia_especifica}}</p>
                            <label>Ansiedad:</label><p>@if($historia->ansiedad == 1) Sí @else No @endif</p>
                            <label>Familiar con ansiedad</label><p>{{$historia->fam_ansiedad}}</p>
                            <label>Demencia:</label><p>@if($historia->demencia == 1) Sí @else No @endif</p>
                            <label>Familiar con demencia</label><p>{{$historia->fam_demencia}}</p>
                            <label>Retraso Mental:</label><p>@if($historia->retraso_mental == 1) Sí @else No @endif</p>
                            <label>Familiar con retraso mental</label><p>{{$historia->fam_retraso_mental}}</p>
                            <label>Transtorno de Personalidad:</label><p>@if($historia->transtorno_personalidad == 1) Sí @else No @endif</p>
                            <label>Familiar con transtorno de personalidad</label><p>{{$historia->fam_transtorno_personalidad}}</p>
                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historia->id_paciente}}}" class="btn btn-info">Regresar</a>
				<a href="/historia_psiquiatrica/{{{$historia->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('HistoriaPsiquiatricaFamiliarController@destroy', $historia->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
                
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop


