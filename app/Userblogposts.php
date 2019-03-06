<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userblogposts extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id_plaatser_blog');
    }
}
