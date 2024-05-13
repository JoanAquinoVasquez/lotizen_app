<?php

use App\Http\Controllers\Duenio\ProyectoController as DuenioProyectoController;
use App\Http\Controllers\Duenio\PerfilController as DuenioPerfilController;
use App\Http\Controllers\Duenio\LoginController as DuenioLoginController;
use App\Http\Controllers\Duenio\DashboardController as DuenioDashboardController;

use App\Http\Controllers\Gerente_comercial\ProyectoController as Gerente_comercialProyectoController;
use App\Http\Controllers\Gerente_comercial\PerfilController as Gerente_comercialPerfilController;
use App\Http\Controllers\Gerente_comercial\LoginController as Gerente_comercialLoginController;
use App\Http\Controllers\Gerente_comercial\DashboardController as Gerente_comercialDashboardController;


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'PostsController@index')->name('home');

});
*/


Route::get('/', function () {
    return view('welcome');
});



//Rutas de prueba para el CRUD 

Route::get('/duenio/login', [DuenioLoginController::class, 'showLoginForm'])->name('login-duenio');
Route::post('/duenio/login', [DuenioLoginController::class, 'login'])->name('login-duenio');

//Rutas de prueba para el CRUD 

Route::get('/gerente_comercial/login', [Gerente_comercialLoginController::class, 'showLoginForm'])->name('login-gerente_comercial');
Route::post('/gerente_comercial/login', [Gerente_comercialLoginController::class, 'login'])->name('login-gerente_comercial');


Route::group(['middleware' => ['DuenioSession']], function () {
    // Repite esto para los otros roles: gerente_comercial, supervisor, asesor
    Route::get('/duenio/dashboard', [DuenioDashboardController::class, 'index']);
    Route::get('/duenio/miperfil', [DuenioPerfilController::class, 'mostrarDatos']);
    Route::get('/duenio/miperfil', [DuenioPerfilController::class, 'mostrarDatos'])->name('duenio_miperfil');
    Route::post('/duenio/guardar_datos', [DuenioPerfilController::class, 'guardarDatos'])->name('duenio_guardar_datos');
    Route::post('/duenio/guardar_datos_empresa', [DuenioPerfilController::class, 'guardarDatosEmpresa'])->name('duenio_guardar_datos_empresa');
    Route::get('/duenio/proyecto', [DuenioProyectoController::class, 'mostrarDatos']);
    Route::get('/duenio/proyecto', [DuenioProyectoController::class, 'mostrarDatos'])->name('duenio_proyecto');
    Route::post('/duenio/guardar_datos_proyecto', [DuenioProyectoController::class, 'guardarDatos'])->name('duenio_guardar_datos_proyecto');
    Route::post('/duenio/guardar_datos_empresa_proyecto', [DuenioProyectoController::class, 'guardarDatosEmpresa'])->name('duenio_guardar_datos_empresa_proyecto');
    Route::get('/duenio/logout', [DuenioLoginController::class, 'logout'])->name('duenio_logout');
    


    Route::post('/duenio/guardar_datos{id}', [DuenioProyectoController::class, 'guardarProyecto'])->name('duenio_guardar_Proyecto');
    Route::post('/duenio/agregar_proyecto', [DuenioProyectoController::class, 'agregarProyecto'])->name('duenio_agregarProyecto');;
    Route::get('/duenio/proyecto/{id}', [DuenioProyectoController::class, 'mostrarDetallesProyecto'])->name('duenio_mostrarDetallesProyecto');
    Route::post('/duenio/proyecto/{id}/eliminar', [DuenioProyectoController::class, 'eliminarProyecto']);
    Route::get('/obtener-proyecto/{id}', [DuenioProyectoController::class, 'obtenerProyecto']);
    // web.php
    Route::get('/buscar-proyecto', [DuenioProyectoController::class, 'buscarProyecto']);
});

Route::group(['middleware' => ['Gerente_comercialSession']], function () {
    // Repite esto para los otros roles: gerente_comercial, supervisor, asesor
    Route::get('/gerente_comercial/dashboard', [Gerente_comercialDashboardController::class, 'index']);
    Route::get('/gerente_comercial/miperfil', [Gerente_comercialPerfilController::class, 'mostrarDatos']);
    Route::get('/gerente_comercial/miperfil', [Gerente_comercialPerfilController::class, 'mostrarDatos'])->name('gerente_comercial_miperfil');
    Route::post('/gerente_comercial/guardar_datos', [Gerente_comercialPerfilController::class, 'guardarDatos'])->name('gerente_comercial_guardar_datos');
    Route::get('/gerente_comercial/proyecto', [Gerente_comercialProyectoController::class, 'mostrarDatos']);
    Route::get('/gerente_comercial/proyecto', [Gerente_comercialProyectoController::class, 'mostrarDatos'])->name('gerente_comercial_proyecto');
    Route::get('/gerente_comercial/logout', [Gerente_comercialLoginController::class, 'logout'])->name('gerente_comercial_logout');

    Route::post('/gerente_comercial/guardar_datos{id}', [Gerente_comercialProyectoController::class, 'guardarProyecto'])->name('gerente_comercial_guardar_Proyecto');
    Route::post('/gerente_comercial/agregar_proyecto', [Gerente_comercialProyectoController::class, 'agregarProyecto'])->name('gerente_comercial_agregarProyecto');;
    Route::get('/gerente_comercial/proyecto/{id}', [Gerente_comercialProyectoController::class, 'mostrarDetallesProyecto'])->name('gerente_comercial_mostrarDetallesProyecto');
    Route::post('/gerente_comercial/proyecto/{id}/eliminar', [Gerente_comercialProyectoController::class, 'eliminarProyecto']);
    Route::get('/obtener-proyecto/{id}', [Gerente_comercialProyectoController::class, 'obtenerProyecto']);
    // web.php
    Route::get('/buscar-proyecto', [Gerente_comercialProyectoController::class, 'buscarProyecto']);
});
