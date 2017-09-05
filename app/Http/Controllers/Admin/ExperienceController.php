<?php

namespace App\Http\Controllers\Admin;

use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = \App\Experience::get();
        return view('admin.experience.index', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experience = new \App\Experience;
        $experience->titre = $request->titre;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin = $request->date_fin;
        $experience->sujet = $request->sujet;
        $experience->description = $request->description;
        $experience->contrat = $request->contrat;
        $experience->save();
        return redirect()->route('experience.index')->with('success', 'Enregistrement éffectué avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $experience->titre = $request->titre;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin = $request->date_fin;
        $experience->sujet = $request->sujet;
        $experience->description = $request->description;
        $experience->contrat = $request->contrat;
        $experience->save();
        return redirect()->route('experience.index')->with('success', 'Modification éffectué avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience, Request $request)
    {
        $experience->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('experience.index');
    }
}
