<?php

namespace App\Http\Controllers;

use App\Models\Batiments;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batiments = Batiments::all();
        return view("back.pages.batiments.batiments", compact("batiments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.batiments.addBatiment");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Batiments;
        $store->nom = $request->nom;
        $store->description = $request->description;
        $store->save();
        return redirect("/backend/batiment");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function show(Batiments $batiments, $id)
    {
        $batiment = $batiments::find($id);
        return view('back.pages.batiments.batiment', compact("batiment"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function edit(Batiments $batiments, $id)
    {
        $batiment = $batiments::find($id);
        return view('back.pages.batiments.editBatiment', compact('batiment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batiments $batiments, $id)
    {
        $batiment = $batiments::find($id);
        $batiment->nom = $request->nom;
        $batiment->description = $request->description;
        $batiment->save();
        return redirect('/backend/batiment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batiments $batiments, $id)
    {
        $batiment = $batiments::find($id);
        $batiment->delete();
        return redirect('/backend/batiment');
    }
}
