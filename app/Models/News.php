<?php

namespace App\Models;
use App\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use Translatable;
    protected $translatable = ['title', 'content'];
}
