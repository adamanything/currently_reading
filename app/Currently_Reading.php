<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currently_Reading extends Model
{
    protected $fillable = ['title', 'link'];

    protected $table = 'Currently_Reading';
}
