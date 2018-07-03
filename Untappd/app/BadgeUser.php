<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BadgeUser extends Model
{
    protected $table = 'badgeUsers';
    public $timestamps = false;

     protected $fillable = ['id_user', 'id_badge'];

      public function Badge()
    {
        return $this->belongsTo(Badge::class,'id_badge');
    }
      public function User()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}
