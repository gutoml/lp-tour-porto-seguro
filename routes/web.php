<?php

use App\Http\Controllers\{
    IndexController,
    PostsController,
    ProfileController,
};
use App\Models\Passeio;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/passeio/{local}', [IndexController::class, 'passeio']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/passeios', PostsController::class)->middleware(['auth']);

Route::post('/passeios/deleteImage/{id}/{idPasseio}', [PostsController::class, 'deleteImage'])->name('passeios.deleteImage')->middleware(['auth']);

Route::prefix('profile')->name('profile.')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index')->middleware(['auth']);
    Route::post('/update', [ProfileController::class, 'update'])->name('update')->middleware(['auth']);
});

Route::get('/politicas-de-privacidade', function(){
    $passeios = Passeio::all();

    return view('politicas-de-privacidade', compact('passeios'));
})->name('politicas.de.privacidade');

Route::get('/termos-de-uso', function(){
    $passeios = Passeio::all();

    return view('termos-de-uso', compact('passeios'));
})->name('termos.de.uso');

// Route::get('/sobre-nos', function(){
//     $passeios = Passeio::all();

//     return view('sobre-nos', compact('passeios'));
// })->name('sobre.nos');

require __DIR__.'/auth.php';
