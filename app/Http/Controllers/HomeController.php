<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $publication = Publication::limit(4)->orderBy('date', 'desc')->get();
        $title = 'Accueil';
        $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
        return view('home.home', ['title' => $title])->with('menus', $menus)->with('publications', $publication);
    }

    public function about()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
        return view('home.about', ['title' => $title])->with('menus', $menus);
    }

    public function histoire()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
        return view('home.story', ['title' => $title])->with('menus', $menus);
    }

    public function agences()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
        return view('home.agence', ['title' => $title])->with('menus', $menus);
    }

    public function contacts()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
        return view('home.contact', ['title' => $title])->with('menus', $menus);
    }

    public function carriere()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
        return view('home.carrieres', ['title' => $title])->with('menus', $menus);
    }

    public function actu()
    {
        $publication = Publication::orderBy('date', 'desc')->get();
        $title = 'Accueil';
        $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
        return view('home.news', ['title' => $title])->with('menus', $menus)->with('publications', $publication);
    }

    public function actuDetails(Request $request, $name, $id)
    {
        $value =  $request->session()->get('ipadress');

        if($value != $request->ip()){
            $pubUpdate = Publication::where('id', $id)->increment('nbre_view');

            if ($pubUpdate) {
                $request-> session()->put('ipadress', $request->ip());
                $publication = Publication::where('id', $id)->get();
                $title = 'Accueil';
                $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
                return view('home.new', ['title' => $title])->with('menus', $menus)->with('publications', $publication);
            }
        }else{
            $request->session()->forget('ipadress');
            $publication = Publication::where('id', $id)->get();
            $title = 'Accueil';
            $menus = ['A propos de nous', 'Histoire', 'Agences', 'Carrières', 'Actualités', 'Nous contacter'];
            return view('home.new', ['title' => $title])->with('menus', $menus)->with('publications', $publication);
        }


    }
}
