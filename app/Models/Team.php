<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;


class Team extends Model
{
    use Translatable;
    protected $translatable = ['title', 'name', 'content', 'content_two'];
    protected $casts = ['type' => 'array'];
}
