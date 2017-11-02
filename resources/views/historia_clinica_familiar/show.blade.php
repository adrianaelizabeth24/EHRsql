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
        <div class="container">
            <h2>Historia Clínica Familiar</h2>
        </div>
        <div id="div_pacientes" class="container">
            <h2>Resultados de la historia clínica familiar</h2>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <label>Del SNC (no psiquiátricas) :</label><p>{{$historia_fam->snc}}</p>
                            <label>Trastornos Convulsivos :</label><p>{{$historia_fam->trastornos_convulsivos}}</p>
                            <label>Respiratorias:</label><p>{{$historia_fam->respiratorias}}</p>
                            <label>Cardiovasculares :</label><p>{{$historia_fam->cardiovasculares}}</p>
                            <label>Hematopoyéticas / Linfáticas :</label><p>{{$historia_fam->hematopoyeticas_linfaticas}}</p>
                            <label>Ojos / Oídos / Nariz / Garganta :</label><p>{{$historia_fam->ojos_oidos_nariz_garganta}}</p>
                            <label>Hepáticas :</label><p>{{$historia_fam->hepaticas}}</p>
                            <label>Dermatológicas / Del tejido conectivo</label><p>{{$historia_fam->dermatologicas_tejido_conectivo}}</p>
                            <label>Músculo - esqueléticas</label><p>{{$historia_fam->musculo_esqueleticas}}</p>
                            <label>Endocrinas / Metabólicas :</label><p>{{$historia_fam->endocrinas_metabolicas}}</p>
                            <label>Gastrointestinales :</label><p>{{$historia_fam->gastro}}</p>
                            <label>Renales / Genitourinarias :</label><p>{{$historia_fam->renales_genitourinarias}}</p>
                            <label>Cáncer :</label><p>{{$historia_fam->cancer}}</p>
                            <label>Alergia o hipersensibilidad a medicamentos :</label><p>{{$historia_fam->alergias}}</p>
                            <label>Intervenciones quirúrgicas mayores previas :</label><p>{{$historia_fam->cirujia_mayor}}</p>
                            <label>Intervenciones quirúrgicas programadas :</label><p>{{$historia_fam->cirujia_programada}}</p>
                            <label>Otro :</label><p>{{$historia_fam->otro}}</p>

                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historia_fam->id_paciente}}}" class="btn btn-info">Regresar</a>
                <a href="/historia_clinica_familiar/{{{$historia_fam->id}}}/edit" class="btn btn-warning">Editar Datos</a>
                <form action="{{action('HistoriaClinicaFamiliarController@destroy', $historia_fam->id)}}" method="post" style="display: unset;">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Borrar historia clínica familiar</button>
                </form>
            </div>
        </div> <!-- Complete patient info -->
    </div> <!-- div_pacientes -->
    </div> <!-- jumbotron -->
    <hr>
@stop