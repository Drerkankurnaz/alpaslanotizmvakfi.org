<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;


class Content extends Model
{
    use Translatable;
    protected $translatable = ['title', 'content', 'content_two'];
    protected $fillable = ['title', 'content', 'content_two', 'photo', 'date', 'type'];
}
