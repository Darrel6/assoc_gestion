<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Structure;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i='';
        $members = Member::orderBy('id','desc')->paginate();
        return view('admin.members.index',compact('members','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Structure::all();

        return view('admin.members.create',compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' =>'required',
            'email' => 'required|unique:members|string',
            'telephone' => 'required',
            'fonction' => 'required',
            'structure_id' => 'required',
        ]);

        Member::create([
            'nom'=> $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'fonction' => $request->fonction,
            'structure_id' => $request->structure_id
        ]);

        return redirect()->route('members.index')->with('success','Membres ajouter avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $this->validate($request,[
            'nom' =>'required',
            'email' => 'required|string',
            'telephone' => 'required',
            'fonction' => 'required',
            'structure_id' => 'required',
        ]);

        $member->update($request->all());
        return redirect()->route('members.index')->with('success','Information mise à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        if ($member) {
           $member->delete();
           return redirect()->route('members.index')->with('success','Membres supprimé avec succès');

        }
    }
}
