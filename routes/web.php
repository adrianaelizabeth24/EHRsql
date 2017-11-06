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

Route::get('/substancias', function (){
    return view('substancias.index');
});

/*

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

*/

/*
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

*/
//absuo_de_substancias
Route::get('abuso_de_substancias/paciente/{paciente}', 'AbusoDeSubstanciasController@create');
Route::resource('abuso_de_substancias', 'AbusoDeSubstanciasController');

//antecedentes ginecobstetricos
Route::get('antecedentes_ginecobstetricos/paciente/{paciente}', 'AntecedentesGinecobstetricosController@create');
Route::resource('antecedentes_ginecobstetricos', 'AntecedentesGinecobstetricosController');

//diagnostico
Route::get('diagnostico/paciente/{paciente}', 'DiagnosticoController@create');
Route::resource('diagnostico', 'DiagnosticoController');

//examen mental
Route::get('examen_mental/paciente/{paciente}', 'ExamenMentalController@create');
Route::resource('examen_mental', 'ExamenMentalController');

//examen exploración física
Route::get('exploracion_fisica/paciente/{paciente}', 'ExploracionFisicaController@create');
Route::resource('exploracion_fisica','ExploracionFisicaController');

//historia clinica familiar
Route::get('historia_clinica_familiar/paciente/{paciente}', 'HistoriaClinicaFamiliarController@create');
Route::resource('historia_psiquiatrica', 'HistoriaClinicaFamiliarController');

//historia psiquiatrica familiar
Route::get('historia_psiquiatrica/paciente/{paciente}', 'HistoriaPsiquiatricaFamiliarController@create');
Route::resource('historia_psiquiatrica', 'HistoriaPsiquiatricaFamiliarController');

//historia psiquiatrica previa
Route::get('historia_psiquiatrica_previa/paciente/{paciente}', 'HistoriaPsiquiatricaPreviaController@create');
Route::resource('historia_psiquiatrica_previa', 'HistoriaPsiquiatricaPreviaController');

//nota clinica
Route::resource('nota_clinica', 'NotaClinicaController');

//pacientes
Route::resource('paciente', 'PacienteController');


/* PEEA */
Route::get('peea/paciente/{paciente}', 'PeeaController@create');
Route::resource('peea','PeeaController');

/* Antecedentes patológicos y no patológicos */
Route::get('pat_nopat/paciente/{paciente}', 'PatnoPatController@create');
Route::resource('pat_nopat','PatnoPatController');

//plan de tratamiento
Route::get('plan_tratamiento/paciente/{paciente}', 'PlanTratamientoController@create');
Route::resource('plan_tratamiento','PlanTratamientoController');

//substancias
Route::resource('substancias', 'SubstanciasController');

