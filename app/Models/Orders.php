<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'source_type',
        'source_id',
        'quantity',
        'total_price',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function sales()
    {
        return $this->hasMany(Sales::class);
    }
}
