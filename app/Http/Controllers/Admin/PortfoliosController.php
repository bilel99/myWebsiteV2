<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = \App\Portfolio::with('user', 'langue')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::pluck('email', 'id');
        $langue = \App\Langue::pluck('label', 'id');
        return view('admin.portfolios.create', compact('user', 'langue'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolios = new \App\Portfolio;
        $portfolios->user_id = $request->user_id;
        $portfolios->langue_id = $request->langue_id;
        $portfolios->titre = $request->titre;
        $portfolios->description = $request->description;
        $portfolios->role = $request->role;
        $portfolios->webdesign = $request->webdesign;
        $portfolios->client = $request->client;
        $portfolios->date_debut = $request->date_debut;
        $portfolios->date_fin = $request->date_fin;
        // Upload Image
        if ($request->image1) {
            $destinationPath = public_path() . '/_upload/portfolios/';
            $fileName = 'portfolios_' . strtotime('now') . '.' . $request->image1->getClientOriginalExtension();
            $request->image1->move($destinationPath, $fileName);
            $portfolios['image1'] = '_upload/portfolios/' . $fileName;
        } else {
            $portfolios->image1 = '/front/img/default_portfolios.jpeg';
        }

        if ($request->image2) {
            $destinationPath = public_path() . '/_upload/portfolios/';
            $fileName = 'portfolios_' . strtotime('now') . '.' . $request->image2->getClientOriginalExtension();
            $request->image2->move($destinationPath, $fileName);
            $portfolios['image2'] = '_upload/portfolios/' . $fileName;
        } else {
            $portfolios->image2 = '/front/img/default_portfolios.jpeg';
        }
        $portfolios->save();
        return redirect()->route('portfolios.index')->with('success', 'Enregistrement éffectué avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $user = \App\User::pluck('email', 'id');
        $langue = \App\Langue::pluck('label', 'id');
        return view('admin.portfolios.edit', compact('portfolio', 'user', 'langue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->user_id = $request->user_id;
        $portfolio->langue_id = $request->langue_id;
        $portfolio->titre = $request->titre;
        $portfolio->description = $request->description;
        $portfolio->role = $request->role;
        $portfolio->webdesign = $request->webdesign;
        $portfolio->client = $request->client;
        $portfolio->date_debut = $request->date_debut;
        $portfolio->date_fin = $request->date_fin;
        // Upload Image
        if ($request->image1) {
            $destinationPath = public_path() . '/_upload/portfolios/';
            $fileName = 'portfolios_' . strtotime('now') . '.' . $request->image1->getClientOriginalExtension();
            $request->image1->move($destinationPath, $fileName);
            $portfolio['image1'] = '_upload/portfolios/' . $fileName;
        } else {
            $portfolio->image1 = '/front/img/default_portfolios.jpeg';
        }

        if ($request->image2) {
            $destinationPath = public_path() . '/_upload/portfolios/';
            $fileName = 'portfolios_' . strtotime('now') . '.' . $request->image2->getClientOriginalExtension();
            $request->image2->move($destinationPath, $fileName);
            $portfolio['image2'] = '_upload/portfolios/' . $fileName;
        } else {
            $portfolio->image2 = '/front/img/default_portfolios.jpeg';
        }
        $portfolio->save();
        return redirect()->route('portfolios.index')->with('success', 'Modification éffectué avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Portfolio $portfolio)
    {
        $portfolio->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
              'message' => $message
            ]);
        }
        return redirect()->route('portfolios.index');
    }
}
