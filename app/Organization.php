<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['title', 'OGRN', 'OKTMO'];

    public function workers()
    {
        return $this->hasMany('App\Worker');
    }
}
