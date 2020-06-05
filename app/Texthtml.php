<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texthtml extends Model
{
    protected $fillable = [
        'title', 'content', 'key_words', 'h1',
    ];
}
