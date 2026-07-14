<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Mentor extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'phone', 'school', 'collage', 'major', 'minor', 'expertise'];

}
