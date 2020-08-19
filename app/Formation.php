<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Formation extends Model
{
    use Notifiable;
  public function eleves(){
      return $this->hasMany('App\Eleve');
  }
}
