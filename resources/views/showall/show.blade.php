@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/paciente.css')}}" rel="stylesheet">

    <div class="jumbotron">
        <div class="container">
            <h2>Detalle del Paciente</h2>

            <table class="table">
                <thead>
                <tr>
                    <th class="col-xs-2"></th>
                    <th class="col-xs-4"></th>
                    <th class="col-xs-2"></th>
                    <th class="col-xs-4"></th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>
                        <label>Nombre Completo</label>
                    </td>
                    <td>
                        <h4>{{$paciente->nombre}} {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}}</h4>
                    </td>


                    <td>
                        <label>Sexo</label>
                    </td>
                    <td>
                        <h4>{{$paciente->sexo}}</h4>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Edad</label>
                    </td>
                    <td>
                        <h4>{{$paciente->edad}}</h4>
                    </td>

                    <td>
                        <label>Fecha de Nacimiento</label>
                    </td>
                    <td>
                        <h4>{{$paciente->nacimiento}}</h4>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Motivo de Consulta</label>
                    </td>
                    <td>
                        <h4>{{$paciente->motivo_consulta}}</h4>
                    </td>

                    <td>
                        <label>Referido por</label>
                    </td>
                    <td>
                        <h4>{{$paciente->referido_por}}</h4>
                    </td>


                </tr>

                <tr>
                    <td>
                        <label>Dirección</label>
                    </td>
                    <td>
                        <h4><h4>{{$paciente->direccion}}</h4>
                    </td>
                    <td>
                        <label>Lugar de Residencia</label>
                    </td>
                    <td>
                        @foreach($lugar_residencia as $lugar)
                            @if($paciente->lugar_residencia == $lugar->id)
                                <h4>{{$lugar->nombre}}</h4>
                            @endif
                        @endforeach
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Estado Civil</label>
                    </td>
                    <td>
                        @foreach($estado_civil as $edo)
                            @if($paciente->estado_civil == $edo->id)
                                <h4>{{$edo->nombre}}</h4>
                            @endif
                        @endforeach
                    </td>

                    <td>
                        <label>Sustento</label>
                    </td>
                    <td>
                        @foreach($sustento as $sus)
                            @if($paciente->sustento == $sus->id)
                                <h4>{{$sus->nombre}}</h4>
                            @endif
                        @endforeach
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Ocupación del paciente</label>
                    </td>
                    <td>
                        <h4>{{$paciente->ocupacion_paciente}}</h4>
                    </td>

                    <td>
                        <label>Religion</label>
                    </td>
                    <td>
                        <h4><h4>{{$paciente->religion}}</h4>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Escolaridad</label>
                    </td>
                    <td>
                        <h4>{{$paciente->escolaridad}}</h4>
                    </td>
                    <td>
                        <label>Ocupación del sustento</label>
                    </td>
                    <td>
                        <h4>{{$paciente->ocupacion_sustento}}</h4>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Telefono del paciente</label>
                    </td>
                    <td>
                        <h4>{{$paciente->telefono}}</h4>
                    </td>
                </tr>


                </tbody>
            </table>
            <div id="patient" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="personal_info">
                            <div class="row">
                                <h3>Diagnostico</h3>
                            </div>

                            <div id="diagnostico">
                                <div class="row">
                                    <label>Diagnostico Primario :</label>
                                    <p>{{$diagnostico->diagnostico_primario}}</p>
                                    <label>Código :</label>
                                    <p>{{$diagnostico->codigo}}</p>
                                    <label>ICG-S :</label>
                                    <p>{{$diagnostico->icg_s}}</p>

                                    <label>Diagnostico Secundario :</label>
                                    <p>{{$diagnostico->diagnostico_secundario}}</p>
                                    <label>Código :</label>
                                    <p>{{$diagnostico->codigo_secundario}}</p>
                                    <label>ICG-S :</label>
                                    <p>{{$diagnostico->icg_s_secundario}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <h3>Exploracion Fisica</h3>
                            </div>
                            <div id="exploracion fisica">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="col-xs-6" align="center">Condicion</th>
                                            <th class="col-xs-1">Normal</th>
                                            <th class="col-xs-1">Anormal</th>
                                            <th class="col-xs-2">No Examinado</th>
                                            <th class="col-xs-5">Especificar Hallazgos</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($preguntas_exploracion_fisica as $quest)
                                            @foreach($exploracion_fisica_paciente as $valor)
                                                <tr>
                                                    @if($valor->id_opciones == $quest->id)
                                                        <th scope="row"> {{$quest->nombre}} </th>
                                                        @if($valor->valor == 'Normal')
                                                            <td>X</td>
                                                            <td></td>
                                                            <td></td>
                                                        @elseif($valor->valor == 'Anormal')
                                                            <td></td>
                                                            <td>X</td>
                                                            <td></td>
                                                        @else
                                                            <td></td>
                                                            <td></td>
                                                            <td>X</td>
                                                        @endif
                                                        <td>{{$valor->detalles}}</td>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <h3>Historia Clinica</h3>
                                </div>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="col-xs-6" align="center"></th>
                                            <th class="col-xs-1">Si</th>
                                            <th class="col-xs-1">No</th>
                                            <th class="col-xs-2">Se desconoce</th>
                                            <th class="col-xs-5">Especificación</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($preguntas_historia_clinica as $quest)
                                            <tr>
                                                <th scope="row"> {{$quest->preguntas}} </th>
                                                @foreach ($historia_clinica_paciente as $val)
                                                    @if($val->id_pregunta == $quest->id)
                                                        @if($val->valor == 'Si')
                                                            <td>X</td>
                                                            <td></td>
                                                            <td></td>
                                                        @elseif($val->valor == 'No')
                                                            <td></td>
                                                            <td>X</td>
                                                            <td></td>
                                                        @else
                                                            <td></td>
                                                            <td></td>
                                                            <td>X</td>
                                                        @endif
                                                        <td>{{$val->detalles}}</td>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h3>Plan de tratamiento</h3>
                                <br/>
                            </div>
                            <div id="plan">
                                <div class="row">
                                    <label>Diagnsotico Primario :</label>
                                    <p>{{$plan->diagnsotico_primario}}</p><br/>
                                    <label>Diagnsotico Secundario : </label>
                                    <p>{{$plan->diagnsotico_secundario}}</p><br/>
                                    <label>Seguimiento Farmacológico :</label>
                                    <p>{{$plan->seguimiento_farmacologico}}</p><br/>
                                    <label>Modalidad Terapeutica :</label>
                                    <p>{{$plan->modalidad_terapeutica}}</p><br/>
                                    <label>Comentarios :</label>
                                    <p>{{$plan->comentarios}}</p><br/>
                                    <label>Pronostico :</label>
                                    <p>{{$plan->pronostico}}</p><br/>
                                </div>
                            </div>
                            <div>
                                <h3>Examen Mental</h3>
                                <br/>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-2"></th>
                                        <th class="col-xs-4"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr><td><label>Persona que realizó las escalas : </label></td><td>{{$examen_mental->escalas_realizadas}}</td>
                                    <tr><td><label>HAM-D : </label></td><td>{{$examen_mental->ham_d}}</td></tr>
                                    <tr><td><label>HAM-A : </label></td><td>{{$examen_mental->ham_a}}</td></tr>
                                    <tr><td><label>Y-BOCS : </label></td><td>{{$examen_mental->y_bocs}}</td></tr>
                                    <tr><td><label>Q-LES-Q : </label></td><td>{{$examen_mental->q_les_q}}</td></tr>
                                    <tr><td><label>GADI : </label></td><td>{{$examen_mental->gadi}}</td></tr>
                                    <tr><td><label>BDI : </label></td><td>{{$examen_mental->bdi}}</td></tr>
                                    <tr><td><label>SPIN : </label></td><td>{{$examen_mental->spin}}</td></tr>
                                    <tr><td><label>PAS : </label></td><td>{{$examen_mental->pas}}</td></tr>
                                    <tr><td><label>Descripción de hallazgos físicos o neurológicos que no hayan sido documentados en otra parte de la historia :</label></td><td>{{$examen_mental->hallazgos}}</td></tr>
                                    <tr></tr>
                                    <tr><td><label>Acostado PT (Despues de 2 minutos)</label></td>
                                    <tr><td><label>Sistolica : </label></td><td>{{$examen_mental->pt_acostado_sistolica}}</td></tr>
                                    <tr><td><label>Diastolica : </label></td><td>{{$examen_mental->pt_acostado_diastolica}}</td></tr>
                                    <tr></tr>
                                    <tr><td><label>Acostado ST (Despues de 2 minutos)</label></td></tr>
                                    <tr><td><label>Sistolica : </label></td><td>{{$examen_mental->st_acostado_sistolica}}</td></tr>
                                    <tr><td><label>Diastolica : </label></td><td>{{$examen_mental->st_acostado_diastolica}}</td></tr>
                                    <tr></tr>
                                    <tr><td><label>Parado PT (Despues de 2 minutos)</label>
                                    <tr><td><label>Sistolica : </label></td><td>{{$examen_mental->pt_parado_sistolica}}</td></tr>
                                    <tr><td><label>Diastolica : </label></td><td>{{$examen_mental->pt_parado_diastolica}}</td></tr>
                                    <tr></tr>
                                    <tr><td><label>Parado ST (Despues de 2 minutos)</label></td>
                                    <tr><td><label>Sistolica : </label></td><td>{{$examen_mental->st_parado_sistolica}}</td></tr>
                                    <tr><td><label>Diastolica : </label></td><td>{{$examen_mental->st_parado_diastolica}} </td></tr>
                                    <tr></tr>
                                    <tr><td><label>Frecuencia cardiaca</label></td>
                                    <tr><td><label>Acostado (despues de 5 min) : </label></td><td>{{$examen_mental->frecuencia_acostado}}</td></tr>
                                    <tr><td><label>Parado (despues de 2 min) : </label></td><td>{{$examen_mental->frecuencia_parado}}</td></tr>
                                    <tr></tr>
                                    <tr><td><label>Ritmo regular : </label></td><td>{{$examen_mental->ritmo_regular}}</td></tr>
                                    <tr><td><label>Ritmo irregular : </label></td><td>{{$examen_mental->ritmo_irregular}}</td></tr>
                                    <tr><td><label>Peso : </label></td><td>{{$examen_mental->peso}} kg</td></tr>
                                    <tr><td><label>Talla : </label></td><td>{{$examen_mental->talla}} cm</td></tr>
                                    <tr><td><label>Circunferencia abdominal (en cm) : </label></td><td>{{$examen_mental->circumferencia}}</td></tr>
                                    <tr><td><label>Temperatura (en gc) : </label></td><td>{{$examen_mental->temperatura}}</td></tr>
                                    <tr><td><label>Peso usual : </label></td><td>{{$examen_mental->peso_usual}}</td></tr>
                                    <tr><td><label>IMC : </label></td><td>{{$examen_mental->imc}}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h3>Antecedentes Obstetricos</h3>
                                <br/>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-4"></th>
                                        <th class="col-xs-6"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label>Menarca</label>
                                        </td>
                                        <td>
                                            {{$antecedentes_obstetricos_paciente->menarca}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>Ritmo :</label>
                                        </td>
                                        <td>
                                            @foreach($ritmo as $opciones_ginecobstetricos_ritmo)
                                                @if($antecedentes_obstetricos_paciente->ritmo_cardiaco == $opciones_ginecobstetricos_ritmo->id)
                                                    {{$opciones_ginecobstetricos_ritmo->nombre}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Tensión Premenstrual</label>
                                        </td>
                                        <td>
                                            @foreach($tension_premenstrual as $opciones_ginecobstetricos_tension_premenstrual)
                                                @if($antecedentes_obstetricos_paciente->tension_premenstrual == $opciones_ginecobstetricos_tension_premenstrual->id)
                                                    {{$opciones_ginecobstetricos_tension_premenstrual->nombre}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Vida Sexual</label>
                                        </td>
                                        <td>
                                            @if($antecedentes_obstetricos_paciente->vida_sexual == 1)
                                                Si
                                            @else
                                                No
                                            @endif
                                        </td>
                                    </tr>


                                    @if($antecedentes_obstetricos_paciente->vida_sexual == 1)
                                        <tr>
                                            <td><label>Edad Inicio: </label></td>
                                            <td>{{$antecedentes_obstetricos_paciente->edad_inicio}}</td>
                                        </tr>
                                        <tr>
                                            <td><label>Número de Compañeros Sexuales:</label></td>
                                            <td>{{$antecedentes_obstetricos_paciente->numero_compañeros_sexuales}}</td>
                                        </tr>
                                    @endif

                                    <tr>
                                        <td>
                                            <label>Antecedentes Obstetricos: </label>
                                        </td>
                                        <td>
                                            @foreach($ante_obstetricos as $opciones_ginecobstetricos_antecedentes_obstetricos)
                                                @if($antecedentes_obstetricos_paciente->antecedentes_obstreticos == $opciones_ginecobstetricos_antecedentes_obstetricos->id)
                                                    {{$opciones_ginecobstetricos_antecedentes_obstetricos->nombre}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>




                                    <tr>
                                        <td>
                                            <label>Embarazo Actual</label>
                                        </td>
                                        <td>
                                            @if($antecedentes_obstetricos_paciente->embarazo_actual == 1)
                                                Si
                                            @else
                                                No
                                            @endif
                                        </td>
                                    </tr>


                                    @if($antecedentes_obstetricos_paciente->embarazo_actual == 1)
                                        <tr>
                                            <td><label>Semanas de Embarazo</label></td>
                                            <td>{{$antecedentes_obstetricos_paciente->semanas_embarazo}}</td>
                                        </tr>
                                    @endif



                                    <tr>
                                        <td>
                                            <label>Lactancia : </label>
                                        </td>
                                        <td>
                                            @if($antecedentes_obstetricos_paciente->lactancia == 1)
                                                Si
                                            @else
                                                No
                                            @endif
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <label>Posibilidad de Embarazo</label>
                                        </td>
                                        <td>
                                            @if($antecedentes_obstetricos_paciente->posibilidad_embarazo == 1)
                                                Si
                                            @else
                                                No
                                            @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Anticonceptivos</label>
                                        </td>
                                        <td>
                                            @foreach($anticonceptivos as $opciones_ginecobstetricos_anticonceptivos)
                                                @if($antecedentes_obstetricos_paciente->anticonceptivos == $opciones_ginecobstetricos_anticonceptivos->id)
                                                    {{$opciones_ginecobstetricos_anticonceptivos->nombre}}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h3>Antecedentes Patológicos y No Patológicos</h3>
                                <br/>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-3">ANTECEDENTE</th>
                                        <th class="col-xs-5">DETALLES</th>
                                        <th class="col-xs-4">¿PRESENTA ANTECEDENTE?</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $antecedentes_detalles = explode(",",$pat_nopat->antecedentes_detalles );
                                    $ant = explode(",",$pat_nopat->antecedentes);
                                    ?>

                                    @foreach($antecedentes as $antecedente)

                                        <tr>
                                            <th scope="row"> {{$antecedente->preguntas}} </th>

                                            <?php
                                            $detalle =  array_shift($antecedentes_detalles);
                                            $opcion = array_shift($ant);
                                            ?>

                                            @if ($opcion == "null")
                                                <?php $opcion = ""; ?>
                                            @endif

                                            <td>{{$detalle}}</td>
                                            <td>{{$opcion}}</td>
                                        </tr>

                                    @endforeach

                                    @if ($pat_nopat->otro != "")

                                        <tr>
                                            <th scope="row"> {{$pat_nopat->otro}} </th>

                                            <?php
                                            $detalle =  array_shift($antecedentes_detalles);
                                            $opcion = array_shift($ant);
                                            ?>

                                            @if ($opcion == "null")
                                                <?php $opcion = ""; ?>
                                            @endif

                                            <td>{{$detalle}}</td>
                                            <td>{{$opcion}}</td>
                                        </tr>

                                    @endif
                                    </tbody>
                                </table>

                                <div class="row">
                                    <label>NOTAS DE ANTECEDENTES PERSONALES PATOLÓGICOS Y NO PATOLÓGICOS:</label>
                                    <textarea disabled class="form-control" name="antecedentes_notas" rows="3">{{ $pat_nopat-> antecedentes_notas }}</textarea>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-4" align="center"></th>
                                        <th class="col-xs-6"></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td><label>No. de tazas de café o té negro al día: </label></td>
                                        <td>{{ $pat_nopat-> tazasCafé  }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-4" align="center">TABAQUISMO</th>
                                        <th class="col-xs-6"></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <tr>
                                        <td><label>Nivel: </label></td>
                                        <td>{{ $pat_nopat-> tabaquismo  }}</td>
                                    </tr>

                                    <tr>
                                        <td><label>Consumo diario de tabaco: </label></td>
                                        <td>{{ $pat_nopat-> consumoDiario  }} cigarros por día</td>
                                    </tr>

                                    <tr>
                                        <td><label>Años de tabaquismo: </label></td>
                                        <td>{{ $pat_nopat-> añosTabaquismo  }} años</td>
                                    </tr>

                                    <tr>
                                        <td><label>Edad de Inicio: </label></td>
                                        <td>{{ $pat_nopat-> edadInicio  }} años</td>
                                    </tr>


                                    <tr>
                                        <td><label>Edad en que se suspendió: </label></td>
                                        <td>{{ $pat_nopat-> edadSuspendió  }} años</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-4" align="center">BEBIDAS ALCOHOLICAS</th>
                                        <th class="col-xs-6"></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <tr>
                                        <td><label>Frecuencia: </label></td>
                                        <td>{{ $pat_nopat-> alcohol_frecuencia  }}</td>
                                    </tr>

                                    <tr>
                                        <td><label>Cantidad: </label></td>
                                        <td>{{ $pat_nopat-> alcohol_cantidad  }}</td>
                                    </tr>

                                    <tr>
                                        <td><label>¿Alguna vez le dijeron o sintió que debería dejar de tomar? </label></td>
                                        <td>{{ $pat_nopat-> dejarTomar  }}</td>
                                    </tr>

                                    <tr>
                                        <td><label>¿Alguna vez tomo en la mañana para calmar sus nervios o cortar la cruda? </label></td>
                                        <td>{{ $pat_nopat-> formaTomar  }}</td>
                                    </tr>

                                    <tr>
                                        <td><label>¿Alguna vez se sintió mal o culpable por su forma de tomar? </label></td>
                                        <td>{{ $pat_nopat-> tomarMañana  }}</td>
                                    </tr>

                                    </tbody>
                                </table>
                                <?php
                                $abuso_actAnt = explode(',', $pat_nopat->abuso_actAnt);
                                $dep_actAnt = explode(',', $pat_nopat->dep_actAnt);
                                ?>

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-4" align="center">Substancia</th>
                                        <th class="col-xs-2">Actual</th>
                                        <th class="col-xs-2">Anterior</th>
                                        <th class="col-xs-2">Actual</th>
                                        <th class="col-xs-2">Anterior</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($substancias as $subs)

                                        <tr>
                                            <th scope="row">  {{$subs->nombre}} </th>

                                            <?php
                                            $abuso = array_shift($abuso_actAnt);
                                            $dependencia = array_shift($dep_actAnt);
                                            ?>

                                            @if($abuso == 'actual')
                                                <td>X</td>
                                                <td></td>
                                            @elseif($abuso == 'anterior')
                                                <td></td>
                                                <td>X</td>
                                            @else
                                                <td></td>
                                                <td></td>
                                            @endif


                                            @if($dependencia == 'actual')
                                                <td>X</td>
                                                <td></td>
                                            @elseif($dependencia == 'anterior')
                                                <td></td>
                                                <td>X</td>
                                            @else
                                                <td></td>
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h3>Historia Psiquiatrica Familiar</h3>
                                <br/>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-6" align="center"></th>
                                        <th class="col-xs-1">Si</th>
                                        <th class="col-xs-1">No</th>
                                        <th class="col-xs-2">No sé</th>
                                        <th class="col-xs-5">Especificar Parentezco</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($trastorno as $tras)
                                        <tr>
                                            <th scope="row"> {{$tras->nombre}} </th>
                                            @foreach($historia_familiar as $val)
                                                @if($val->id_trastorno == $tras->id)
                                                    @if($val->valor == 'Si')
                                                        <td>X</td>
                                                        <td></td>
                                                        <td></td>
                                                    @elseif($val->valor == 'No')
                                                        <td></td>
                                                        <td>X</td>
                                                        <td></td>
                                                    @else
                                                        <td></td>
                                                        <td></td>
                                                        <td>X</td>
                                                    @endif
                                                    <td>{{$val->fam_trastorno}}</td>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h3>Historia Psiquiatrica Previa</h3>
                                <br/>
                            </div>
                            <div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-4"></th>
                                        <th class="col-xs-6"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <label>Tratamiento Previo por problemas emocionales</label>
                                        </td>
                                        <td>
                                            {{$historia_previa->tratamiento_previo}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Quien lo trató</label>
                                        </td>
                                        <td>
                                            {{$historia_previa->quien_lo_trato}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Alguna hospitalizacion por problemas emocionales</label>
                                        </td>
                                        <td>
                                            @if($historia_previa->hospitalizacion == 1) Si @else No @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Edad de Primera Hospitalizacion</label>
                                        </td>
                                        <td>
                                            {{$historia_previa->primera_hospitalizacion}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Número de hospitalizaciones</label>
                                        </td>
                                        <td>
                                            {{$historia_previa->no_hospitalizaciones}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Duración de la última hospitalización</label>
                                        </td>
                                        <td>
                                            {{$historia_previa->duracion_hospitalizacion}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Motivo de su última hospitalizacion</label>
                                        </td>
                                        <td>
                                            {{$historia_previa->motivo_hospitalizacion}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Tratamiento :</label>
                                        </td>
                                        <td>
                                            {{$historia_previa->tratamiento}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>



                                <h4>Listado de problemas psiquiatricos previos</h4>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-3" align="center">Problemas</th>
                                        <th class="col-xs-1">Si</th>
                                        <th class="col-xs-1">No</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trastorno as $tras_previo)
                                        <tr>
                                            <th scope="row">{{$tras_previo->nombre}}</th>
                                            @foreach($historia_previa_values as $value)
                                                @if($value->id_trastorno == $tras_previo->id)
                                                    @if($value->value == 'Si')
                                                        <td>X</td>
                                                        <td></td>
                                                    @else
                                                        <td></td>
                                                        <td>X</td>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h3>Peea</h3>
                                <br/>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="col-xs-4"></th>
                                        <th class="col-xs-6"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label>El episodio actual es: </label>
                                        </td>
                                        <td>
                                            {{$peea->ep_actual}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Número de episodios previos: </label>
                                        </td>
                                        <td>
                                            {{$peea->epPrevios}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Edad de inicio del primer episodio: </label>
                                        </td>
                                        <td>
                                            {{$peea->edadIni}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Inicio de los sintomas el episodio actual: </label>
                                        </td>
                                        <td>
                                            {{$peea->inicio_sintomas}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Fecha probable de inicio del actual episodio: </label>
                                        </td>
                                        <td>
                                            {{$peea->inicioEpisodio}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>¿Ha Recibido Tratamiento para el Episodio Actual?</label><br>
                                        </td>
                                        <td>
                                            @foreach ( explode(',', $peea->tratamiento) as $trat )
                                                {{ $trat }}<br>
                                            @endforeach
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <label>Psicofármacos Empleados para el Episodio Actual: </label>
                                        </td>
                                        <td>
                                            {{$peea->psicofármacos}}
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h3>Notas Clínicas</h3>
                                <br/>
                            </div>
                            <div class="row">
                                @foreach($nota_clinica as $nota)
                                    <h4>Nota Clinica {{$nota->no_de_sesion}}</h4>
                                    <div id="patient" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="personal_info">
                                                    <label>No. de Sesión</label><p>{{$nota->no_de_sesion}}</p><br/>
                                                    <label>Edad :</label><p>{{$nota->edad}}</p><br/>
                                                    <label>Fecha :</label><p>{{$nota->fecha}}</p><br/>
                                                    <label>Horario Consulta :</label><p>{{$nota->horario_consulta}}</p><br/>
                                                    <label>Modalidad Terapeútica :</label><p>{{$nota->modalidad_terapeutica}}</p><br/>
                                                    <label>Evolucion :</label><p>{{$nota->comentarios}}</p><br/>
                                                    <label>Diagnostico :</label><p>{{$nota->diagnostico}}</p><br/>
                                                    <label>Planes y/o Tratamiento :</label>{{$nota->planes_tratamiento}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                        </div>
                    </div>
                </div> <!-- div_pacientes -->
            </div> <!-- jumbotron -->
        </div>
    </div>
    </div>

@stop


