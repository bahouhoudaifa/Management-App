<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaires extends Model
{
    use HasFactory;

    protected $primaryKey = 'idStag';
    
    protected $table = 'stagiaires';

    protected $fillable = [
        'CEF', 
        'Nom', 
        'Prenom', 
        'Etudiant_Actif' , 
        'Filiere', 
        'Groupe'
    ];
}
