@extends('layouts.app')
@section('content')

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
                <h2>Antecedentes Ginecobstetricos</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Fecha : </label>{{$antecedentes->fecha}}
                    <br/>
                    <label>Ritmo Cardiaco :</label>{{$antecedentes->ritmo_cardiaco}}
                    <br/>

                    <label>Tensión Premenstrual</label>
                    @if($antecedentes->tension_premenstrual == 1)
                        Si
                    @else
                        No
                    @endif
                    <br/>

                    <label>Vida Sexual</label>
                    @if($antecedentes->vida_sexual == 1)
                        Si
                    @else
                        No
                    @endif
                    <br/>

                    <label>Número de Compañeros Sexuales:</label>{{$antecedentes->numero_compañeros_sexuales}}
                    <br/>

                    <label>Antecedentes Obstetricos</label>
                    @if($antecedentes->antecedentes_obstetricos == 1)
                        Si
                    @else
                        No
                    @endif
                    <br/>

                    <label>Embarazo Actual</label>
                    @if($antecedentes->embarazo_actual == 1)
                        Si
                    @else
                        No
                    @endif
                    <br/>

                    <label>Lactancia</label>
                    @if($antecedentes->lactancia == 1)
                        Si
                    @else
                        No
                    @endif
                    <br/>

                    <label>Posibilidad de Embarazo</label><br/>
                    @if($antecedentes->posibilidad_embarazo == 1)
                        Si
                    @else
                        No
                    @endif
                    <br/>

                    <label>Histerectomia</label><br/>
                    @if($antecedentes->histerectomia == 1)
                        Si
                    @else
                        No
                    @endif
                    <br/>

                </div>
            </div>
        <a href="/paciente/{{{$antecedentes->id_paciente}}}" class="btn btn-info">Regresar</a>
        <form action="{{action('AntecedentesGinecobstetricosController@destroy', $antecedentes->id)}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Borrar</button>
        </form>
        <a href="/antecedentes_ginecobstetricos/{{{$antecedentes->id}}}/edit" class="btn btn-warning">Editar</a>
        </div> <!-- jumbotron -->
@stop