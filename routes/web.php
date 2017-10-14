<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paciente', function (){
    return view('paciente.index');
});

Route::get('/peea', function () {

	// Crear variables para las opciones de las preguntas correspondientes

	$ep_actual = App\opciones_preguntas::where('pregunta','ep_actual') -> pluck('opcion');
	$inicio_sintomas = App\opciones_preguntas::where('pregunta','inicio_sintomas') -> pluck('opcion');
	$tratamiento = App\opciones_preguntas::where('pregunta','tratamiento') -> pluck('opcion');

	// Mandarle las variables a la vista

    return view('peea')->with(  
    	compact(
    		'ep_actual',
    		'inicio_sintomas',
    		'tratamiento'
    		))  ;
});

Route::get('/pat_nopat', function () {

	// Crear variables para las opciones de las preguntas correspondientes

	$antecedentes = App\opciones_preguntas::where('pregunta','antecedentes_pat_nopats') -> pluck('opcion');
	$tabaquismo = App\opciones_preguntas::where('pregunta','tabaquismo') -> pluck('opcion');
	$bebidas_frecuencia = App\opciones_preguntas::where('pregunta','bebidas_alcoholicas_frecuencia') -> pluck('opcion');
	$bebidas_cantidad = App\opciones_preguntas::where('pregunta','bebidas_alcoholicas_cantidad') -> pluck('opcion');
	$substancias = App\opciones_preguntas::where('pregunta','substancias') -> pluck('opcion');

	// Mandarle las variables a la vista
	
    return view('pat_nopat')->with(  
    	compact(
    		'antecedentes',
    		'tabaquismo',
    		'bebidas_frecuencia',
    		'bebidas_cantidad',
    		'substancias'
    		))  ;
});

Route::resource('paciente', 'PacienteController');

Route::get('exploracion_fisica/paciente/{paciente}', 'ExploracionFisicaController@create');
Route::resource('exploracion_fisica','ExploracionFisicaController');

Route::get('examen_mental/paciente/{paciente}', 'ExamenMentalController@create');
Route::resource('examen_mental', 'ExamenMentalController');
