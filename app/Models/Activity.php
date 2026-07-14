<?php

namespace App\Models;
use App\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{
    use Translatable;
    protected $translatable = ['title', 'content', 'content_two'];
    protected $fillable = ['title', 'content', 'content_two', 'photo', 'date'];
}
