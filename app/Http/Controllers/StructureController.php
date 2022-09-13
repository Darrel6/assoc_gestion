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
        return view('components.add');
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
            'nom_struct' => 'required',
            'email_struct' => 'required',
            'tel_struct' => 'required',
            'domaine_activite' => 'required',
            'location' => 'required',
            'positionnement' => 'required',
        ]);
        
        Structure::create([
            'nom_struct' => $request->nom_struct,
            'email_struct' => $request->email_struct,
            'tel_struct' => $request->tel_struct,
            'domaine_activite' =>$request->domaine_activite,
            'location' => $request->location,
            'positionnement' => $request->positionnement,
        ]);
      
        return redirect()->route('add');
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
        return view('components.structurelist', compact('structures'));
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
        //
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
