<?php

namespace App\Http\Controllers\Admin;

use App\Temoignage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temoignage = \App\Temoignage::with('langue')->get();
        return view('admin.temoignage.index', compact('temoignage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langue = \App\Langue::pluck('label', 'id');
        return view('admin.temoignage.create', compact('langue'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temoignage = new \App\Temoignage;
        $temoignage->langue_id = $request->langue_id;
        $temoignage->temoignage = $request->temoignage;
        $temoignage->save();
        return redirect()->route('temoignage.index')->with('success', 'Enregistrement éffectué avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        return view('admin.temoignage.show', compact('temoignage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Temoignage $temoignage)
    {
        $langue = \App\Langue::pluck('label', 'id');
        return view('admin.temoignage.edit', compact('temoignage', 'langue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temoignage $temoignage)
    {
        $temoignage->langue_id = $request->langue_id;
        $temoignage->temoignage = $request->temoignage;
        $temoignage->save();
        return redirect()->route('temoignage.index')->with('success', 'Modification éffectué avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Temoignage $temoignage)
    {
        $temoignage->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
               'message' => $message
            ]);
        }
        return redirect()->route('temoignage.index');
    }
}
