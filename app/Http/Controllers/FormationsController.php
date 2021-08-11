<?php

namespace App\Http\Controllers;

use App\Models\Formations;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formations::all();
        return view("back.pages.formations.formations", compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.formations.addFormation");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Formations;
        $store->nom = $request->nom;
        $store->description = $request->description;
        $store->save();
        return redirect("/backend/formation");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show(Formations $formations, $id)
    {
        $formation = $formations::find($id);
        return view('back.pages.formations.formation', compact("formation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function edit(Formations $formations, $id)
    {
        $formation = $formations::find($id);
        return view('back.pages.formations.editFormation', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formations $formations, $id)
    {
        $formation = $formations::find($id);
        $formation->nom = $request->nom;
        $formation->description = $request->description;
        $formation->save();
        return redirect('/backend/formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formations $formations, $id)
    {
        $formation = $formations::find($id);
        $formation->delete();
        return redirect('/backend/formation');
    }
}
