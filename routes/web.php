<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\PelerinController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\PlainteController;


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

// admin Auth 'OK'
Route::get('allAccount', [CustomAuthController::class, 'allAccount'])->name('allAccount');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Admin 'OK'
Route::post('/addUser', [UtilisateurController::class, 'store']);
Route::get('/allUser', [UtilisateurController::class, 'index'])->name('allUser');
Route::get('bord', [HomeController::class, 'test'])->name('bord');

//Agent comptoir 'OK'
Route::post('/addPel', [PelerinController::class, 'store']);
Route::get('/allPelerin', [PelerinController::class, 'index'])->name('allPelerin');
Route::delete('/destroy/{pelerin}', [PelerinController::class, 'destroy'])->name('pelerin.destroy');
Route::get('/show/{pelerin}', [PelerinController::class, 'show'])->name('show');
Route::get('/PDF', [PelerinController::class, 'createPDF'])->name('agentComptoir.pdf_view');

//Agent hebergement 'OK'
Route::post('/addCha', [ChambreController::class, 'store']);
Route::get('/allChambre', [ChambreController::class, 'index'])->name('allChambre');
Route::get('/delete/{id}', [ChambreController::class, 'destroy'])->name('chambre.delete');
// Route::delete('/destroy/{chambre}', [ChambreController::class, 'destroy'])->name('chambre.destroy');
Route::get('addHotel', [HomeController::class, 'addHotel'])->name('addHotel');
Route::get('/allHotel', [HotelController::class, 'index'])->name('allHotel');
Route::post('addHotel', [HotelController::class, 'store'])->name('addHotel');
Route::get('pelerinHeb', [HomeController::class, 'pelerinHeb'])->name('pelerinHeb');
// Route::get('/hotelList', [HotelController::class, 'hotelList'])->name('hotelList');

//Agent transport 'NON OK ' attribuer des places
Route::post('/addCar', [CarController::class, 'store']);
Route::get('/allCars', [CarController::class, 'index'])->name('allCars');
Route::get('addCarr', [HomeController::class, 'addCar'])->name('addCar');
Route::get('listPelerin', [HomeController::class, 'listPelerinCar'])->name('listPelerin');

//Medecin 'OK'
Route::post('/addconsultation', [ConsultationController::class, 'store']);
Route::get('/allConsultation', [ConsultationController::class, 'index'])->name('allConsultation');
Route::delete('/destroy/{consultation}', [ConsultationController::class, 'destroy'])->name('consultation.destroy');
Route::get('/downloadPDF/{consultation}', [ConsultationController::class, 'downloadPDF'])->name('consultation.downloadPDF');
Route::get('/pelerinCons', [ConsultationController::class, 'pelerinCons'])->name('pelerinCons');

// Formateur 'OK'
Route::get('/allCour', [CoursController::class, 'index'])->name('allCour');
Route::post('addCour', [CoursController::class, 'store'])->name('addCour');
Route::get('addCourr', [HomeController::class, 'addCour'])->name('addCour');
Route::get('/pelerinFormation', [CoursController::class, 'pelerinFormation'])->name('pelerinFormation');

// agent permanence 'OK'
Route::get('pelerinPermanence', [HomeController::class, 'pelerinPermanence'])->name('pelerinPermanence');
Route::get('plainte', [HomeController::class, 'plainte'])->name('plainte');
Route::get('bordPermanence', [HomeController::class, 'bordPermanence'])->name('bordPermanence');

// pelerin 'OK'
Route::get('coursPelerin', [HomeController::class, 'coursPelerin'])->name('coursPelerin');
Route::post('addPlainte', [PlainteController::class, 'store'])->name('addPlainte');
Route::get('plainteForm', [PlainteController::class, 'index'])->name('plainteForm');
Route::get('infosPelerin', [HomeController::class, 'infosPelerin'])->name('infosPelerin');


//Frontend test for HomeController
// Route::get('testPel', [HomeController::class, 'testPel']);
Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('register', [HomeController::class, 'register'])->name('register');
// Route::get('login', [HomeController::class, 'login'])->name('login');
// Route::get('addAccount', [HomeController::class, 'addAccount'])->name('addAccount');
Route::get('addPelerin', [HomeController::class, 'addPelerin'])->name('addPelerin');
// Route::get('infosPel', [HomeController::class, 'infosPel'])->name('infosPelerin');
// Route::get('listeCar', [HomeController::class, 'listeCar'])->name('listeCar');
Route::get('addMedoc', [HomeController::class, 'addMedoc'])->name('addMedoc');
Route::get('addCourses', [HomeController::class, 'addCourses'])->name('addCourses');
// Route::get('viewPlainte', [HomeController::class, 'viewPlainte'])->name('viewPlainte');
Route::get('addChambre', [HomeController::class, 'addChambre'])->name('addChambre');
