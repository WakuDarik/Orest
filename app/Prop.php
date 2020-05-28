<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prop extends Model
{
    protected $fillable = [
        'name',
        'code',
        'unit',
    ];
    public function prodsProps()
    {
        return $this->belongsToMany(Prods::class)->withPivot('unit')->withTimestamps();
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('category_id');;
    }
}

