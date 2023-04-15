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

    public function totalAmount($orderId)
    {
        $orderItems = $this->orderitems()->where('order_id', $orderId)->get();
        $totalAmount = $orderItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return $totalAmount;
    }

    public function tax($orderId)
    {
        $subtotal = $this->totalAmount($orderId);
        $taxAmount = $subtotal * 0.06625;
        return $taxAmount;
    }

    public function finalTotal($orderId)
    {
        $subtotal = $this->totalAmount($orderId);
        $taxAmount = $this->tax($orderId);
        $totalAmount = $subtotal + $taxAmount;
        return $totalAmount;
    }
}
