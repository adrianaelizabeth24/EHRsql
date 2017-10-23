@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('ExploracionFisicaController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH"/>

        <div class="jumbotron">
            <div class="container">
                <h2>Exploración Física</h2>
				<div class="row">
					<div class="col-md-12">
						<textarea class="form-control" name="condicion_general" placeholder="Condición general" rows="6" cols="100">{{$examen->condicion_general}}</textarea>
						<br/>
						<textarea class="form-control" name="piel" placeholder="Estado de piel" rows="6" cols="100">{{$examen->piel}}</textarea>
						<br/>
						<textarea class="form-control" name="cabeza" placeholder="Estado de cabeza" rows="6" cols="100">{{$examen->cabeza}}</textarea>
						<br/>
						<textarea class="form-control" name="ojos" placeholder="Estado de ojos" rows="6" cols="100">{{$examen->ojos}}</textarea>
						<br/>
						<textarea class="form-control" name="oidos_nariz_garganta" placeholder="Estado de oídos, nariz y garganta" rows="6" cols="100">{{$examen->oidos_nariz_garganta}}</textarea>
						<br/>
						<textarea class="form-control" name="cuello_tiroides" placeholder="Estado de cuello y tiroides" rows="6" cols="100">{{$examen->cuello_tiroides}}</textarea>
						<br/>
						<textarea class="form-control" name="pulmones" placeholder="Estado de pulmones" rows="6" cols="100">{{$examen->pulmones}}</textarea>
						<br/>
						<textarea class="form-control" name="corazon" placeholder="Estado de corazón" rows="6" cols="100">{{$examen->corazon}}</textarea>
						<br/>
						<textarea class="form-control" name="gastro" placeholder="Estado Gastrointestinal" rows="6" cols="100">{{$examen->gastro}}</textarea>
						<br/>
						<textarea class="form-control" name="lineaticos" placeholder="Estado de lineáticos" rows="6" cols="100">{{$examen->lineaticos}}</textarea>
						<br/>
						<textarea class="form-control" name="higado" placeholder="Estado del hígado" rows="6" cols="100">{{$examen->higado}}</textarea>
						<br/>
						<textarea class="form-control" name="musculo_esqueletico" placeholder="Estado del músculo esquelético" rows="6" cols="100"{{$examen->musculo_esqueletico}}></textarea>
						<br/>
						<textarea class="form-control" name="neurologico" placeholder="Estado neurológico" rows="6" cols="100">{{$examen->neurologico}}</textarea>
					</div>
				</div>
			</div>
		</div>


        </div> <!-- jumbotron -->

        <br/>
        <input type="submit" value="Guardar" class="btn btn-info" style="margin-left:20%;"/>
    </form>
@stop