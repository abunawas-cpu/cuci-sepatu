<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupDeliverie extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'pickup_address_id', 'delivery_address_id', 'pickup_status', 'delivery_status', 'pickup_time', 'delivery_time'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function pickupAddress()
    {
        return $this->belongsTo(Address::class, 'pickup_address_id');
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(Address::class, 'delivery_address_id');
    }
}

