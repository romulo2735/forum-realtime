<?php

namespace ForumRealtime\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id'
    ];
}
