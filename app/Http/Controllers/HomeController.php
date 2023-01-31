<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous','Histoire', 'Agences','Carrières','Actualités','Nous contacter'];
        return view('home.home',['title' => $title])->with('menus',$menus);
    }

    public function about()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous','Histoire', 'Agences','Carrières','Actualités','Nous contacter'];
        return view('home.about',['title' => $title])->with('menus',$menus);
    }

    public function histoire()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous','Histoire', 'Agences','Carrières','Actualités','Nous contacter'];
        return view('home.story',['title' => $title])->with('menus',$menus);
    }

    public function agences()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous','Histoire', 'Agences','Carrières','Actualités','Nous contacter'];
        return view('home.agence',['title' => $title])->with('menus',$menus);
    }

    public function contacts()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous','Histoire', 'Agences','Carrières','Actualités','Nous contacter'];
        return view('home.contact',['title' => $title])->with('menus',$menus);
    }

    public function carriere()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous','Histoire', 'Agences','Carrières','Actualités','Nous contacter'];
        return view('home.carrieres',['title' => $title])->with('menus',$menus);
    }

    public function actu()
    {
        $title = 'Accueil';
        $menus = ['A propos de nous','Histoire', 'Agences','Carrières','Actualités','Nous contacter'];
        return view('home.news',['title' => $title])->with('menus',$menus);
    }
}
