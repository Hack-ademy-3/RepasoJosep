<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $newcontact = new Contact;
        $newcontact->name = $misdatos['name'];
        $newcontact->email = $misdatos['email'];
        $newcontact->message = $misdatos['message'];

        $newcontact->save();

        return redirect()->route('home');
    }
}
