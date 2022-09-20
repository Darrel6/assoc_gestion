<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Structure;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $act = Activite::all();
        $activites = [];
        foreach($act as $activity){
            $sIdDecode = json_decode($activity->structure_id);

            $st = [];
            foreach ($sIdDecode as $sId) {
                $getStructure = Structure::where(["id"=>$sId])->get('nom');
                if($getStructure->count()>0){
                    $data = [];
                    foreach($getStructure as $sName){
                        $name = $sName['nom'];
                        if($name){
                            array_push($data, $name);
                        }
                    }
                    array_push($st,$data);
                }
            }

            $r = [];
            if($st){
                foreach($st as $i){
                    array_push($r, $i[0]);
                }
            }


            $msg = [
                "idact"=>$activity->id,
                "nom" => $activity->nom,
                "date_event"=>$activity->date_event,
                "lieu" => $activity->lieu,
                "structures" => $r,
                "visuel" =>json_decode($activity->visuel),
                "description" => $activity->description,
            ];

            array_push($activites, $msg);

        }
        $structures = Structure::all();
       // dd($activites);


        return view('admin.activite.index', compact('activites', 'i','structures'))->with('success','Activité ajoutée avec succès');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $structures = Structure::all();
        return view('admin.activite.create', compact('structures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nom' => 'required',
            'date_event' => 'required',
            'lieu' => 'required',
            'visuel' => 'required',
            'structure_id' => 'required',
            'description' => 'required',
        ]);


        $activite = new Activite();
        $activite->nom =  $request->nom;
        $activite->date_event =  $request->date_event;
        $activite->lieu =  $request->lieu;

        if ($request->visuel) {
            foreach ($request->file('visuel')  as $file) {
                $name = time() . '.' . $file->getClientOriginalName();
                $file->move('storage/activite/', $name);
                $data[] = '/storage/activite/' . $name;
                $activite->visuel = json_encode($data);
            }
        }
        if ($request->structure_id) {
            foreach ($request->structure_id as  $structure) {
                $donne[] = $structure;
                $activite->structure_id = json_encode($donne);
            }
        }
        $activite->description =  $request->description;
        $activite->save();

        return redirect()->route('activite.index')->with('success', 'Activité enrégistrée avec suucès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activite $activite)
    {
        $this->validate($request, [
            'nom' => 'required',
            'date_event' => 'required',
            'lieu' => 'required',
            'visuel' ,
            'structure_id' => 'required',
            'description' => 'required',
        ]);

        $activite->update($request->all());
        return redirect()->route('activite.index')->with('success','Information mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        if ($activite) {
          $activite->delete();
          return redirect()->route('activite.index')->with('success', 'Activité supprimée avec suucès');

        }
    }
}
