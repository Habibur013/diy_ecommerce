<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    // public function orderitems(): HasMany
    // {
    //     return $this->hasMany(orderItems::class, 'order_id', 'id');
    // }

    public function orderitems()
    {
        return $this->hasMany(orderItems::class, 'order_id');
    }
}
