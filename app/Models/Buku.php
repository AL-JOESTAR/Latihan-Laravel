<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $guraded = [];

     public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}


