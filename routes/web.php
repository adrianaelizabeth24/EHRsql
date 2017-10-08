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
    return view('peea');
});

Route::get('/pat_nopat', function () {

	$antecedentes = App\antecedentes_pat_nopat::pluck('antecedente');

	$tabaquismo = App\tabaquismo::pluck('nivel');

	$bebidas_frecuencia = App\bebidas_alcoholicas::where('categoria','frecuencia')->pluck('texto');
	$bebidas_cantidad = App\bebidas_alcoholicas::where('categoria','cantidad')->pluck('texto');

	$substancias = App\substancias::pluck('nombre');

    return view('pat_nopat')->with(  compact('antecedentes', 'tabaquismo', 'bebidas_frecuencia', 'bebidas_cantidad','substancias'))  ;
});

Route::resource('paciente', 'PacienteController');