@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('EHRController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">

            <div class="container">
                <h2>EHR</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="number" name="numero_de_episodios" placeholder="Número de Episodios" value="{{$ehr->numero_de_episodios}}"/>
                    <br/>

                    <textarea name="problemas_psiquiatricos" placeholder="Problemas Psiquiatricos">{{$ehr->problemas_psiquiatricos}}</textarea>
                    <br/>

                    <textarea name="tratamientos_anteriores" placeholder="Tratamientos Anteriores">{{$ehr->tratamientos_anteriores}}</textarea>
                    <br/>

                    <textarea name="antecedentes_psicologicos" placeholder="Antecedentes Psicologicos">{{$ehr->antecedentes_psicologicos}}</textarea>
                    <br/>

                    <textarea name="notas_antecedentes" placeholder="Notas Antecedentes">{{$ehr->notas_antecedentes}}</textarea>
                    <br/>

                </div>
            </div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;">
    </form>
@stop