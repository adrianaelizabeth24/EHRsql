@extends('layouts.app')
@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <form method="post" action="{{action('DiagnosticoController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>
        <div class="jumbotron">

            <div class="container">
                <h2>Diagnósitico <span style="color: #3097D1">{{$paciente->nombre}} {{$paciente->apellido_paterno}}</span></h2>

                <div class="row">
                    <div class="col-md-12">

                        <input type="text" name="diagnostico_primario" placeholder="Diagnostico primario"
                               value="{{$diagnostico->diagnostico_primario}}"/>
                        <br/>

                        <label>Código</label>
                        @if($diagnostico->codigo == "No se evaluó")
                            <input type="radio" name="codigo" value="No se evaluó" checked>No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @elseif($diagnostico->codigo == "Normal, no enferno")
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno" checked>Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @elseif($diagnostico->codigo == "limite")
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite" checked>limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @elseif($diagnostico->codigo == "Levemente enfermo")
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo" checked>Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @elseif($diagnostico->codigo == "Moderadamente enfermo")
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo" checked>Moderadamente
                            enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @elseif($diagnostico->codigo == "Marcadamente enfermo")
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo" checked>Marcadamente enfermo
                            <br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @elseif($diagnostico->codigo == "Severamente enfermo")
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo" checked>Severamente enfermo
                            <br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @elseif($diagnostico->codigo == "Extremadamente enfermo")
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo" checked>Extremadamente
                            enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos">Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @else
                            <input type="radio" name="codigo" value="No se evaluó">No se evaluó<br/>
                            <input type="radio" name="codigo" value="Normal, no enferno">Normal, no enferno<br/>
                            <input type="radio" name="codigo" value="limite">limite<br/>
                            <input type="radio" name="codigo" value="Levemente enfermo">Levemente enfermo<br/>
                            <input type="radio" name="codigo" value="Moderadamente enfermo">Moderadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Marcadamente enfermo">Marcadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Severamente enfermo">Severamente enfermo<br/>
                            <input type="radio" name="codigo" value="Extremadamente enfermo">Extremadamente enfermo<br/>
                            <input type="radio" name="codigo" value="Entre los pacientes mas enfermos" checked>Entre los
                            pacientes
                            mas enfermos<br/>
                            <br/>
                        @endif

                        <input type="text" name="icg_s" placeholder="ICG-S" value="{{$diagnostico->icg_s}}"/>
                        <br/>

                        <input type="text" name="diagnostico_secundario" placeholder="Diagnostico Secundario"
                               value="{{$diagnostico->diagnostico_secundario}}"/>
                        <br/>
                        <input type="text" name="codigo_secunadrio" placeholder="Código"
                               value="{{$diagnostico->codigo_secundario}}"/>
                        <br/>
                        <input type="text" name="icg_s_secundario" placeholder="ICG-S"
                               value="{{$diagnostico->icg_s_secunadrio}}"/>
                        <br/>


                    </div>
                </div>
            </div>


        </div> <!-- jumbotron -->

        <br/>
        
        <div class="row col-xs-offset-2">

            <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-default btn-lg btn-block">Cancelar</button>
            </div>

            <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>
            </div>
        </div>
        
    </form>
@stop

