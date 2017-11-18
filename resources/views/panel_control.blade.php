@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Panel de control
            </div>

            <div class="links">
                <a href='/substancias'>Configuracion Substancias</a><br/>
                <a href="/preguntasPatNoPat">Configuracion Preguntas Antecedentes Patologicos</a><br/>
                <a href="/estado_civil">Configuracion Estado Civil</a><br/>
                <a href="/lugar_residencia">Configuracion Lugares de Residencia</a><br/>
                <a href="/sustento">Configuracion Sustento Familiar</a><br/>
                <a href="/trastorno_mental">Configuracion Trastornos Mentales</a><br/>
                <a href="/opciones_exploracion_fisica">Configuracion Preguntas Exploracion Fisica</a><br/>
            </div>
        </div>

    </div>

@endsection

