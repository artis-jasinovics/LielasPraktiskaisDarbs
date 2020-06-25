<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
   protected $fillable = ['rented_from', 'rented_to', 'registration','renter_id'];
}
