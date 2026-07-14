<?php

namespace App\Models;
use App\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Announcement extends Model
{
    use Translatable;
    protected $translatable = ['title', 'content'];
    protected $fillable = ['title', 'content', 'photo', 'date'];

}
