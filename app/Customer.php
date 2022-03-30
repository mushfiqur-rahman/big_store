<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email_address', 'password', 'phone_number', 'address'];
    
    public function orders()
    {
    	return $this->hasMany(Order::class);
    }
}
