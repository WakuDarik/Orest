<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_Image extends Model
{
    protected $fillable = [
        'prods_id',
        'iamge',
    ];
    public function prods()
    {
        return $this->belongsTo(Prods::class);
    }
}

