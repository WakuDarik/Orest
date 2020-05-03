<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'iamge',
    ];
    public function prods()
    {
        return $this->hasMany(Prods::class);
    }
    public function props()
    {
        return $this->belongsToMany(Prop::class);
    }
}
