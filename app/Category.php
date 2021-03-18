<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'SEO_text',
        'iamge',
        'meta_t',
        'H1',
        'meta_k',
        'meta_d',
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
