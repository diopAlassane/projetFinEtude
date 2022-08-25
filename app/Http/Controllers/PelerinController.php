<?php

namespace App\Http\Controllers;

use App\Models\Pelerin;
use Illuminate\Http\Request;

class PelerinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelerin = Pelerin::all();
        return view('agentComptoir.allPelerin', compact('pelerin'));
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
    public function store(Request $request)
    {
        $input = $request->all();
        Pelerin::create($input);
        return redirect('allPelerin')->with('status', 'success');
        // return redirect()->back()->with('status','Un pelerin a été ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelerin  $pelerin
     * @return \Illuminate\Http\Response
     */
    public function show(Pelerin $pelerin, $id)
    {
        $pelerin = Pelerin::find($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelerin  $pelerin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelerin $pelerin, $id)
    {
        Pelerin::where('id',$id)->delete();
        return redirect()->back()->with('status','Success');
    }

    public function search(){
        $search_text = $_GET['search'];
        $pelerin = Pelerin::where('nom', 'LIKE', '%'.$search_text.'%')->get();
        return view('agentComptoir.allPelerin', compact('pelerin'));
    }
}
