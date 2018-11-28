<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'role_id', 'person_id',
    ];

    /**
     * Los atributos que deben estar ocultos para las matrices.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
