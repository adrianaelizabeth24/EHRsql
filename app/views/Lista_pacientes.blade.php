<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Centro de Ludopatía</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#">Pacientes</a></li>
			  <li><a href="#">Consultas</a></li>
			  <li><a href="#">Registros</a></li>
			</ul>

		  </div>
		</nav>

			<!-- Main jumbotron for a primary marketing message or call to action -->


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
				<h2>Lista de Pacientes</h2>
			  </div>



			  <div id="div_pacientes" class="container">
				<div class="panel panel-default">
				  <div class="panel-heading" role="tab">
				  <h4 class="panel-title">
					<a href="#patient1" data-toggle="collapse">Adriana Valenzuela</a>
				  <h4>
					</div>
				  <div id="patient1" class="panel-collapse collapse" role="tabpanel">
					<div class="row">
					  <div class="col-md-12">
						<div class="personal_info">
						  <p>Nombre completo: Adriana Elizabeth Valenzuela</p>
						  <p>Edad: 22</p>
						  <a class="btn btn-info">Ver mas información</a>
						</div>
					  </div>
					</div>
				  </div> 
				</div> <!-- Complete patient info -->
				<div class="panel panel-default">
				  <div class="panel-heading" role="tab">
				  <h4 class="panel-title">
					<a href="#patient2" data-toggle="collapse">Roberto Reyes</a>
				  <h4>
					</div>
				  <div id="patient2" class="panel-collapse collapse" role="tabpanel">
					<div class="row">
					  <div class="col-md-12">
						<div class="personal_info">
						  <p>Nombre completo: Roberto I. Ruiz Reyes</p>
						  <p>Edad: 23</p>
						  <a class="btn btn-info">Ver mas información</a>
						</div>
					  </div>
					</div>
				  </div> 
				</div> <!-- Complete patient info -->
			  </div> <!-- div_pacientes -->
			</div> <!-- jumbotron -->
		<hr>
		<div class="container">
		 <footer>
		   <p>© Centro de Ludopatia 2017</p>
		 </footer>
		</div>

    </body>
</html>
