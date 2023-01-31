<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticuliersController extends Controller
{

    public function homepage()
    {
        $title = 'Particuliers';
        $menus = ['Comptes','Cartes prepayée','Financements', 'Solutions','Conseils et outils'];
        return view('pacticuler.particuler',['title' => $title])->with('menus',$menus);
    }
}
