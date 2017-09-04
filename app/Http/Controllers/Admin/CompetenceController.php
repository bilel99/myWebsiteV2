<?php

namespace App\Http\Controllers\Admin;

use App\Competence;
use App\GroupCompetence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competence = \App\Competence::with('group')->get();
        $group = \App\GroupCompetence::get();
        return view('admin.competence.index', compact('competence', 'group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group = \App\GroupCompetence::pluck('nom_groupe', 'id');
        return view('admin.competence.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competence = new \App\Competence;
        $competence->group_id = $request->group_id;
        $competence->titre = $request->titre;
        $competence->savoir = $request->savoir;
        $competence->niveau = $request->niveau;
        $competence->save();
        return redirect()->route('competence.index')->with('success', 'Enregistrement éffectué avec succès !');
    }

    public function storeGroup(Request $request)
    {
        // Create Group Competence
        $group = new \App\GroupCompetence;
        $group->nom_groupe = $request->nom_groupe;
        $group->status = $request->status;
        $group->save();
        return redirect()->route('competence.index')->with('success', 'Enregistrement éffectué avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Competence $competence)
    {
        $group = \App\GroupCompetence::pluck('nom_groupe', 'id');
        return view('admin.competence.edit', compact('competence', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competence $competence)
    {
        $competence->group_id = $request->group_id;
        $competence->titre = $request->titre;
        $competence->savoir = $request->savoir;
        $competence->niveau = $request->niveau;
        $competence->save();
        return redirect()->route('competence.index')->with('success', 'Modification éffectué avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Competence $competence)
    {
        $competence->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
            return redirect()->route('competence.index');
        }
    }

    /**
     * @param Request $request
     * @param GroupCompetence $groupCompetence
     */
    public function destroyGroup(Request $request, GroupCompetence $destroyGroup)
    {
        $destroyGroup->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
            return redirect()->route('competence.index');
        }
    }
}
