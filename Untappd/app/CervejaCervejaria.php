<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CervejaCervejaria extends Model
{
    protected $table = 'cervejaCervejarias';
    public $timestamps = false;

     protected $fillable = ['id_cerveja', 'id_cervejaria', 'type'];

        public function Cerveja()
    {
        return $this->belongsTo(Cerveja::class,'id_cerveja');
    }
       public function Cervejaria()
    {
        return $this->belongsTo(Cervejaria::class,'id_cervejaria');
    }

}
