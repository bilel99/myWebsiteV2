<?php

namespace App\Http\Controllers\Admin;

use App\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation = \App\Formation::get();
        return view('admin.formation.index', compact('formation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formation = new \App\Formation;
        $formation->titre = $request->titre;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->sujet = $request->sujet;
        $formation->ecole = $request->ecole;
        $formation->save();
        return redirect()->route('formation.index')->with('success', 'Enregistrement éffectué avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        return view('admin.formation.edit', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        $formation->titre = $request->titre;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->sujet = $request->sujet;
        $formation->ecole = $request->ecole;
        $formation->save();
        return redirect()->route('formation.index')->with('success', 'Modification éffectué avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation, Request $request)
    {
        $formation->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('formation.index');
    }
}
