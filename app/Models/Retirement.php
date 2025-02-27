<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'IdRet',
        'idStag',
        'MotifRet',
        'DateRetirement'
    ];
    
    protected $primaryKey = 'IdRet';

}
