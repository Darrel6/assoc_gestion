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
        $i = '';
        $act = Activite::all();
        $activites = [];
        $structure =[];
        foreach($act as $activity){
            $sId = $activity->structure_id;
            $sIdDecode = json_decode($sId);

            $allActivities = [];
                foreach ($sIdDecode as $id) {
                    $getStructure = Structure::where(["id"=>$id])->get();
                    array_push($structure,$getStructure);

                }

                if($structure){
                    $msg = [
                        "nameStructure"=>$structure,
                        "idact"=>$act[0]->id,
                        "date"=>$act[0]->date_event,
                        "activity"=> $act[0]->nom,
                        "visuel"=>$act[0]->visuel,
                        "lieu" =>$act[0]->lieu,
                        "description" => $act[0]->description
                    ];
                    array_push($allActivities, $msg);
                }

            $activites = $allActivities;

        }


        return view('admin.activite.index', compact('activites', 'i'))->with('success','Activité ajoutée avec succès');
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
        //
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
        //
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

        }
    }
}
