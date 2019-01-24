<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['reply_id', 'user_id'];
}
