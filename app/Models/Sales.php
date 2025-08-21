<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    
    protected $fillable = [
        'order_id',
        'product_id',
        'customer_id',
        'quantity',
        'unit_price',
        'total_price',
        'source_type',
        'source_id',
    ];

    public function order()
    {
        return $this->belongsTo(Orders::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
