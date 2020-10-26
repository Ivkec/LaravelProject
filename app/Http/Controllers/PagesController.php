<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
         $naslov = "Ko smo mi?";
         return view('pages.about')->with('naslov', $naslov);
    }

    public function kontakt(){
        $naslov = "Kontaktirajte Nas";
        return view('pages.kontakt')->with('naslov', $naslov);;
    }
}
