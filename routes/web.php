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
    return view('auth.login');
});

Route::get('/panel_control', function(){
    return view('panel_control');
});

Route::get('/paciente', function (){
    return view('paciente.index');
});

Route::get('/substancias', function (){
    return view('substancias.index');
});

Route::get('/preguntasPatNoPat', function (){
    return view('preguntasPatNoPat.index');
});
Route::get('/estado_civil', function (){
    return view('estado_civil.index');
});

Route::get('/lugar_residencia', function (){
    return view('lugar_residencia.index');
});

Route::get('/sustento', function (){
    return view('sustento.index');
});

Route::get('/trastorno_mental',function (){
    return view('trastorno_mental.index');
});

Route::get('/opciones_exploracion_fisica',function (){
    return view('opciones_exploracion_fisica.index');
});
/////////////////////////////////////////
///
///
///
///
///
///
///
///
/// /////////////////////////////////////////
///
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
Route::resource('historia_clinica_familiar', 'HistoriaClinicaFamiliarController');

//historia psiquiatrica familiar
Route::get('historia_psiquiatrica/paciente/{paciente}', 'HistoriaPsiquiatricaFamiliarController@create');
Route::resource('historia_psiquiatrica', 'HistoriaPsiquiatricaFamiliarController');

//historia psiquiatrica previa
Route::get('historia_psiquiatrica_previa/paciente/{paciente}', 'HistoriaPsiquiatricaPreviaController@create');
Route::resource('historia_psiquiatrica_previa', 'HistoriaPsiquiatricaPreviaController');

//nota clinica
Route::get('nota_clinica/new/{paciente}', 'NotaClinicaController@newNoteBlock');
Route::get('nota_clinica/paciente/{paciente}', 'NotaClinicaController@index');
Route::get('nota_clinica/nota_clinica/{nota_clinica}', 'NotaClinicaController@create');
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

//Preguntas Pat no Pat
Route::resource('preguntasPatNoPat', 'PreguntasPatNoPatController');

//substancias
Route::resource('substancias', 'SubstanciasController');

//estado civil
Route::resource('estado_civil', 'EstadoCivilController');

Route::resource('lugar_residencia', 'LugarResidenciaController');

//sustento familiar
Route::resource('sustento', 'SustentoController');

Route::resource('trastorno_mental', 'TrastornoMentalController');

Route::resource('opciones_exploracion_fisica', 'OpcionesExploracionFisica');

Route::resource('showall', 'ShowAllController');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register/', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register/', 'Auth\RegisterController@register');