@extends('layouts.app')

@section('content')  	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <!-- Main jumbotron for a primary marketing message or call to action -->


    <div class="jumbotron">
        <div class="input-group" style="width:20%;right:56px;padding-right:15px;position:absolute;">
            <input type="text" class="form-control" placeholder="Buscar substancia">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
        <div class="container">
            <h2>Lista de Substancias</h2>

			<div id="div_substancias" class="container">
				@foreach($substancias as $substancia)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<h4 class="panel-title">
								<a href="substancias/{{{$substancia->id}}}">
									{{$substancia->nombre}}</a>
							</h4>
						</div>
					</div> <!-- Complete patient info -->

				@endforeach
				<a href="/substancias/create" class="btn btn-info">Nueva Substancia</a>
			</div> <!-- div_substancias -->
		</div>

    </div> <!-- jumbotron -->
    <hr>
@stop


