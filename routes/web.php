<?php

use Illuminate\Support\Facades\Route;

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
/*Route::get('/procedencia', function () { 
    return view('Procedencia.procedencia');
});*/

Auth::routes();
Route::get('/procedencia', [App\Http\Controllers\ProcedenciaController::class, 'create'])->name('procedencia');
Route::post('/procedencia/store', [App\Http\Controllers\ProcedenciaController::class, 'store'])->name('procedencia.store');
Route::get('/procedencia/index', [App\Http\Controllers\ProcedenciaController::class, 'index'])->name('procedencia.index');
Route::get('/procedencia/edit/{id}', [App\Http\Controllers\ProcedenciaController::class, 'show'])->name('procedencia.show');
Route::post('/procedencia/update/{procedencias}/nose', [App\Http\Controllers\ProcedenciaController::class, 'update'])->name('procedencia.update');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

//Detalle Pilones

Route::get('/detalledatopilon/index', [App\Http\Controllers\DetalleDatoPilonController::class, 'index'])->name('calendario');


Route::post('/fincas/store', [App\Http\Controllers\FincaController::class,'store'])->name('fincas.store');

Route::get('/fincas/index', [App\Http\Controllers\FincaController::class,'index'])->name('fincas.index');

Route::get('/fincas', [App\Http\Controllers\FincaController::class,'create'])->name('fincas');

Route::get('/fincas/edit/{codigo_finca}', [App\Http\Controllers\FincaController::class,'show'])->name('fincas.show');

Route::post('/fincas/update/{fincas}', [App\Http\Controllers\FincaController::class,'update'])->name('fincas.update');

Route::delete('/fincas/{fincas}',[App\Http\Controllers\FincaController::class,'destroy'])->name('fincas.destroy');



/*------------------------------PILON -------------------------------*/
Route::get('/pilon', [App\Http\Controllers\PilonController::class,'pilonindex'])->name('pilon.pilonindex');

Route::get('/pilon/index', [App\Http\Controllers\PilonController::class,'index'])->name('pilon.index');

Route::post('/pilon/store', [App\Http\Controllers\PilonController::class,'store'])->name('pilon.store');

Route::get('/pilon/edit/{codigo_pilon}', [App\Http\Controllers\PilonController::class,'show'])->name('pilon.show');

Route::post('/pilon/update/{pilones}', [App\Http\Controllers\PilonController::class,'update'])->name('pilon.update');

Route::delete('/pilon/{pilon}',[App\Http\Controllers\PilonController::class,'destroy'])->name('pilon.destroy');



/*------------------------------VARIEDAD -------------------------------*/

Route::get('/variedad', [App\Http\Controllers\variedadController::class,'var'])->name('variedad');

Route::get('/variedad/index', [App\Http\Controllers\variedadController::class,'index'])->name('variedad.index');

Route::post('/variedad/store', [App\Http\Controllers\variedadController::class,'store'])->name('variedad.store');

Route::get('/variedad/edit/{codigo_variedade}', [App\Http\Controllers\variedadController::class,'show'])->name('variedad.show');

Route::post('/variedad/update/{variedade}', [App\Http\Controllers\variedadController::class,'update'])->name('variedad.update');

Route::delete('/variedad/{variedad}',[App\Http\Controllers\variedadController::class,'destroy'])->name('variedad.destroy');





Route::post('/ubicacion/stored', [App\Http\Controllers\UbicacionController::class, 'store'])->name('ubicacion.store');
Route::get('/ubicacion/index', [App\Http\Controllers\UbicacionController::class, 'index'])->name('ubicacion.index');
Route::get('/ubicacion/ubicacion', [App\Http\Controllers\UbicacionController::class, 'create'])->name('ubicacion');
Route::get('/ubicacion/edit/{codigo_ubicacion}', [App\Http\Controllers\UbicacionController::class, 'show'])->name('ubicacion.show');
Route::post('/ubicacion/update/{ubicaciones}', [App\Http\Controllers\UbicacionController::class, 'update'])->name('ubicacion.update');
Route::delete('/ubicacion/{codigo_ubicacion}', [App\Http\Controllers\UbicacionController::class, 'destroy'])->name('ubicacion.destroy');

Route::post('/tipoclase/stored', [App\Http\Controllers\tipoclaseController::class, 'store'])->name('tipoclase.store');
Route::get('/tipoclase/index', [App\Http\Controllers\tipoclaseController::class, 'index'])->name('tipoclase.index');
Route::get('/tipoclase/tipoclase', [App\Http\Controllers\tipoclaseController::class, 'create'])->name('tipoclase');
Route::get('/tipoclase/edit/{codigo_clase}', [App\Http\Controllers\tipoclaseController::class, 'show'])->name('tipoclase.show');
Route::post('/tipoclase/update/{tipoclases}', [App\Http\Controllers\tipoclaseController::class, 'update'])->name('tipoclase.update');
Route::delete('/tipoclase/{codigo_clase}', [App\Http\Controllers\tipoclaseController::class, 'destroy'])->name('tipoclase.destroy');
