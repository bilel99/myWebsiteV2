<?php

namespace App\Http\Controllers\Admin;

use App\CompetenceLinguistique;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompetenceLuiguistiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competenceLuiguistique = \App\CompetenceLinguistique::get();
        return view('admin.competenceLuiguistique.index', compact('competenceLuiguistique'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competenceLuiguistique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competenceLangue = new \App\CompetenceLinguistique;
        $competenceLangue->titre = $request->titre;
        $competenceLangue->langue = $request->langue;
        $competenceLangue->niveau = $request->niveau;
        $competenceLangue->save();
        return redirect()->route('competenceluiguistique.index')->with('success', 'Enregistrement éffectué avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CompetenceLinguistique $competenceluiguistique)
    {
        return view('admin.competenceLuiguistique.edit', compact('competenceluiguistique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompetenceLinguistique $competenceluiguistique)
    {
        $competenceluiguistique->titre = $request->titre;
        $competenceluiguistique->langue = $request->langue;
        $competenceluiguistique->niveau = $request->niveau;
        $competenceluiguistique->save();
        return redirect()->route('competenceluiguistique.index')->with('success', 'Modification éffectué avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompetenceLinguistique $competenceluiguistique, Request $request)
    {
        $competenceluiguistique->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('competenceluiguistique.index');
    }
}
