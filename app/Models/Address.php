<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'street', 'city', 'province', 'postal_code', 'latitude', 'longitude'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pickupDeliveries()
    {
        return $this->hasMany(PickupDeliverie::class, 'pickup_address_id');
    }

    public function deliveryDeliveries()
    {
        return $this->hasMany(PickupDeliverie::class, 'delivery_address_id');
    }
}
