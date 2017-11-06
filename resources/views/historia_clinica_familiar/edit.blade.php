@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('HistoriaClinicaFamiliarController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Historia Clínica Familiar</h2>
                <div class="row">
                    <div class="col-md-12">

                        <label>Del SNC (no psiquiátricas)</label><br/>
                        @if($historia->snc == 2)
                            <input type="radio" name="snc" value="2" checked> No<br/>
                            <input type="radio" name="snc" value="1"> Se desconoce<br/>
                            <input type="radio" name="snc" value="0"> Si<br/>
                        @elseif($historia->snc == 1)
                            <input type="radio" name="snc" value="2"> No<br/>
                            <input type="radio" name="snc" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="snc" value="0"> Si<br/>
                        @else
                            <input type="radio" name="snc" value="2"> No<br/>
                            <input type="radio" name="snc" value="1"> Se desconoce<br/>
                            <input type="radio" name="snc" value="0" checked> Si<br/>
                        @endif
                        <br/>

                        <label>Trastornos Convulsivos</label><br/>
                        @if($historia->trastornos_convulsivos == 2)
                            <input type="radio" name="trastornos_convulsivos" value="2" checked> No<br/>
                            <input type="radio" name="trastornos_convulsivos" value="1"> Se desconoce<br/>
                            <input type="radio" name="trastornos_convulsivos" value="0"> Si<br/>
                        @elseif($historia->trastornos_convulsivos == 1)
                            <input type="radio" name="trastornos_convulsivos" value="2"> No<br/>
                            <input type="radio" name="trastornos_convulsivos" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="trastornos_convulsivos" value="0"> Si<br/>

                        @else
                            <input type="radio" name="trastornos_convulsivos" value="2"> No<br/>
                            <input type="radio" name="trastornos_convulsivos" value="1"> Se desconoce<br/>
                            <input type="radio" name="trastornos_convulsivos" value="0" checked> Si<br/>

                        @endif
                        <br/>

                        <label>Respiratorias</label><br/>
                        @if($historia->respiratorias == 2)
                            <input type="radio" name="respiratorias" value="2" checked> No<br/>
                            <input type="radio" name="respiratorias" value="1"> Se desconoce<br/>
                            <input type="radio" name="respiratorias" value="0"> Si<br/>

                        @elseif($historia->respiratorias == 1)
                            <input type="radio" name="respiratorias" value="2"> No<br/>
                            <input type="radio" name="respiratorias" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="respiratorias" value="0"> Si<br/>

                        @else
                            <input type="radio" name="respiratorias" value="2"> No<br/>
                            <input type="radio" name="respiratorias" value="1"> Se desconoce<br/>
                            <input type="radio" name="respiratorias" value="0" checked> Si<br/>

                        @endif
                        <br/>

                        <label>Cardiovasculares</label><br/>
                        @if($historia->cardiovasculares == 2)
                            <input type="radio" name="cardiovasculares" value="2" checked> No<br/>
                            <input type="radio" name="cardiovasculares" value="1"> Se desconoce<br/>
                            <input type="radio" name="cardiovasculares" value="0"> Si<br/>

                        @elseif($historia->cardiovasculares == 1)
                            <input type="radio" name="cardiovasculares" value="2"> No<br/>
                            <input type="radio" name="cardiovasculares" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="cardiovasculares" value="0"> Si<br/>

                        @else
                            <input type="radio" name="cardiovasculares" value="2"> No<br/>
                            <input type="radio" name="cardiovasculares" value="1"> Se desconoce<br/>
                            <input type="radio" name="cardiovasculares" value="0" checked> Si<br/>

                        @endif
                        <br/>


                        <label>Hematopoyéticas / Linfáticas</label><br/>
                        @if($historia->hematopoyeticas_linfaticas == 2)
                            <input type="radio" name="hematopoyeticas_linfaticas" value="2" checked> No<br/>
                            <input type="radio" name="hematopoyeticas_linfaticas" value="1"> Se desconoce<br/>
                            <input type="radio" name="hematopoyeticas_linfaticas" value="0"> Si<br/>

                        @elseif($historia->hematopoyeticas_linfaticas == 1)
                            <input type="radio" name="hematopoyeticas_linfaticas" value="2"> No<br/>
                            <input type="radio" name="hematopoyeticas_linfaticas" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="hematopoyeticas_linfaticas" value="0"> Si<br/>

                        @else
                            <input type="radio" name="hematopoyeticas_linfaticas" value="2"> No<br/>
                            <input type="radio" name="hematopoyeticas_linfaticas" value="1"> Se desconoce<br/>
                            <input type="radio" name="hematopoyeticas_linfaticas" value="0" checked> Si<br/>
                        @endif
                        <br/>

                        <label> Ojos / Oídos / Nariz / Garganta</label><br/>
                        @if($historia->ojos_oidos_nariz_garganta == 2)
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="2" checked> No<br/>
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="1"> Se desconoce<br/>
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="0"> Si<br/>

                        @elseif($historia->ojos_oidos_nariz_garganta == 1)
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="2"> No<br/>
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="0"> Si<br/>

                        @else
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="2"> No<br/>
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="1"> Se desconoce<br/>
                            <input type="radio" name="ojos_oidos_nariz_garganta" value="0" checked> Si

                        @endif
                        <br/>

                        <label>Hepáticas</label><br/>
                        @if($historia->hepaticas == 2)
                            <input type="radio" name="hepaticas" value="2" checked> No<br/>
                            <input type="radio" name="hepaticas" value="1"> Se desconoce<br/>
                            <input type="radio" name="hepaticas" value="0"> Si<br/>

                        @elseif($historia->hepaticas == 1)
                            <input type="radio" name="hepaticas" value="2"> No<br/>
                            <input type="radio" name="hepaticas" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="hepaticas" value="0"> Si<br/>

                        @else
                            <input type="radio" name="hepaticas" value="2"> No<br/>
                            <input type="radio" name="hepaticas" value="1"> Se desconoce<br/>
                            <input type="radio" name="hepaticas" value="0" checked> Si<br/>

                        @endif
                        <br/>


                        <label>Dermatológicas / Del tejido conectivo</label><br/>
                        @if($historia->dermatologicas_tejido_conectivo == 2)
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="2" checked> No<br/>
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="1"> Se desconoce<br/>
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="0"> Si<br/>

                        @elseif($historia->dermatologicas_tejido_conectivo == 1)
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="2"> No<br/>
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="0"> Si<br/>

                        @else
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="2"> No<br/>
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="1"> Se desconoce<br/>
                            <input type="radio" name="dermatologicas_tejido_conectivo" value="0" checked> Si<br/>

                        @endif
                        <br/>

                        <label> Músculo - esqueléticas </label><br/>
                        @if($historia->musculo_esqueleticas == 2)
                            <input type="radio" name="musculo_esqueleticas" value="2" checked> No<br/>
                            <input type="radio" name="musculo_esqueleticas" value="1"> Se desconoce<br/>
                            <input type="radio" name="musculo_esqueleticas" value="0"> Si<br/>

                        @elseif($historia->musculo_esqueleticas == 1)
                            <input type="radio" name="musculo_esqueleticas" value="2"> No<br/>
                            <input type="radio" name="musculo_esqueleticas" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="musculo_esqueleticas" value="0"> Si<br/>

                        @else
                            <input type="radio" name="musculo_esqueleticas" value="2"> No<br/>
                            <input type="radio" name="musculo_esqueleticas" value="1"> Se desconoce<br/>
                            <input type="radio" name="musculo_esqueleticas" value="0" checked> Si<br/>

                        @endif
                        <br/>


                        <label>Endocrinas / Metabólicas</label><br/>
                        @if($historia->endocrinas_metabolicas == 2)
                            <input type="radio" name="endocrinas_metabolicas" value="2" checked> No <br/>
                            <input type="radio" name="endocrinas_metabolicas" value="1"> Se desconoce <br/>
                            <input type="radio" name="endocrinas_metabolicas" value="0"> Si <br/>
                        @elseif($historia->endocrinas_metabolicas == 1)
                            <input type="radio" name="endocrinas_metabolicas" value="2"> No <br/>
                            <input type="radio" name="endocrinas_metabolicas" value="1" checked> Se desconoce <br/>
                            <input type="radio" name="endocrinas_metabolicas" value="0"> Si <br/>

                        @else
                            <input type="radio" name="endocrinas_metabolicas" value="2"> No<br/>
                            <input type="radio" name="endocrinas_metabolicas" value="1"> Se desconoce <br/>
                            <input type="radio" name="endocrinas_metabolicas" value="0" checked> Si <br/>
                        @endif
                        <br/>

                        <label> Gastrointestinales </label><br/>
                        @if($historia->gastro == 2)
                            <input type="radio" name="gastro" value="2" checked> No <br/>
                            <input type="radio" name="gastro" value="1"> Se desconoce<br/>
                            <input type="radio" name="gastro" value="0"> Si <br/>
                        @elseif($historia->gastro == 1)
                            <input type="radio" name="gastro" value="2"> No<br/>
                            <input type="radio" name="gastro" value="1" checked> Se desconoce <br/>
                            <input type="radio" name="gastro" value="0"> Si <br/>
                        @else
                            <input type="radio" name="gastro" value="2"> No<br/>
                            <input type="radio" name="gastro" value="1"> Se desconoce <br/>
                            <input type="radio" name="gastro" value="0" checked> Si<br/>
                        @endif
                        <br/>

                        <label>Renales / Genitourinarias</label><br/>
                        @if($historia->renales_genitourinarias == 2)
                            <input type="radio" name="renales_genitourinarias" value="2" checked> No<br/>
                            <input type="radio" name="renales_genitourinarias" value="1"> Se desconoce<br/>
                            <input type="radio" name="renales_genitourinarias" value="0"> Si<br/>
                        @elseif($historia->renales_genitourinarias == 1)
                            <input type="radio" name="renales_genitourinarias" value="2"> No<br/>
                            <input type="radio" name="renales_genitourinarias" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="renales_genitourinarias" value="0"> Si<br/>
                        @else
                            <input type="radio" name="renales_genitourinarias" value="2"> No<br/>
                            <input type="radio" name="renales_genitourinarias" value="1"> Se desconoce<br/>
                            <input type="radio" name="renales_genitourinarias" value="0" checked> Si<br/>
                        @endif
                        <br/>

                        <label>Cáncer </label><br/>
                        @if($historia->cancer == 2)
                            <input type="radio" name="cancer" value="2" checked> No<br/>
                            <input type="radio" name="cancer" value="1"> Se desconoce<br/>
                            <input type="radio" name="cancer" value="0"> Si<br/>
                        @elseif($historia->cancer == 1)
                            <input type="radio" name="cancer" value="2"> No<br/>
                            <input type="radio" name="cancer" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="cancer" value="0"> Si <br/>
                        @else
                            <input type="radio" name="cancer" value="2"> No<br/>
                            <input type="radio" name="cancer" value="1"> Se desconoce<br/>
                            <input type="radio" name="cancer" value="0" checked> Si<br/>

                        @endif
                        <br/>





                        <label>Alergia o hipersensibilidad a medicamentos </label><br/>
                        @if($historia->alergias == 2)
                            <input type="radio" name="alergias" value="2" checked> No<br/>
                            <input type="radio" name="alergias" value="1"> Se desconoce<br/>
                            <input type="radio" name="alergias" value="0"> Si<br/>
                        @elseif($historia->alergias == 1)
                            <input type="radio" name="alergias" value="2"> No<br/>
                            <input type="radio" name="alergias" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="alergias" value="0"> Si <br/>
                        @else
                            <input type="radio" name="alergias" value="2"> No<br/>
                            <input type="radio" name="alergias" value="1"> Se desconoce<br/>
                            <input type="radio" name="alergias" value="0" checked> Si<br/>

                        @endif
                        <br/>

                        <label> Intervenciones quirúrgicas mayores previas </label><br/>
                        @if($historia->cirujia_mayor == 2)
                            <input type="radio" name="cirujia_mayor" value="2" checked> No<br/>
                            <input type="radio" name="cirujia_mayor" value="1"> Se desconoce<br/>
                            <input type="radio" name="cirujia_mayor" value="0"> Si<br/>
                        @elseif($historia->cirujia_mayor == 1)
                            <input type="radio" name="cirujia_mayor" value="2"> No<br/>
                            <input type="radio" name="cirujia_mayor" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="cirujia_mayor" value="0"> Si <br/>
                        @else
                            <input type="radio" name="cirujia_mayor" value="2"> No<br/>
                            <input type="radio" name="cirujia_mayor" value="1"> Se desconoce<br/>
                            <input type="radio" name="cirujia_mayor" value="0" checked> Si<br/>

                        @endif
                        <br/>

                        <label> Intervenciones quirúrgicas programadas </label><br/>
                        @if($historia->cirujia_programada == 2)
                            <input type="radio" name="cirujia_programada" value="2" checked> No<br/>
                            <input type="radio" name="cirujia_programada" value="1"> Se desconoce<br/>
                            <input type="radio" name="cirujia_programada" value="0"> Si<br/>
                        @elseif($historia->cirujia_programada == 1)
                            <input type="radio" name="cirujia_programada" value="2"> No<br/>
                            <input type="radio" name="cirujia_programada" value="1" checked> Se desconoce<br/>
                            <input type="radio" name="cirujia_programada" value="0"> Si <br/>
                        @else
                            <input type="radio" name="cirujia_programada" value="2"> No<br/>
                            <input type="radio" name="cirujia_programada" value="1"> Se desconoce<br/>
                            <input type="radio" name="cirujia_programada" value="0" checked> Si<br/>

                        @endif
                        <br/>


                    </div>
                </div>
            </div>
        </div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
    </form>
@stop