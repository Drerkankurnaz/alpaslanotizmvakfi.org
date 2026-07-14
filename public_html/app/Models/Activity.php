<?php

namespace App\Models;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{
    use Translatable;
    protected $translatable = ['title', 'content', 'content_two'];
}
