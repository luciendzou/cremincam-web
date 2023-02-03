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
            'texte2' => 'required',
            'texte3' => 'required',
            'date' => 'required',
            'file1' => 'required|mimes:jpg,png|max:4048',
            'file2' => 'required|mimes:jpg,png|max:4048',
            'file3' => 'required|mimes:jpg,png|max:4048',
        ]);

        $publication = new Publication();
        /*  try{
        if ($request->file()) { */
        try {
            $fileName1 = time() . '_' . $request->file1->getClientOriginalName();
            $fileName2 = time() . '_' . $request->file2->getClientOriginalName();
            $fileName3 = time() . '_' . $request->file3->getClientOriginalName();
            $filePath1 = $request->file('file1')->storeAs('publications', $fileName1, 'public');
            $filePath2 = $request->file('file2')->storeAs('publications', $fileName2, 'public');
            $filePath3 = $request->file('file3')->storeAs('publications', $fileName3, 'public');

            $publication->idadmin = '1';
            $publication->type = $request->type;
            $publication->titre = $request->titre;
            $publication->texte1 = $request->texte1;
            $publication->texte2 = $request->texte2;
            $publication->texte3 = $request->texte3;
            $publication->date = $request->date;
            $publication->image = Str::lower(str_replace(' ', '-', $request->titre));
            $publication->image_path_1 = '/storage/' . $filePath1;
            $publication->image_path_2 = '/storage/' . $filePath2;
            $publication->image_path_3 = '/storage/' . $filePath3;
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
