<?php


use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionsLegalesController;

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

// Les vues associeés sont dans /resources/views :
// accueil.blade.php, cours.blade.php, tarifs.blade.php,etc ...
Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/cours', [CoursController::class, 'index'])->name('cours');
Route::get('/tarifs', [TarifsController::class, 'index'])->name('tarifs');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions-legales');

//Route::get('/', function () {
//   return view('welcome');
//});
