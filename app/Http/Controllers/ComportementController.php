<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\Formateur;
use App\Models\Stagiaires;
use App\Models\Comportement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComportementController extends Controller
{
    public function comportement(Request $request){


        $groupe = $request->all();


        // Récupérer les stagiaires du groupe avec Etudiant_Actif = 'Oui'
        $stagiaires = DB::table('stagiaires')
        ->where('Groupe', '=', $groupe)
        ->where('Etudiant_Actif', '=', 'Oui')
        ->get();

        return view('Comportement',compact('stagiaires','groupe'));


    }
    public function saisiecomportement($id){
        $stagiaire=Stagiaires::find($id);
        $formateurs=Formateur::all();
        return view('saisiecomportement',compact('stagiaire','formateurs'));
    }

    public function storeComportement(Request $request){
        
        $idStag = $request->input('idStag');
        $IdForm = $request->input('Formateur');
        $Motif = $request->input('Motif');
        $DateComportement = $request->input('DateComportement');
        $TypeComportement = $request->input('TypeComportement');


        $request->validate([
            'Formateur'=> 'required',
            'Motif'=> 'required|max:200',
            'DateComportement'=> 'required',
            'TypeComportement'=> 'required'
        ], [
            'Formateur.required' => 'Le champ Formateur est obligatoire.',
            'Motif.required' => 'Le champ Motif est obligatoire.',
            'Motif.max' => 'Le champ "Motif" ne doit pas dépasser 200 caractères.',
            'DateComportement.required' => 'Le champ Date est obligatoire.',
            'TypeComportement.required' => 'Le champ Sanction est obligatoire.',
        ]);




        comportement::create([
            'idStag'=> $idStag,
            'IdForm'=> $IdForm,
            'Motif'=> $Motif,
            'DateComportement'=> $DateComportement,
            'TypeComportement'=> $TypeComportement,
        ]);


        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Comportement enregistrée avec succès!');
    }




    public function modifierComportement($id){
        $comportement = Comportement::find($id);
        $stagiaire=Stagiaires::find($comportement->idStag);
        $formateurs=Formateur::all();
        return view('ModifierComportement',compact('stagiaire','formateurs','comportement'));
    }


    public function updateComportement(Request $request, $id){
        $comportement = Comportement::findOrFail($id);

        $comportement->idStag = $request->input('idStag');
        $comportement->IdForm = $request->input('Formateur');
        $comportement->Motif = $request->input('Motif');
        $comportement->DateComportement = $request->input('DateComportement');
        $comportement->TypeComportement = $request->input('TypeComportement');


        $request->validate([
            'Formateur'=> 'required',
            'Motif'=> 'required|max:200',
            'DateComportement'=> 'required',
            'TypeComportement'=> 'required'
        ], [
            'Formateur.required' => 'Le champ Formateur est obligatoire.',
            'Motif.required' => 'Le champ Motif est obligatoire.',
            'Motif.max' => 'Le champ "Motif" ne doit pas dépasser 200 caractères.',
            'DateComportement.required' => 'Le champ Date est obligatoire.',
            'TypeComportement.required' => 'Le champ Sanction est obligatoire.',
        ]);

        $comportement->save();

        
        return redirect()->back()->with('success', 'Comportement modifié avec succès!');
    }


    public function deleteComportement($id){
        $comportement = Comportement::find($id);
        $comportement->delete();
        
        return redirect()->back()->with('success', 'Absence Supprimer avec succès!');
    }


}