<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormationDiplomante extends Model
{
    protected $fillable = ['name', 'ecole_id'];

    // public function getRouteKeyname(){
    //     return 'name';
    // }
}

