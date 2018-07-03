<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerveja extends Model
{
     protected $table = 'cervejas';
    public $timestamps = false;

     protected $fillable = ['name', 'teor', 'type'];

}
