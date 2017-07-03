<?php

namespace App\Http\Controllers\admin;

use App\Moi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePage = \App\Moi::with('langue', 'user')->get();
        return view('admin.homePage.index', compact('homePage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $homePage = \App\Moi::with('langue', 'user')->get();
        $langue = \App\Langue::pluck('label', 'id');
        $user = \App\User::pluck('email', 'id');
        return view('admin.homePage.create', compact('homePage', 'langue', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homePage = new \App\Moi;
        $homePage->user_id = $request->user_id;
        $homePage->langue_id = $request->langue_id;
        $homePage->titre = $request->titre;
        $homePage->description = $request->description;
        $homePage->apropos = $request->apropos;
        // Upload Image Home Page
        if ($request->image) {
            $destinationPath = public_path() . '/_upload/homePage/';
            $fileName = 'homePage_' . strtotime('now') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move($destinationPath, $fileName);
            $homePage['image'] = '_upload/homePage/' . $fileName;
        } else {
            $homePage->image = '/front/img/default.jpg';
        }
        $homePage->save();
        return redirect()->route('homePage.index')->with('success', 'Votre enregistrement est un succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Moi $homePage)
    {
        return view('admin.homePage.show', compact('homePage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Moi $homePage)
    {
        $langue = \App\Langue::pluck('label', 'id');
        $user = \App\User::pluck('email', 'id');
        return view('admin.homePage.edit', compact('homePage', 'langue', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moi $homePage)
    {
        $homePage->user_id = $request->user_id;
        $homePage->langue_id = $request->langue_id;
        $homePage->titre = $request->titre;
        $homePage->description = $request->description;
        $homePage->apropos = $request->apropos;
        // Upload Image Home Page
        if ($request->image) {
            $destinationPath = public_path() . '/_upload/homePage/';
            $fileName = 'homePage_' . strtotime('now') . '.' . $request->image->getClientOriginalExtension();
            $request->image->move($destinationPath, $fileName);
            $homePage['image'] = '_upload/homePage/' . $fileName;
        } else {
            $homePage->image = '/front/img/default.jpg';
        }
        $homePage->save();
        return redirect()->route('homePage.index')->with('success', 'Votre modification est un succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Moi $homePage)
    {
        $homePage->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if ($request->ajax()) {
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('homePage.index');
    }
}
