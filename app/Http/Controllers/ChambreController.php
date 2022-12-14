<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;
use App\Http\Controllers\HotelController;
use App\Models\Hotel;

class ChambreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $searched = $request->get('searched', '');
        $chambre = Chambre::all();
        return view('agentHebergement.allChambre', compact('chambre'));
        // $chambre = Chambre::all();
        // return view('agentHebergement.allChambre', compact('chambre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('agentHebergement.allChambre');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Chambre::create($input);
        return redirect('allChambre')->with('status', 'Chambre ajouter avec succes');
        // return view('agentHebergement.allChambre');
        // return redirect()->back()->with('status','Une chambre a été ajouté avec succés');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function show(Chambre $chambre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambre $chambre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chambre $chambre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambre  $chambre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambre $chambre, $id)
    {
        // $chambre->delete();
        // return redirect()->back()->with('success','Chambre supprimer avec succes');

        // Chambre::where('id',$id)->delete();
        Chambre::destroy($id);
        return redirect()->back()->with('status','Sucess');
    }
}
