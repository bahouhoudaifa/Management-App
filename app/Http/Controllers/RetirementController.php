<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Retirement;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Models\Stagiaires;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class RetirementController extends Controller
{
    public function retirement(Request $request){

        $groupe = $request->all();

        $stagiaires = DB::table('stagiaires')->where('Groupe', '=', $groupe)->where('Etudiant_Actif', '=', 'Oui')->get();

        return view('Retirement',compact('stagiaires','groupe'));
    }


    public function saisieretirement($id){

        $stagiaire=Stagiaires::find($id);

        return view('saisieretirement',compact('stagiaire'));

    }


    public function storeRetirement(Request $request) {
        $request->validate([
            'MotifRet' => 'required|max:200',
            'DateRetirement' => 'required|date',
        ], [
            'MotifRet.required' => 'Le champ Motif est obligatoire.',
            'MotifRet.max' => 'Le champ "Motif" ne doit pas dépasser 200 caractères.',
            'DateRetirement.required' => 'Le champ Date est obligatoire.',
        ]);
    
        $idStag = $request->input('idStag');
    
        // Check if the retirement record already exists
        if (Retirement::where('idStag', $idStag)->exists()) {
            return redirect()->back()->withErrors(['error' => 'Le retirement pour ce stagiaire a déjà été enregistré.']);
        }
    
        // Create the retirement record
        Retirement::create([
            'idStag' => $idStag,
            'MotifRet' => $request->input('MotifRet'),
            'DateRetirement' => $request->input('DateRetirement'),
        ]);
    
        // Update the student's status
        $stagiaire = Stagiaires::find($idStag);
        $stagiaire->Etudiant_Actif = 'Non'; 
        $stagiaire->save();
    
        return redirect()->back()->with('success', 'Retirement enregistré avec succès!');  
    }



    public function modifierRetirement($id){
        $retirement = Retirement::find($id);
        $stagiaire = Stagiaires::find($retirement->idStag);
        return view('ModifierRetirement',compact('retirement','stagiaire'));
    }



    public function updateRetirement(Request $request, $id){
        $retirement = Retirement::findOrFail($id);


        $retirement->idStag = $request->input('idStag');
        $retirement->MotifRet = $request->input('MotifRet');
        $retirement->DateRetirement = $request->input('DateRetirement');

        $request->validate([
            'MotifRet'=> 'required|max:200',
            'DateRetirement'=> 'required'
        ], [
            'MotifRet.required' => 'Le champ Motif est obligatoire.',
            'MotifRet.max' => 'Le champ "Motif" ne doit pas dépasser 200 caractères.',
            'DateRetirement.required' => 'Le champ Date est obligatoire.',
        ]);

        $retirement->save();

        return redirect()->back()->with('success', 'Retirement modifié avec succès!');
    }






    public function deleteRetirement($id){
        $retirement = Retirement::find($id);
        $idStag = $retirement->idStag;
    
        $retirement->delete();
    
        // Vérifier s'il existe d'autres retraits pour ce stagiaire
        $otherRetirements = Retirement::where('idStag', $idStag)->exists();
    
        // Si aucun autre retrait n'existe, mettre à jour le statut de l'étudiant
        if (!$otherRetirements) {
            $stagiaire = Stagiaires::find($idStag);
            $stagiaire->Etudiant_Actif = 'Oui'; // Changer le statut en Oui
            $stagiaire->save();
        }
    
        return redirect()->back()->with('success', 'Retirement Supprimer avec succès!');
    }

}
