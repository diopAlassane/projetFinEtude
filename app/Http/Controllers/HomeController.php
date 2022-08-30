<?php

namespace App\Http\Controllers;

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
        return view('medecin.addMedoc');
    }

    public function addCourses(){
        return view('formateur.addCourses');
    }

    public function viewPlainte(){
        return view('agentPermanence.viewPlainte');
    }

    public function addChambre(){
        return view('agentHebergement.addChambre');
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
}
