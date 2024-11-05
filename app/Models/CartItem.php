<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'user_id',
        'product_id',
        'quantity',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function cartitem()
    {
        return $this->belongsTo(CartItem::class);
    }
}
