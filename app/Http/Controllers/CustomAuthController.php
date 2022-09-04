<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UtilisateurController;
use App\Models\Utilisateur;

class CustomAuthController extends Controller
{
    // public function verifAuth(){
    //     $role = Auth::user()->type;

    //     if($role === "Administrateur"){
    //         return view('admin.index');
    //     }else if($role === "Agent_Permanence"){

    //     }
    //     else if($role === "Agent_Hebergement"){

    //     }
    //     else if($role === "Agent_Transport"){

    //     }
    //     else if($role === "Agent_Restaurant"){

    //     }else{
    //         return view('dashboard');
    //     }
    // }

    public function allAccount(){
        $user = User::all();
        return view('admin.allAccount', compact('user'));
    }

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'identifiant' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('identifiant', 'password');
        if (Auth::attempt($credentials)) {

            $role = Auth::user()->identifiant;
            // $role = Auth::user()->type_user; //Redirection aprés authentification

                if($role === "tsika"){
                    return view('admin.index');
                }else if($role === "joop"){
                    return view('agentComptoir.addPelerin');
                }else{
                    return view('auth.login');
                }


            // return redirect()->intended('allPelerin')
            //             ->withSuccess('Bienvenu');
        }

        return redirect("login")->with('status','Identifiant ou mot de passe invalide');
    }

    public function registration()
    {
        $utilisateur = Utilisateur::all();
        return view('auth.registration', compact('utilisateur'));
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'identifiant' => 'required|unique:users',
            'password' => 'required|min:6',
            'type_user' => 'nullable',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("allAccount")->withSuccess('Compte créée');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'identifiant' => $data['identifiant'],
        'password' => Hash::make($data['password']),
        'type_user' => $data['type_user']
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
