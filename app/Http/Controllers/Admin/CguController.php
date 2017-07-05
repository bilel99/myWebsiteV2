<?php

namespace App\Http\Controllers\Admin;

use App\Cgu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cgu = \App\Cgu::with('langue')->get();
        return view('admin.cgu.index', compact('cgu'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cgu $cgu)
    {
        return view('admin.cgu.show', compact('cgu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cgu $cgu)
    {
        return view('admin.cgu.edit', compact('cgu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cgu $cgu)
    {
        $cgu->title = $request->title;
        $cgu->content = $request->content;
        $cgu->save();
        return redirect()->route('cgu.index')->with('success', 'Modification éffectué avec succès!');
    }
}
