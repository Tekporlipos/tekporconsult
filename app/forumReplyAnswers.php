<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forumReplyAnswers extends Model
{
    //
    protected $fillable = [
        'user_id', 'answer_id','reply',
    ];
}
