<?php

namespace App\Http\Controllers\Admin;

use App\Mail\GeneratePseudoAndPasswordForUser;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::with('role')->get();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // Configure Gravatar Image
        $email = $user->email;
        // Image par default exemple
        //$default = "http://www.belle-a-velo-electrique.org/images/defaut.jpg";
        $size = 80;
        $grav_url = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "&s=" . $size;
        return view('admin.user.show', compact('user', 'grav_url'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // Récupération donnée et chargement list => function pluck()
        $role = \App\Role::pluck('role', 'id');

        return view('admin.user.edit', compact('role', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->role_id = $request->role_id;
        $user->pseudo = $request->pseudo;
        $newPassword = $request->password;
        $user->password = \Hash::make($request->password . \Config::get('constante.salt'));
        $user->save();

        // Envoie du mail
        Mail::to('bilel.bekkouche@gmail.com')->send(new GeneratePseudoAndPasswordForUser($user, $newPassword));

        return redirect()->route('user.index')->with('success', 'Mise à jour effectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $user->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if ($request->ajax()) {
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('user.index');
    }
}
