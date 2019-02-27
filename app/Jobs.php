<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function response()
    {
        return $this->hasMany(Response::class, 'hulpvraag_id');
    }
}
