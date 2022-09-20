<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Member;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use PhpParser\Node\Stmt\Foreach_;

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
    public function detail(Request $request, Structure $structure)

    {
        $i='';
        $id = Crypt::decrypt($request->get('id'));
        $members = Member::orderBy('id','desc')->paginate(10);

        $structure_membres = Member::where('structure_id',$id)->paginate(10);
        $structure_membres->appends(['id'=>$id])->render();
        $structures = Structure::where('id',$id)->get();
       
        



        /* $structure = Structure::where('id',$id)->get();

        foreach ($structure as $strure) {
            $active = Activite::all();

            foreach ($active as $active) {
                $structDecode = json_decode($active->structure_id);
                foreach ($structDecode as $decod) {
                   $nomb = Activite::where('structure_id',$decod)->get();
                   dd($nomb);
                }
            }

        }
 */

        $i = 0;
        $num = '';
        $act = Activite::all();
        $activites = [];
        foreach($act as $activity){
            $sIdDecode = json_decode($activity->structure_id);

            $st = [];
            foreach ($sIdDecode as $sId) {
                $getStructure = Structure::where(["id"=>$sId])->get('id');

                if($getStructure->count()>0){
                    $data = [];
                    foreach($getStructure as $sName){
                        $name = $sName['id'];
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
                "nom" => $activity->nom,
                "date_event"=>$activity->date_event,
                "lieu" => $activity->lieu,
                "structures" => $r,
                "visuel" =>json_decode($activity->visuel)
            ];

            array_push($activites, $msg);

        }
        $nbrActivite = [];
        foreach ($activites as $act) {
            foreach ($act['structures'] as $struc) {
                if ($struc == $id) {
                    array_push($nbrActivite , $act);
               }
            }
        }
        





        return view('details.index', compact("structure_membres","i",'num',"structures","members",'nbrActivite'));
    }
    public function detailActivity(Request $request,Activite $activite )
    {
        $i='';
        $id = Crypt::decrypt($request->get('id'));
        $structure_membres = Member::where('structure_id',$id)->paginate(10);
       
        $structures = Structure::where('id',$id)->get();
       
       
    
        $num = ''; 
        $i = 0;
        $act = Activite::all();
        $activites = [];
        foreach($act as $activity){
            $sIdDecode = json_decode($activity->structure_id);

            $st = [];
            foreach ($sIdDecode as $sId) {
                $getStructure = Structure::where(["id"=>$sId])->get('id');

                if($getStructure->count()>0){
                    $data = [];
                    foreach($getStructure as $sName){
                        $name = $sName['id'];
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
               
                "nom" => $activity->nom,
                "date_event"=>$activity->date_event,
                "lieu" => $activity->lieu,
                "structures" => $r,
                "visuel" =>json_decode($activity->visuel),
                "description" =>$activity->description
            ];

            array_push($activites, $msg);

        }
        $activity_info = [];
        foreach ($activites as $act) {
            foreach ($act['structures'] as $struc) {
                if ($struc == $id) {
                    array_push($activity_info , $act);
               }
            }
        }
        
        
        return view('details.activity', compact("activity_info","num","structure_membres","structures"));
    }
    public function visuel(Request $request)
    
    {
        
        $i = 0;
        $id = Crypt::decrypt($request->get('id'));
        $act = Activite::all();
        $structures = Structure::where('id',$id)->get();
        $activites = [];
        foreach($act as $activity){
            $sIdDecode = json_decode($activity->structure_id);

            $st = [];
            foreach ($sIdDecode as $sId) {
                $getStructure = Structure::where(["id"=>$sId])->get('id');

                if($getStructure->count()>0){
                    $data = [];
                    foreach($getStructure as $sName){
                        $name = $sName['id'];
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
               
                "nom" => $activity->nom,
                "date_event"=>$activity->date_event,
                "lieu" => $activity->lieu,
                "structures" => $r,
                "visuel" =>json_decode($activity->visuel),
                "description" =>$activity->description
            ];

            array_push($activites, $msg);

        }
        $activity_info = [];
        foreach ($activites as $act) {
            foreach ($act['structures'] as $struc) {
                if ($struc == $id) {
                    array_push($activity_info , $act);
               }
            }
        }
        return view('admin.activite.showVisuel',compact("activity_info","i","structures"));
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
        $result = $request->validate([
            'nom' => 'required|unique:structures',
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
            'domaine_activite' => $request->domaine_activite,
            'localisation' => $request->localisation,
            'positionnement' => json_encode($request->positionnement),
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
        $structures = Structure::orderby('id', 'asc')->paginate(10);
        foreach($structures as $structure){
            $position = json_decode($structure->positionnement);
            
        }
        return view('structures.structurelist', compact('structures','position'));
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
