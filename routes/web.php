<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\PelerinController;
use App\Http\Controllers\ChambreController;

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

//Auth
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Admin
Route::post('/addUser', [UtilisateurController::class, 'store']);
Route::get('/allUser', [UtilisateurController::class, 'index'])->name('allUser');
Route::get('bord', [HomeController::class, 'test'])->name('bord');

//Agent comptoir
Route::post('/addPel', [PelerinController::class, 'store']);
Route::get('/allPelerin', [PelerinController::class, 'index'])->name('allPelerin');
Route::delete('/destroy/{pelerin}', [PelerinController::class, 'destroy'])->name('pelerin.destroy');
Route::get('/show/{pelerin}', [PelerinController::class, 'show'])->name('show');

//Agent hebergement
Route::post('/addCha', [ChambreController::class, 'store']);
Route::get('/allChambre', [ChambreController::class, 'index']);
Route::get('/delete/{id}', [ChambreController::class, 'destroy'])->name('delete');



//Frontend test
// Route::get('testPel', [HomeController::class, 'testPel']);
Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('register', [HomeController::class, 'register'])->name('register');
// Route::get('login', [HomeController::class, 'login'])->name('login');
// Route::get('addAccount', [HomeController::class, 'addAccount'])->name('addAccount');
Route::get('addPelerin', [HomeController::class, 'addPelerin'])->name('addPelerin');
// Route::get('infosPel', [HomeController::class, 'infosPel'])->name('infosPelerin');
// Route::get('listeCar', [HomeController::class, 'listeCar'])->name('listeCar');
// Route::get('addMedoc', [HomeController::class, 'addMedoc'])->name('addMedoc');
// Route::get('addCourses', [HomeController::class, 'addCourses'])->name('addCourses');
// Route::get('viewPlainte', [HomeController::class, 'viewPlainte'])->name('viewPlainte');
Route::get('addChambre', [HomeController::class, 'addChambre'])->name('addChambre');
