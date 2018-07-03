<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cervejaria extends Model
{
     protected $table = 'cervejarias';
    public $timestamps = false;

     protected $fillable = ['name', 'type', 'city', 'state', 'country'];

}
