<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'gist_id',
        'description',
        'gist_created_at'
    ];
}
