<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelerinStoreRequest;
use App\Models\Pelerin;
use PDF;
use Illuminate\Http\Request;

class PelerinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $pelerins = Pelerin::search($search)
        ->latest()
        ->get();
        return view('agentComptoir.allPelerin', compact('pelerins', 'search'));
    }

    public function createPDF(Pelerin $pelerin){
        $pelerins = Pelerin::all();

        $pdf = PDF::loadView('agentComptoir.pdf_view', compact('pelerins'));
        return $pdf->download('liste_pelerins.pdf');

      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PelerinStoreRequest $request)
    {
        //$input = $request->all();
        $validated = $request->validated();
        Pelerin::create($validated);
        return redirect('allPelerin')->with('success', 'Pelerin ajouter avec succes');
        // return redirect()->back()->with('status','Un pelerin a été ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelerin  $pelerin
     * @return \Illuminate\Http\Response
     */
    public function show(Pelerin $pelerin)
    {
        //$pelerin = Pelerin::find($id);
        return view('agentComptoir.showPelerin', compact('pelerin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelerin  $pelerin
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelerin $pelerin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelerin  $pelerin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelerin $pelerin)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelerin  $pelerin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelerin $pelerin)
    {
        //Pelerin::where('id',$id)->delete();
        $pelerin->delete();
        return redirect()->back()->with('success','Pelerin supprimer avec succes');
    }

    public function search(){
        $search_text = $_GET['search'];
        $pelerin = Pelerin::where('nom', 'LIKE', '%'.$search_text.'%')->get();
        return view('agentComptoir.allPelerin', compact('pelerin'));
    }
}
