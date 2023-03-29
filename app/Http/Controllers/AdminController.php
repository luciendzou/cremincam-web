<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str ;

class AdminController extends Controller
{
    public function adminHome()
    {
        $title = 'Dashboard';
        return view('admin.dashboard', ['title' => $title]);
    }


    public function addPub()
    {
        $title = 'Gestion des publications';
        return view('admin.publications', ['title' => $title]);
    }

    public function adding(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'titre' => 'required',
            'texte1' => 'required',
            'texte2' => '',
            'texte3' => '',
            'date' => 'required',
            'file1' => 'required|mimes:jpg,png|max:4048',
            'file2' => 'mimes:jpg,png|max:4048',
            'file3' => 'mimes:jpg,png|max:4048',
        ]);

        $publication = new Publication();
        /*  try{
        if ($request->file()) { */
        try {
            $fileName1 = time() . '_' . $request->file1->getClientOriginalName();
            if ($request->file2 !='') {
                $fileName2 = time() . '_' . $request->file2->getClientOriginalName();
            }
            if ($request->file3 !='') {
                $fileName3 = time() . '_' . $request->file3->getClientOriginalName();
            }

            $destinationPath = 'img/publications';

            $filePath1 = $request->file1->move(public_path($destinationPath), $fileName1);
            if ($fileName2 != '') {
                $filePath2 = $request->file2->move(public_path($destinationPath), $fileName2);
            }
            if ($fileName3 != '') {
                $filePath3 = $request->file3->move(public_path($destinationPath), $fileName3);
            }

            $publication->idadmin = '1';
            $publication->type = $request->type;
            $publication->titre = $request->titre;
            $publication->texte1 = $request->texte1;
            $publication->texte2 = $request->texte2;
            $publication->texte3 = $request->texte3;
            $publication->date = $request->date;
            $publication->image = Str::lower(str_replace(' ', '-', $request->titre));
            $publication->image_path_1 = 'img/publications/'.$fileName1;
            $publication->image_path_2 = 'img/publications/'.$fileName2;
            $publication->image_path_3 = 'img/publications/'.$fileName3;
            $publication->save();

            return back()
                ->with('success', 'Publication envoyée avec succès.');
        } catch (Exception $err) {
            return back()
                ->with('fail', '' . $err . ' !');
        }
        /*  }
        else {
            return back()
                ->with('fail', 'Une erreur est survenue, veuillez ressayer !');
        } */
    }
}
