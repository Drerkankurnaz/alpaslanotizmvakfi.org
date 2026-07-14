<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Slide extends Model
{
    use Translatable;
    protected $translatable = ['title', 'title_two', 'content'];



}
