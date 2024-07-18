<?php

namespace App\Http\Controllers;

use App\Models\Comportement;
use App\Models\Formateur;
use App\Models\Justife;
use App\Models\Semaine;
use Illuminate\Http\Request;
use App\Models\Absence;
use App\Models\Stagiaires;
use Illuminate\Support\Facades\DB;

class AbsenceController extends Controller
{
    
    
    public function absence(Request $request){

        $groupe = $request->all();

        // Récupérer les stagiaires du groupe avec Etudiant_Actif = 'Oui'
        $stagiaires = DB::table('stagiaires')
        ->where('Groupe', '=', $groupe)
        ->where('Etudiant_Actif', '=', 'Oui')
        ->get();


         return view('Absence',compact('stagiaires','groupe'));
    }

    
    public function SaisieAbsence($id){
        $stagiaire = Stagiaires::find($id);
        $semaines = Semaine::all();
        $justife = Justife::all();
        return view('SaisieAbsence',compact('semaines','stagiaire','justife'));
    }


    public function storeAbsence(Request $request){

        
        // Récupération des données du formulaire
        $JourAbs = $request->input('JourAbs');
        $JourneeAbs = $request->input('JourneeAbs');
        $idStag = $request->input('idStag');
        $IdJust = $request->input('IdJust');
        $IdSem = $request->input('IdSem');

        $request->validate([
            'JourAbs'=> 'required',
            'JourneeAbs'=> 'required',
            'IdJust'=> 'required',
            'IdSem'=> 'required'
        ], [
            'JourAbs.required' => 'Le champ Jour d\'absence est obligatoire.',
            'JourneeAbs.required' => 'Le champ Journée d\'absence est obligatoire.',
            'IdJust.required' => 'Le champ Type Justification est obligatoire.',
            'IdSem.required' => 'Le champ Semaine est obligatoire.',
        ]);


        $existingAbsence = Absence::where('JourAbs', $JourAbs)
        ->where('JourneeAbs', $JourneeAbs)
        ->where('idStag', $idStag)
        ->first();

        if ($existingAbsence) {
            return redirect()->back()->withErrors(['error' => 'Cette absence a déjà été enregistrée pour cette date et cette période.']);
        }



        // Création d'une nouvelle absence dans la base de données
        Absence::create([
            'JourAbs'=> $JourAbs,
            'JourneeAbs'=> $JourneeAbs,
            'idStag'=> $idStag,
            'IdJust'=> $IdJust,
            'IdSem'=> $IdSem,
        ]);
        
        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Absence enregistrée avec succès!');
    }
  
        
    public function details($id)
    {
        $stagiaire = Stagiaires::find($id);

        $absences = Absence::with(['semaine', 'justife'])->where('IdStag', '=', $id)->get();
    
        $comportements = Comportement::with(['formateur'])->where('IdStag', '=', $id)->get();

        $retirements = DB::table('retirements')->select('*')->where('IdStag','=',$id)->get();
        
        $comprts = Comportement::where('idStag', '=', $id)->get();

        // Calculer le nombre d'absences seulement pour les stagiaires avec IdJust = 1
        $nombreAbsences = Absence::where('idStag', $id)->whereIn('IdJust', [1])->count();

        // Calculer la note d'assiduité
        $assiduite = 15 - ($nombreAbsences * 0.5);

        // Calculer la note d'assiduité en fonction des comportements
        foreach ($comprts as $comprt) {
            switch ($comprt->TypeComportement) {
                case 'Mise en garde':
                    $assiduite -= 1;
                    break;
                case 'Avertissement':
                    $assiduite -= 2;
                    break;
                case 'Blame':
                    $assiduite -= 3;
                    break;
                case 'Exclusion de 2 jours':
                    $assiduite -= 3;
                    break;
                default:
                    // Ne rien faire pour les autres types de comportements
                    break;
            }
        }

        // S'assurer que la note d'assiduité reste positive
        $assiduite = max(0, $assiduite);
        return view('Details',compact('stagiaire','absences','comportements','retirements','assiduite','comprts'));
    }


    
    
    
    public function modifierAbsence($id){
        $absence = Absence::find($id);
        $stagiaire = Stagiaires::find($absence->idStag);
        $semaines = Semaine::all();
        $justife = Justife::all();
        return view('ModifierAbsence',compact('semaines','stagiaire','justife','absence'));
    }

    
    public function updateAbsence(Request $request, $id){
        // Find the absence by ID
        $absence = Absence::findOrFail($id);
        
        // Update the absence with new data from the form
        $absence->JourAbs = $request->input('JourAbs');
        $absence->JourneeAbs = $request->input('JourneeAbs');
        $absence->IdJust = $request->input('IdJust');
        $absence->IdSem = $request->input('IdSem');

        $request->validate([
            'JourAbs'=> 'required',
            'JourneeAbs'=> 'required',
            'IdJust'=> 'required',
            'IdSem'=> 'required'
        ], [
            'JourAbs.required' => 'Le champ Jour d\'absence est obligatoire.',
            'JourneeAbs.required' => 'Le champ Journée d\'absence est obligatoire.',
            'IdJust.required' => 'Le champ Type Justification est obligatoire.',
            'IdSem.required' => 'Le champ Semaine est obligatoire.',
        ]);


        // Save the updated absence
        $absence->save();
        
        // Redirect with success message
        return redirect()->back()->with('success', 'Absence modifié avec succès!');
    }
    
    
    public function deleteAbsence($id){
        $absence = Absence::find($id);
        $absence->delete();
        
        return redirect()->back()->with('success', 'Absence Supprimer avec succès!');
    }
}