<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use rakeshthapac\LaraTime\Traits\LaraTimeable;

class Note extends Model
{
    use LaraTimeable;

    protected $fillable = [
        'body'
    ];
}
