<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Justife;
use App\Models\Semaine;
use App\Models\Stagiaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StagiairesController extends Controller
{

    public function index(Request $request){
        $groupe = $request->all();
        $stagiaires = DB::table('stagiaires')->select('*')->where('Groupe', '=', $groupe)->get();
        return view('ListeStagiaires', compact('stagiaires','groupe'));
    }
    public function accuiel(){
        return view('accuiel');
    }

}