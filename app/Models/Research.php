<?php

namespace App\Models;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Research extends Model
{
    use Translatable;
    protected $table = 'researches';

    protected $translatable = ['title', 'content'];
}
