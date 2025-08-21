<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
     use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'contact',
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
}
