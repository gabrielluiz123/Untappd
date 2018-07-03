<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
        protected $table = 'comentarios';
    public $timestamps = false;

     protected $fillable = ['id_user1', 'id_user2', 'id_checkin', 'coment'];

      public function User()
    {
        return $this->belongsTo(User::class,'id_user1', 'id_user2');
    }
       public function CheckIn()
    {
        return $this->belongsTo(User::class,'id_checkin');
    }
    
}
