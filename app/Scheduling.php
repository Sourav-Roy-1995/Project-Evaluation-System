<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    //

    public $fillable = [
        'final_year', 
        'fi_semester', 
        'fi_info',
        'fi_fr_date',
        'fi_to_date',
        'third_year',
        'th_semester',
        'th_info',
        'th_fr_date',
        'th_to_date',
        'reg_fr_date',
        'reg_to_date',
        'result',
        'rs_date'
    ];
}
