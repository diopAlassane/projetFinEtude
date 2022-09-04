<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PelerinController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\PlainteController;
use App\Models\Cours;
use App\Models\Hotel;
use App\Models\Pelerin;
use App\Models\Plainte;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){
        return view('admin.index');
    }

    public function register(){
        return view('admin.register');
    }

    public function login(){
        return view('admin.login');
    }

    public function addAccount(){
        return view('admin.addAccount');
    }

    public function addPelerin(){
        return view('agentComptoir.addPelerin');
    }

    public function infosPel(){
        return view('pelerin.infos');
    }

    public function listeCar(){
        return view('agentTransport.listeCar');
    }

    public function addMedoc(){

        $pelerins = Pelerin::all();
        return view('medecin.addMedoc', compact('pelerins'));
    }

    public function pelerinHeb(){

        $pelerins = Pelerin::all();
        return view('agentHebergement.allPel', compact('pelerins'));
    }

    public function addCourses(){
        return view('formateur.addCourses');
    }

    public function viewPlainte(){
        return view('agentPermanence.viewPlainte');
    }

    public function addChambre(){
        $pelerins = Pelerin::all();
        $hotel = Hotel::all();
        return view('agentHebergement.addChambre', compact('hotel', 'pelerins'));
    }

    public function test(){
        return view('admin.bord');
    }

    public function addCar(){
        return view(('agentTransport.addCar'));
    }

    public function addCour(){
        return view('formateur.addCourses');
    }

    public function addHotel(){
        return view('agentHebergement.addHotel');
    }

    public function testPel(){
        return view('agentComptoir.allPelerin');
    }

    public function toutHotel(){
        return view('agentHebergement.allHotel');
    }

    public function toutChambre(){
        return view('agentHebergement.allChambre');
    }

    public function pelerinPermanence(){
        $pelerins = Pelerin::all();
        return view('agentPermanence.pelerin', compact('pelerins'));
    }

    public function plainte(){
        $plainte = Plainte::all();
        return view('agentPermanence.viewPlainte', compact('plainte'));
    }

    public function coursPelerin(){
        $cours = Cours::all();
        return view('pelerin.cours', compact('cours'));
    }

    public function infosPelerin($id){
        $infos = Pelerin::find($id);
        return view('pelerin.infos', compact('infos'));
    }
}
