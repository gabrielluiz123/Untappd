<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    protected $table = 'friendships';
    public $timestamps = false;

     protected $fillable = ['id_user1', 'id_user2', 'solicitation'];

      public function User()
    {
        return $this->belongsTo(User::class,'id_user1');
    }
    
}
