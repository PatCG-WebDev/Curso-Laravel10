<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', HomeController::class)->name('home'); /* Página principal */

/* Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index'); */ /* al poner "->name('cursos.index')" le estamos dando un nombre específico a la ruta para poder utilizarla después, por ejemplo, cuando creamos un enlace para ir a una página de nuestra aplicación */

/* Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */ /* ruta elimina registros */ 

Route::resource('cursos', CursoController::class); /* con esta línea englobamos automáticamente las 7 líneas anteriores, y dejamos el código más limpio */
Route::view('nosotros', 'nosotros')->name('nosotros'); /* 1º parametro la URL, 2º nombre de la vista, que va a buscar en la carpeta view*/