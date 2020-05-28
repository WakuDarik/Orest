<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prods extends Model
{
    protected $fillable = [
        'name',
        'code',
        'category_id',
        'price',
        'articul',
        'description',
        'rent1',
        'rent2',
        'rent3',
        'rent4',
        'iamge',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Goods_Image::class);
    }

    public function imagesPath()
    {
        $imgPath = $this->hasMany(Goods_Image::class);
        $array = [];
        foreach ($imgPath as $path) {
            array_push($array,  $path->iamge);
        }
        return $array;
    }

    public function propsProds()
    {
        return $this->belongsToMany(Prop::class)->withPivot('unit')->withTimestamps();;
    }

    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->rent1 * $this->pivot->count;
        } else {
            return $this->rent1;
        }
    }
}
