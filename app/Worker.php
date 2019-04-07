<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $guarded = [];

    public function organization()
    {
        return $this->belongsTo('App\Organization', 'organization_id', 'id');
    }
}
