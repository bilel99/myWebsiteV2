<?php

namespace App\Http\Controllers\Admin;

use App\Langue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LangueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langue = \App\Langue::get();
        return view('admin.langue.index', compact('langue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Langue $langue)
    {
        return view('admin.langue.edit', compact('langue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Langue $langue)
    {
        $langue->label = $request->label;
        $langue->code = $request->code;
        $langue->save();
        return redirect()->route('langue.index')->with('success', 'modification éffectué avec succès!');
    }
}
