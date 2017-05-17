<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'date','ckechin','ckechout','type_reservation','total','user_id'
    ];
}
