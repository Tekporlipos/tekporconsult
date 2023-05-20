<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    //
    protected $fillable = [
        'user_id', 'com_id','reply',
    ];
}
