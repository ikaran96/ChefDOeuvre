<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Formation extends Model
{
  protected $fillable = ['name', 'logo', 'short_desc'];

}
