<?php

namespace App\Http\Controllers;

use App\Models\TypeFormations;
use Illuminate\Http\Request;

class TypeFormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeFormations = TypeFormations::all();
        return view("back.pages.typeFormations.typeFormations", compact("typeFormations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.typeFormations.addTypeFormation");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new TypeFormations;
        $store->nom = $request->nom;
        $store->save();
        return redirect("/backend/type-formation");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeFormations  $typeFormations
     * @return \Illuminate\Http\Response
     */
    public function show(TypeFormations $typeFormations, $id)
    {
        $typeFormation = $typeFormations::find($id);
        return view('back.pages.typeFormations.typeFormation', compact("typeFormation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeFormations  $typeFormations
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeFormations $typeFormations, $id)
    {
        $typeFormation = $typeFormations::find($id);
        return view('back.pages.typeFormations.editTypeFormation', compact('typeFormation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeFormations  $typeFormations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeFormations $typeFormations, $id)
    {
        $typeFormation = $typeFormations::find($id);
        $typeFormation->nom = $request->nom;
        $typeFormation->save();
        return redirect('/backend/type-formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeFormations  $typeFormations
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeFormations $typeFormations, $id)
    {
        $typeFormation = $typeFormations::find($id);
        $typeFormation->delete();
        return redirect('/backend/type-formation');
    }
}
