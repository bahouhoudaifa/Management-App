<?php

namespace App\Http\Controllers;

use App\Models\Stagiaires;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class exelController extends Controller
{

    public function form() {
        return view('excel');
    }


    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls|max:2048',
        ], [
            'file.required' => 'Le champ est obligatoire.',
            'file.mimes' => 'Le type de document est invalide.',
            'file.max' => 'Le taille de document est invalide.',            
        ]);

        $file = $request->file('file');

        $data = Excel::toCollection(function ($reader) use ($file) {
            return $reader->first(); 
        }, $file);

        if ($data->isEmpty()) {
            return redirect()->back()->withErrors('The uploaded file is empty.');
        };

        
        foreach ($data as $row) {
            foreach($row->skip(1) as $val) {
                Stagiaires::create([
                    'CEF' => $val[0],
                    'Nom' => $val[1],
                    'Prenom' => $val[2],
                    'Etudiant_Actif'=> $val[3],
                    'Filiere' => $val[4],
                    'Groupe' => $val[5]
                ]);
            }
        }
        return redirect()->route('index');
    }
}
