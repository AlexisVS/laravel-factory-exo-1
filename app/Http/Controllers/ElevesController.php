<?php

namespace App\Http\Controllers;

use App\Models\Eleves;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = Eleves::all();
        return view("back.pages.eleves.eleves", compact("eleves"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.eleves.addBatiment");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Eleves;
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->etat = $request->etat;
        $store->save();
        return redirect("/backend/eleve");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show(Eleves $eleves, $id)
    {
        $eleve = $eleves::find($id);
        return view('back.pages.eleves.eleve', compact("eleve"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleves $eleves, $id)
    {
        $eleve = $eleves::find($id);
        return view('back.pages.eleves.editEleve', compact('eleve'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleves $eleves, $id)
    {
        $eleve = $eleves::find($id);
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->age = $request->age;
        $eleve->etat = $request->etat;
        $eleve->save();
        return redirect('/backend/eleve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eleves $eleves, $id)
    {
        $eleve = $eleves::find($id);
        $eleve->delete();
        return redirect('/backend/eleve');
    }
}
