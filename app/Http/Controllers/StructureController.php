<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }
    public function add()
    {
        return view('structures.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|unique:structures',
            'tel' => 'required',
            'domaine_activite' => 'required',
            'localisation' => 'required',
            'positionnement' => 'required',
        ]);

        Structure::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'tel' => $request->tel,
            'domaine_activite' =>$request->domaine_activite,
            'localisation' => $request->localisation,
            'positionnement' => $request->positionnement,
        ]);

        return redirect()->route('add')->with('success','Structure enrégistrer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $structure)
    {
        $structures = Structure::orderby('id','asc')->paginate(10);
        return view('structures.structurelist', compact('structures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function editStructure(Structure $structure)
    {
        return view('structure', compact('structure'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function updateStructure(Request $request, Structure $structure)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'domaine_activite' => 'required',
            'localisation' => 'required',
            'positionnement' => 'required',
        ]);


        $structure->update($request->all());
        return redirect()->route('listStructure');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function deleteStructure(Structure $structure)
    {
        $structure->delete();
        return redirect()->route('listStructure');
    }
}
