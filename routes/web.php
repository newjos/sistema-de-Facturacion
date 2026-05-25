<?php
use App\Http\Controllers\CategoriaController;

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
    return view('Template');
});
Route::view('/panel', 'panel.index')->name('panel');


use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PresentacioneController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\PersonaController;

Route::resource('categorias', categoriaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('compras', CompraController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('proveedores', ProveedoreController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('presentaciones', PresentacioneController::class);
Route::resource('comprobantes', ComprobanteController::class);
Route::resource('documentos', DocumentoController::class);
Route::resource('personas', PersonaController::class);

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/401', function () {
    return view('pages.401');
});
Route::get('/404', function () {
    return view('pages.404');
});
Route::get('/500', function () {
    return view('pages.500');
});
