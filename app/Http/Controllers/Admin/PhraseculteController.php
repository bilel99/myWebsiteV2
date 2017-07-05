<?php

namespace App\Http\Controllers\Admin;

use App\PhCulte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhraseculteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phraseculte = \App\PhCulte::with('langue')->get();
        return view('admin.phraseculte.index', compact('phraseculte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langue = \App\Langue::pluck('label', 'id');
        return view('admin.phraseculte.create', compact('langue'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phraseculte = new \App\PhCulte;
        $phraseculte->langue_id = $request->langue_id;
        $phraseculte->text = $request->text;
        $phraseculte->save();
        return redirect()->route('phraseculte.index')->with('success', 'Enregistrement éffectué avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PhCulte $phraseculte)
    {
        return view('admin.phraseculte.show', compact('phraseculte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PhCulte $phraseculte)
    {
        $langue = \App\Langue::pluck('label', 'id');
        return view('admin.phraseculte.edit', compact('phraseculte', 'langue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhCulte $phraseculte)
    {
        $phraseculte->langue_id = $request->langue_id;
        $phraseculte->text = $request->text;
        $phraseculte->save();
        return redirect()->route('phraseculte.index')->with('success', 'Modification éffectué avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PhCulte $phraseculte)
    {
        $phraseculte->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
               'message' => $message
            ]);
        }
        return redirect()->route('phraseculte.index');
    }
}
