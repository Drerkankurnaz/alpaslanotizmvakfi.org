<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Applicant extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'phone', 'high_school', 'gpa', 'sat', 'act', 'dream_school', 'like_school_one', 'like_school_two', 'like_school_three', 'like_school_four', 'like_school_five', 'interested'];

}
