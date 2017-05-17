<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $primaryKey = 'id_person';
    protected $fillable = [
        'name', 'last_name', 'phone', 'sex', 'nationality', 'ndi',
    ];
}
