@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('PacienteController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="container">
            <h2>Datos Generales</h2>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Nombre Completo" name="nombre" value="{{$paciente->nombre}}"/>
                    <input type="text" placeholder="Apellido Paterno" name="apellido_paterno"
                           value = {{$paciente->apellido_paterno}} required/>
                    <input type="text" placeholder="Apellido Materno" name="apellido_materno"
                           value="{{$paciente->apellido_materno}}" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
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
                    <input type="text" placeholder="Motivo de consulta" name="motivo_consulta"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="number" placeholder="Edad" name="edad" value="{{$paciente->edad}}" required/>
                    <input type="text" placeholder="Referido por" name="referido"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" class="allwidth" placeholder="Direccion" name="direccion"
                           value="{{$paciente->direccion}}" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" class="allwidth" placeholder="Telefono" name="telefono"
                          value="{{$paciente->telefono}}" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="date" placeholder="Fecha de Nacimiento" name="nacimiento" value="{{$paciente->nacimiento}}" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <select name="residencia">
                        <option value="0">Lugar de Residencia</option>
                        <option value="Monterrey">Monterrey</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="San Nicolás">San Nicolás</option>
                        <option value="Garza García">Garza García</option>
                        <option value="Apodaca">Apodaca</option>
                        <option value="Escobedo">Escobedo</option>
                        <option value="OtroMun">Otro (Mun. N.L.)</option>
                        <option value="OtroEst">Otro Estado</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="container">
            <h2>Datos Demograficos</h2>

            <div class="row">
                <div class="col-md-12">
                    <h4>Estado Civil</h4>
                    @switch($paciente->estado_civil)
                        @case('Soltero')
                            <input type="checkbox" name="estado_civil" value="Soltero" checked/>Soltero<br>
                            <input type="checkbox" name="estado_civil" value="Casado"/>Casado<br>
                            <input type="checkbox" name="estado_civil" value="Separado"/>Separado<br>
                            <input type="checkbox" name="estado_civil" value="Divorciado"/>Divorciado<br>
                            <input type="checkbox" name="estado_civil" value="Viudo"/>Viudo<br>
                            <input type="checkbox" name="estado_civil" value="Union Libre"/>Union Libre<br>
                        @break
                        @case('Casado')
                        <input type="checkbox" name="estado_civil" value="Soltero"/>Soltero<br>
                        <input type="checkbox" name="estado_civil" value="Casado" checked/>Casado<br>
                        <input type="checkbox" name="estado_civil" value="Separado"/>Separado<br>
                        <input type="checkbox" name="estado_civil" value="Divorciado"/>Divorciado<br>
                        <input type="checkbox" name="estado_civil" value="Viudo"/>Viudo<br>
                        <input type="checkbox" name="estado_civil" value="Union Libre"/>Union Libre<br>
                        @break
                        @case('Separado')
                        <input type="checkbox" name="estado_civil" value="Soltero"/>Soltero<br>
                        <input type="checkbox" name="estado_civil" value="Casado"/>Casado<br>
                        <input type="checkbox" name="estado_civil" value="Separado" checked/>Separado<br>
                        <input type="checkbox" name="estado_civil" value="Divorciado"/>Divorciado<br>
                        <input type="checkbox" name="estado_civil" value="Viudo"/>Viudo<br>
                        <input type="checkbox" name="estado_civil" value="Union Libre"/>Union Libre<br>
                        @break
                        @case('Divorciado')
                        <input type="checkbox" name="estado_civil" value="Soltero"/>Soltero<br>
                        <input type="checkbox" name="estado_civil" value="Casado" />Casado<br>
                        <input type="checkbox" name="estado_civil" value="Separado" />Separado<br>
                        <input type="checkbox" name="estado_civil" value="Divorciado" checked/>Divorciado<br>
                        <input type="checkbox" name="estado_civil" value="Viudo"/>Viudo<br>
                        <input type="checkbox" name="estado_civil" value="Union Libre"/>Union Libre<br>
                        @break
                        @case('Viudo')
                        <input type="checkbox" name="estado_civil" value="Soltero"/>Soltero<br>
                        <input type="checkbox" name="estado_civil" value="Casado" />Casado<br>
                        <input type="checkbox" name="estado_civil" value="Separado" />Separado<br>
                        <input type="checkbox" name="estado_civil" value="Divorciado"/>Divorciado<br>
                        <input type="checkbox" name="estado_civil" value="Viudo" checked/>Viudo<br>
                        <input type="checkbox" name="estado_civil" value="Union Libre"/>Union Libre<br>
                        @break
                        @case('Union Libre')
                        <input type="checkbox" name="estado_civil" value="Soltero"/>Soltero<br>
                        <input type="checkbox" name="estado_civil" value="Casado" />Casado<br>
                        <input type="checkbox" name="estado_civil" value="Separado" />Separado<br>
                        <input type="checkbox" name="estado_civil" value="Divorciado"/>Divorciado<br>
                        <input type="checkbox" name="estado_civil" value="Viudo"/>Viudo<br>
                        <input type="checkbox" name="estado_civil" value="Union Libre" checked/>Union Libre<br>
                        @break
                    @endswitch
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Religion" name="religion" value="{{$paciente->religion}}" required/>
                    <input type="text" placeholder="Escolaridad" name="escolaridad" value="{{$paciente->escolaridad}}" required/>
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
                <input type="checkbox" name="sustento" value="Cónyuge" checked >Cónyuge<br>
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
                <input type="checkbox" name="sustento" value="Igualmente compartido" checked>Igualmente compartido<br>
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
            @case('Compañero)
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
            <input type="text" class="allwidth" placeholder="Ocupación del jefe de familia" name="ocupacion_sustento"
                   value="{{$paciente->ocupacion_sustento}}" required/>
            <input type="text" class="allwidth" placeholder="Ocupación del paciente" name="ocupacion_paciente"
                   value="{{$paciente->ocupacion_paciente}}" required/>
        </div>

        <div class="container">
            <h2>Alcoholismo</h2>

            <div class="row">
                <div class="col-md-12">
                    <input type="number" placeholder="Número de Tasas de té o café consumidas diariamente"
                           name="cafe_te_numero_tasas" value="{{$paciente->cafe_te_numero_tasas}}" required/>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Bebidas Alcoholicas" name="bebidas_alcoholicas"
                           value="{{$paciente->bebidas_alcoholicas}}" required/>
                    <input type="text" placeholder="Dudas Alcoholismo" name="dudas_alcoholismo"
                           value="{{$paciente->dudas_alcoholismo}}" required/>
                </div>
            </div>

        </div>
        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
    </form>
@stop