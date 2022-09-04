<?php

namespace App\Http\Controllers;

use App\Models\Plainte;
use Illuminate\Http\Request;

class PlainteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $plainte = Plainte::all();
        return view('pelerin.depotPlainte');
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
        Plainte::create($input);
        return redirect()->back()->with('status', 'Votre plainte a été envoyé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function show(Plainte $plainte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function edit(Plainte $plainte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plainte $plainte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plainte  $plainte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plainte $plainte)
    {
        //
    }
}
