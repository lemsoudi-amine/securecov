<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Securecovannonceimage extends Model
{
    use SoftDeletes;

    protected $dates=["deleted_at"];

    public function securecovannonce()
    {
        return $this->hasOne('App\Securecovannonce', 'annonceID');
    }
}
