<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'product_id',
        'total_amount',
    ];

    public function CartItems()
    {
        return $this->belongsTo(CartItem::class);
    }
    public function Cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
