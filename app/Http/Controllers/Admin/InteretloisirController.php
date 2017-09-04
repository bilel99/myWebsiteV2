<?php

namespace App\Http\Controllers\Admin;

use App\InteretLoisir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InteretLoisirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interet = \App\InteretLoisir::get();
        return view('admin.InteretLoisir.index', compact('interet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.InteretLoisir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interet = new InteretLoisir;
        $interet->titre = $request->titre;
        $interet->loisir = $request->loisir;
        $interet->save();
        return redirect()->route('InteretLoisir.index')->with('success', 'Votre enregistrement est terminer !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InteretLoisir $InteretLoisir)
    {
        return view('admin.interetLoisir.edit', compact('InteretLoisir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InteretLoisir $InteretLoisir)
    {
        $InteretLoisir->titre = $request->titre;
        $InteretLoisir->loisir = $request->loisir;
        $InteretLoisir->save();
        return redirect()->route('InteretLoisir.index')->with('success', 'Modification éffectué avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, InteretLoisir $InteretLoisir)
    {
        $InteretLoisir->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
               'message' => $message
            ]);
        }

        return redirect()->route('InteretLoisir.index');
    }
}
