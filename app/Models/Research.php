<?php

namespace App\Models;
use App\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Research extends Model
{
    use Translatable;
    protected $table = 'researches';

    protected $translatable = ['title', 'content'];
    protected $fillable = ['title', 'content', 'photo'];
}
