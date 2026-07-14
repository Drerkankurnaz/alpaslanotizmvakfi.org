<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;


class Team extends Model
{
    use Translatable;
    protected $translatable = ['title', 'name', 'content', 'content_two'];
    protected $fillable = ['title', 'name', 'content', 'content_two', 'photo', 'url', 'order', 'type'];
    protected $casts = ['type' => 'array'];
}
