<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
     protected $table = 'checkIns';

     protected $fillable = ['id_cerveja', 'id_cervejaria', 'id_user', 'beer', 'star'];

      public function Cerveja()
    {
        return $this->belongsTo(Cerveja::class,'id_cerveja');
    }
      public function User()
    {
        return $this->belongsTo(User::class,'id_user');
    }
     public function Cervejaria()
    {
        return $this->belongsTo(Cervejaria::class,'id_cervejaria');
    }
}
