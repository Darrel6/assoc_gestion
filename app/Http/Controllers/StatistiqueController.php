<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Member;
use App\Models\Structure;
use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function statistique(){
        $structures = Structure::all();
        $activites = Activite::all();
        $membres = Member::all();
       // dd($structures);
        return view('dashboard.index',compact('structures','activites','membres'));
    }
}
