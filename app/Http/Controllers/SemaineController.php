<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\Justife;
use App\Models\Semaine;
use App\Models\Stagiaires;
use Illuminate\Http\Request;

class SemaineController extends Controller
{
    public function saisiesemaine(){

        return view('SaisieSemaine');
       }

       public function storesemaine(Request $request){
        $DateSem = $request->DateSem;
        
        $request -> validate([
            'DateSem'=> 'required|unique:semaines'
        ]);

        Semaine::create([
            'DateSem'=> $DateSem,
        ]);
        
        // Redirection avec un message de succès
        return redirect()->back();
    }
}
