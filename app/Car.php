<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   protected $primaryKey = 'registration';
   public $incrementing = false;
   protected $fillable = ['registration', 'series', 'model','produced_on','full_mass','fuel_consumption','owner_id'];
}
