<?php

namespace App\Models;
use App\Models\Formateur;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comportement extends Model
{
    use HasFactory;
    protected $fillable = [
        'IdCom',
        'idStag',
        'IdForm',
        'Motif',
        'DateComportement',
        'TypeComportement',
    ];

    
    protected $primaryKey = 'IdCom';
    
    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'IdForm', 'IdForm');
    }
}
