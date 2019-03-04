<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gemeente','adres','postcode','telefoonnummer','huisnummer'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jobs()
    {
        return $this->hasMany(Jobs::class, 'id_plaatser');
    }

    public function userblogposts()
    {
        return $this->hasMany(Userblogposts::class, 'id_plaatser_blog');
    }

    public function responses()
    {
        return $this->hasMany(Response::class, 'id_plaatser_response');
    }
}
