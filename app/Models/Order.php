<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function buyDetails()   {
        return $this->hasMany('App\Models\OrderProduct');
    }

    public function getTotalPrice() {
        return $this->buyDetails->sum(function($buyDetail) {
            return $buyDetail->quantity * $buyDetail->price;
        });
    }
    public function productDetail () {
        return $this->hasMany('App\Models\OrderProduct');
    }
    public function getProductId () {
        return $this->productDetail[0]['product_id'];
    }

    public function getProductQuantity () {
        return $this->productDetail[0]['quantity'];
    }
}
