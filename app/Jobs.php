<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function responses()
    {
        return $this->hasMany(Response::class, 'hulpvraag_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_plaatser');
    }
}
