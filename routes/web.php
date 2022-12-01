<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

/*Cambiamos de una ruta get a una ruta view, ambas hacen exactamente lo mismomandan a llamar al 
archivo welcome*/
Route::view('/', 'welcome')->name('welcome');  

/*CREAR RUTAS A HOME, RECUERDO Y REGISTRO RUTAR DE TIPO VIEW
Route::view('Home', 'Home')->name('inicio');
Route::view('Registrar', 'Registrar')->name('registro');
Route::view('Recuerdo', 'Recuerdo')->name('recuerdo');
*/
/*Route::view('plantilla','plantilla');*/

/*Creamos rutas de tipo get y les ponemos un apodo*/
Route::get('/', [controladorVistas::class, 'showWelcome']);
Route::get('Home', [controladorVistas::class, 'showHome'])->name('inicio');
Route::get('Registrar', [controladorVistas::class, 'showIngresar'])->name('registro');
Route::get('Recuerdo', [controladorVistas::class, 'showRecuerdos'])->name('recuerdo');

/*Route::get('ARCHIVO',[CONTROLADOR::class,'FunctionName']) */


/*RUTAS AGRUPADAS PARA CONTROLADOR
Route::controller(controladorVistas::class)->group(
    function(){
        Route::get('/', 'showWelcome');
        Route::get('Home', 'showHome')->name('inicio');
        Route::get('Registrar', 'showIngresar')->name('registro');
        Route::get('Recuerdo', 'showRecuerdos')->name('recuerdo');
    }
);
*/
//Ruta para envio post
Route::post('GuardarRecuerdo', [controladorVistas::class, 'procesarRecuerdo'])->name('SaveMem');


//rutas para controaldorBD
Route::get('recuerdo/create', [controladorBD::class, 'create'])->name('recuerdo.create');

//ruta para guardar los recuerdos
Route::post('SaveRecuerdo', [controladorBD::class, 'store'])->name('recuerdo.store');

//Ruta para Vista Consultar Recuerdo
Route::get('Recuerdo', [controladorBD::class, 'index'])->name('recuerdo.index');

///////////////////////////////////////////////////////////////////////////////////////////////////////////

//Ruta para llegar al Edit
Route::get('Recuerdo/{id}/edit', [controladorBD::class, 'edit'])->name('recuerdo.edit');

//Ruta para actualizar los recuerdos
Route::put('Recuerdo/{id}',[controladorBD::class, 'update'])->name('recuerdo.update');

//Ruta para llegar al Eliminar
Route::get('Recuerdo/{id}/show', [controladorBD::class, 'show'])->name('recuerdo.show');

//Ruta para eliminarlos recuerdos
Route::delete('Recuerdo/{id}',[controladorBD::class, 'destroy'])->name('recuerdo.destroy');


