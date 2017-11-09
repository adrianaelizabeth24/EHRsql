@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Panel de control
            </div>

            <div class="links">
                <a href='/substancias'>Configuracion Substancias</a>
                <a href="/preguntasPatNoPat">Configuracion Preguntas Antecedentes Patologicos</a>
                <a href="/estado_civil">Configuracion Estado Civil</a>
                <a href="/lugar_residencia">Configuracion Lugares de Residencia</a>
            </div>
        </div>
    </div>

@endsection

