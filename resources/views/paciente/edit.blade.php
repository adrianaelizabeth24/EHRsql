@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/paciente.css') }}" rel="stylesheet">

    <div class="jumbotron">
        <form method="post" action="{{action('PacienteController@update', $id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH"/>
            <div class="container">
                <h2>Datos Generales</h2>
                <div class="row">
                    <div class="col-md-12">
                        <label>Nombre(s)</label>
                        <input class="form-control" type="text" placeholder="Nombre Completo" name="nombre"
                               value="{{$paciente->nombre}}"/>
                        <label>Apellido Paterno</label>
                        <input class="form-control" type="text" placeholder="Apellido Paterno" name="apellido_paterno"
                               value={{$paciente->apellido_paterno}} required/>
                        <label>Apellido Materno</label>
                        <input class="form-control" type="text" placeholder="Apellido Materno" name="apellido_materno"
                               value="{{$paciente->apellido_materno}}" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Sexo</label>
                        <select name="sexo" required>
                            @switch($paciente->sexo)
                                @case('H')
                                <option value="H" selected>Hombre</option>
                                <option value="M">Mujer</option>
                                <option value="O">Otro</option>
                                @break
                                @case('M')
                                <option value="H">Hombre</option>
                                <option value="M" selected>Mujer</option>
                                <option value="O">Otro</option>
                                @break
                                @case('O')
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                                <option value="O" selected>Otro</option>
                                @break
                                @default
                                <option value="0" Sexo selected></option>
                            @endswitch

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Motivo de consulta</label>
                        <input class="form-control" type="text" placeholder="Motivo de consulta"
                               name="motivo_consulta"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Edad</label>
                        <input class="form-control" type="number" placeholder="Edad" name="edad"
                               value="{{$paciente->edad}}" required/>
                        <label>Referido por</label>
                        <input class="form-control" type="text" placeholder="Referido por" name="referido"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Dirección</label>
                        <input class="form-control" type="text" class="allwidth" placeholder="Direccion"
                               name="direccion"
                               value="{{$paciente->direccion}}" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Telefono</label>
                        <input class="form-control" type="text" class="allwidth" placeholder="Telefono" name="telefono"
                               value="{{$paciente->telefono}}" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Fecha de nacimiento</label>
                        <input class="form-control" type="date" placeholder="Fecha de Nacimiento" name="nacimiento"
                               value="{{$paciente->nacimiento}}" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Lugar de Residencia</label>
                        <select name="residencia">
                            @foreach($lugar_residencia as $lugar)
                                @if($paciente->lugar_residencia == $lugar->id)
                                <option value="{{$lugar->id}}" selected>{{$lugar->nombre}}</option>
                                @else
                                    <option value="{{$lugar->id}}" >{{$lugar->nombre}}</option>
                                @endif
                                @endforeach
                            </select>
                    </div>
                </div>
            </div>

            <div class="container">
                <h2>Datos Demograficos</h2>

                <div class="row">
                    <div class="col-md-12">
                        <h4>Estado Civil</h4>
                        @foreach($estado_civil as $edo)
                            @if($edo->id == $paciente->estado_civil)
                                <input type="radio" name="estado_civil" value="{{$edo->id}}" checked/>{{$edo->nombre}}
                                <br/>
                            @else
                                <input type="radio" name="estado_civil" value="{{$edo->id}}"/>{{$edo->nombre}}<br/>
                            @endif
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <label>Religion</label>
                        <input class="form-control" type="text" placeholder="Religion" name="religion"
                               value="{{$paciente->religion}}" required/>
                        <label>Escolaridad</label>
                        <input class="form-control" type="text" placeholder="Escolaridad" name="escolaridad"
                               value="{{$paciente->escolaridad}}" required/>
                    </div>
                </div>

                <h4>¿Quién provee el sustento familiar?</h4>
                @switch($paciente->sustento)
                    @case('Paciente')
                    <input type="checkbox" name="sustento" value="Paciente" checked>Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Cónyuge')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge" checked>Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Igualmente compartido')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido" checked>Igualmente compartido
                    <br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Padres')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres" checked>Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Hermano')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano" checked>Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Parientes')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes" checked>Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Compañero')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero" checked>Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Pension')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension" checked>Pension<br>
                    <input type="checkbox" name="sustento" value="Otro">Otro<br>
                    @break
                    @case('Otro')
                    <input type="checkbox" name="sustento" value="Paciente">Paciente<br>
                    <input type="checkbox" name="sustento" value="Cónyuge">Cónyuge<br>
                    <input type="checkbox" name="sustento" value="Igualmente compartido">Igualmente compartido<br>
                    <input type="checkbox" name="sustento" value="Padres">Padres<br>
                    <input type="checkbox" name="sustento" value="Hermano">Hermano<br>
                    <input type="checkbox" name="sustento" value="Parientes">Parientes<br>
                    <input type="checkbox" name="sustento" value="Compañero">Compañero<br>
                    <input type="checkbox" name="sustento" value="Pension">Pension<br>
                    <input type="checkbox" name="sustento" value="Otro" checked>Otro<br>
                    @break
                @endswitch
                <br>
                <label>Ocupación del jefe de familia</label>
                <input class="form-control" type="text" class="allwidth" placeholder="Ocupación del jefe de familia"
                       name="ocupacion_sustento"
                       value="{{$paciente->ocupacion_sustento}}" required/>
                <label>Ocupación del paciente</label>
                <input class="form-control" type="text" class="allwidth" placeholder="Ocupación del paciente"
                       name="ocupacion_paciente"
                       value="{{$paciente->ocupacion_paciente}}" required/>
            </div>
            <br/>
            <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
        </form>
    </div>
@stop