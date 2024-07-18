<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $fillable = [
        'JourAbs',
        'JourneeAbs',
        'idStag',
        'IdJust',
        'IdSem',
    ];

    protected $primaryKey = 'IdAbs';


    public function semaine()
    {
        return $this->belongsTo(Semaine::class, 'IdSem', 'IdSem');
    }

    public function justife()
    {
        return $this->belongsTo(Justife::class, 'IdJust', 'IdJust');
    }
    
}