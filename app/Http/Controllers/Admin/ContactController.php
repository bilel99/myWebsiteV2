<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = \App\Contact::with('langue')->get();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact_langue = \App\Contact::with('langue')->where('id', '=', $contact->id)->first();
        return view('admin.contact.show', compact('contact', 'contact_langue'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Contact $contact)
    {
        $contact->delete();

        // AJAX
        $message = 'Suppression éffectué avec succès !';
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('contact.index');
    }

    public function done(Request $request, Contact $contact)
    {
        if($contact->done === 0) {
            $contact->done = 1;
            $contact->save();
        } else {
            $contact->done = 0;
            $contact->save();
        }

        // AJAX
        if($request->ajax()){
            return response()->json([
               'done' => $contact->done
            ]);
        }
        return redirect()->route('contact.index');
    }

}
