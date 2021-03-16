<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function home() {
        //recuperar les dades de la db
        $contactos = Contact::latest ()->get();
        return view("welcome",["contactos"=>$contactos]);
    }
    public function contactForm()
    {
        return view ("contact");
    }
    public function contactStore(Request $request)
    {
       
        $misdatos = $request->except("_token");
        //guardar solicitud al db
  /*        //query builder
        DB::table('contacts')->insert($misdatos); */
        /* $newcontact = new Contact;
        $newcontact->name = $misdatos['name'];
        $newcontact->email = $misdatos['email'];
        $newcontact->message = $misdatos['message'];

        $newcontact->save(); */
                     
        $user = Auth::user();
        if($user == null)
            return back;

        $user->contacts()->create($misdatos);

        return redirect()->route('home');
    }
    public function details($id)
    {
        $contact = Contact:: findOrFail($id);

        return view("contact-details", ["contact"=>$contact]);
    }
    public function edit(Request $request, $id)
    {
        
        $request = $request->validate([
            "message"=>"required|max:160"
        ]);
        Contact:: findOrFail($id)->update($request);
        return back();
    }

    public function delete($id)
    
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route("home");
    }
}
