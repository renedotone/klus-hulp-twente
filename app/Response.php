<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_plaatser_response');
    }
}
