<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function prods()
    {
        return $this->belongsToMany(Prods::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->prods as $prod) {
            $sum += $prod->getPriceForCount();
        }
        return $sum;
    }

    public function saveOrder($name, $phone)
    {
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
    }
}
