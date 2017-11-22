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
                        <h4><h4>{{$paciente->edad}}</h4>
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
                                <div class="col-xs-2">
                                    <a href="/paciente" class="btn btn-info btn-lg btn-block"><strong>Regresar</strong></a>
                                </div>

                                <div class="col-xs-2">
                                    <a href="/paciente/{{{$paciente->id}}}/edit"
                                       class="btn btn-warning btn-lg btn-block"><strong>Editar Datos</strong></a>
                                </div>


                                <form action="{{action('PacienteController@destroy', $paciente->id)}}" method="post"
                                      style="display: unset;">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">

                                    <div class="col-xs-2">
                                        <button class="btn btn-danger btn-lg btn-block" type="submit">
                                            <strong>Borrar</strong></button>
                                    </div>
                                </form>
                            </div>


                            <div class="row">
                                <h3>Examenes</h3>
                            </div>

                            <div id="examenes">
                                <div class="row">

                                    @if ($paciente->id_exploracion_fisica == 0)

                                        <div class="col-xs-4">
                                            <a href="/exploracion_fisica/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar Examen Exploracion
                                                    Fisica</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/exploracion_fisica/{{{$paciente->id_exploracion_fisica}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Examen Exploracion
                                                    Fisica</strong></a>
                                        </div>
                                    @endif

                                    @if ($paciente->id_examen_mental == 0)
                                        <div class="col-xs-4">
                                            <a href="/examen_mental/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar Examen
                                                    Mental</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/examen_mental/{{{$paciente->id_examen_mental}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Examen
                                                    Mental</strong></a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <h3>Historial</h3>
                            </div>

                            <div id="historial">
                                <div class="row">

                                    @if ($paciente->id_historia_psiquiatrica_fam == 0)
                                        <div class="col-xs-4">
                                            <a href="/historia_psiquiatrica/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Historial Psiquiatrico</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/historia_psiquiatrica/{{{$paciente->id_historia_psiquiatrica_fam}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Historial
                                                    Psiquiatrico</strong></a>
                                        </div>
                                    @endif




                                    @if ($paciente->id_historia_previa == 0)
                                        <div class="col-xs-4">
                                            <a href="/historia_psiquiatrica_previa/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Historia Psiquiatrica Previa</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/historia_psiquiatrica_previa/{{{$paciente->id_historia_previa}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Historia
                                                    Psiquiatrica Previa</strong></a>
                                        </div>
                                    @endif



                                    @if ($paciente->id_historia_clinica_familiar == 0)
                                        <div class="col-xs-4">
                                            <a href="/historia_clinica_familiar/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Historia Clinico Familiar</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/historia_clinica_familiar/{{{$paciente->id_historia_clinica_familiar}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Historia Clínico
                                                    Familiar</strong></a>
                                        </div>
                                    @endif
                                </div>

                                <br>

                                <div class="row">


                                    @if ($paciente->id_abuso_de_substancias == 0)
                                        <div class="col-xs-4">
                                            <a href="/abuso_de_substancias/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Reporte Substancias</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/abuso_de_substancias/{{{$paciente->id_abuso_de_substancias}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver
                                                    Reporte Substancias</strong></a>
                                        </div>
                                    @endif


                                    @if ($paciente->id_peea == 0)
                                        <div class="col-xs-4">
                                            <a href="/peea/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar PEEA</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/peea/{{{$paciente->id_peea}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver PEEA</strong></a>
                                        </div>
                                    @endif



                                    @if ($paciente->id_pat_nopat == 0)
                                        <div class="col-xs-4">
                                            <a href="/pat_nopat/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar Antecedentes
                                                    Patológicos</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/pat_nopat/{{{$paciente->id_pat_nopat}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Antecedentes
                                                    Patológicos</strong></a>
                                        </div>
                                    @endif
                                </div>

                            </div>

                            <h3>Antecedentes y consultas</h3>
                            <br/>

                            <div id="antecedentes">

                                <div class="row">

                                    @if ($paciente->id_antecedentes_ginecobstetricos == 0)
                                        <div class="col-xs-4">
                                            <a href="/antecedentes_ginecobstetricos/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Antecedentes Ginecobstetricos</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/antecedentes_ginecobstetricos/{{{$paciente->id_antecedentes_ginecobstetricos}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Antecedentes
                                                    Ginecobstetricos</strong></a>
                                        </div>
                                    @endif


                                    @if ($paciente->id_diagnostico == 0)
                                        <div class="col-xs-4">
                                            <a href="/diagnostico/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Diagnostico</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/diagnostico/{{{$paciente->id_diagnostico}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Diagnóstico</strong></a>
                                        </div>
                                    @endif

                                    @if ($paciente->id_plan_tratamiento == 0)
                                        <div class="col-xs-4">
                                            <a href="/plan_tratamiento/paciente/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Plan de Tratamiento</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/plan_tratamiento/{{{$paciente->id_plan_tratamiento}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Plan de
                                                    Tratamiento</strong></a>
                                        </div>
                                    @endif
                                </div>

                                <br>

                                <div class="row">

                                    @if ($paciente->id_nota_clinica == 0)
                                        <div class="col-xs-4">
                                            <a href="/nota_clinica/new/{{{$paciente->id}}}"
                                               class="btn btn-info btn-lg btn-block"><strong>Agregar
                                                    Notas Clínicas</strong></a>
                                        </div>
                                    @else
                                        <div class="col-xs-4">
                                            <a href="/nota_clinica/paciente/{{{$paciente->id}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver Notas
                                                    Clínicas</strong></a>
                                        </div>
                                    @endif

                                </div>
                                <br/>
                                <div class="row">
                                    @if(($paciente->id_nota_clinica != 0)&&($paciente->id_diagnostico != 0)&&($paciente->id_plan_tratamiento != 0)&&($paciente->id_antecedentes_ginecobstetricos != 0)
                                    &&($paciente->id_pat_nopat != 0)&&($paciente->id_peea != 0)&&($paciente->id_abuso_de_substancias != 0)&&($paciente->id_historia_clinica_familiar != 0)
                                    &&($paciente->id_historia_previa != 0)&&($paciente->id_historia_psiquiatrica_fam != 0)&&($paciente->id_examen_mental != 0)&&($paciente->id_exploracion_fisica != 0))
                                        <div class="col-xs-4">
                                            <a href="/showall/{{{$paciente->id}}}"
                                               class="btn btn-success btn-lg btn-block"><strong>Ver
                                                    Todo</strong></a>
                                        </div>
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div> <!-- div_pacientes -->
                </div> <!-- jumbotron -->
            </div>
        </div>
    </div>

@stop


