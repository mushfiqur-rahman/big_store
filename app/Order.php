<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function payments()
    {
    	return $this->hasMany(Payment::class);
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }
    
    public function shipping()
    {
    	return $this->belongsTo(Shipping::class);
    }
}
