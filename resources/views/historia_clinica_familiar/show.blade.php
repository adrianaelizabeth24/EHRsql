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
                            <label>Del SNC (no psiquiátricas) :</label>
                            <p>@if($historia_fam->snc == 2)No@elseif($historia_fam->snc == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Trastornos Convulsivos :</label>
                            <p>@if($historia_fam->trastornos_convulsivos == 2)
                                    No @elseif($historia_fam->trastornos_convulsivos == 0)Si @else Se
                                    desconoce @endif</p>
                            <label>Respiratorias:</label>
                            <p>@if($historia_fam->respiratorias == 2)No @elseif($historia_fam->respiratorias == 0)
                                    Si @else Se
                                    desconoce @endif</p>
                            <label>Cardiovasculares :</label>
                            <p>@if($historia_fam->cardiovasculares == 2)No @elseif($historia_fam->cardiovasculares== 0)
                                    Si @else Se
                                    desconoce @endif</p>
                            <label>Hematopoyéticas / Linfáticas :</label>
                            <p>@if($historia_fam->hematopoyeticas_linfaticas == 2)
                                    No @elseif($historia_fam->hematopoyeticas_linfaticas == 0)Si @else Se
                                    desconoce @endif</p>
                            <label>Ojos / Oídos / Nariz / Garganta :</label>
                            <p>@if($historia_fam->ojos_oidos_nariz_garganta == 2)
                                    No @elseif($historia_fam->ojos_oidos_nariz_garganta == 0)Si @else Se
                                    desconoce @endif</p>
                            <label>Hepáticas :</label>
                            <p>@if($historia_fam->hepaticas == 2)No @elseif($historia_fam->hepaticas == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Dermatológicas / Del tejido conectivo</label>
                            <p>@if($historia_fam->dermatologicas_tejido_conectivo == 2)No @elseif($historia_fam->dermatologicas_tejido_conectivo == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Músculo - esqueléticas</label>
                            <p>@if($historia_fam->musculo_esqueleticas == 2)No @elseif($historia_fam->musculo_esqueleticas == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Endocrinas / Metabólicas :</label>
                            <p>@if($historia_fam->endocrinas_metabolicas == 2)No @elseif($historia_fam->endocrinas_metabolicas == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Gastrointestinales :</label>
                            <p>@if($historia_fam->gastro == 2)No @elseif($historia_fam->gastro == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Renales / Genitourinarias :</label>
                            <p>@if($historia_fam->renales_genitourinarias == 2)No @elseif($historia_fam->renales_genitourinarias == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Cáncer :</label>
                            <p>@if($historia_fam->cancer == 2)No @elseif($historia_fam->cancer == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Alergia o hipersensibilidad a medicamentos :</label>
                            <p>@if($historia_fam->alergias == 2)No @elseif($historia_fam->alergias == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Intervenciones quirúrgicas mayores previas :</label>
                            <p>@if($historia_fam->cirujia_mayor == 2)No @elseif($historia_fam->cirujia_mayor == 0)Si @else Se
                                desconoce @endif</p>
                            <label>Intervenciones quirúrgicas programadas :</label>
                            <p>@if($historia_fam->cirujia_programada == 2)No @elseif($historia_fam->cirujia_programada == 0)Si @else Se
                                desconoce @endif</p>

                        </div>
                    </div>
                </div>
                <a href="/paciente/{{{$historia_fam->id_paciente}}}" class="btn btn-info">Regresar</a>
                <a href="/historia_clinica_familiar/{{{$historia_fam->id}}}/edit" class="btn btn-warning">Editar</a>
                <form action="{{action('HistoriaClinicaFamiliarController@destroy', $historia_fam->id)}}" method="post"
                      style="display: unset;">
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