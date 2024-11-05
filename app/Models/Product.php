<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Pest\Laravel\post;

class Product extends Model
{
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function CartItems()
    {
        return $this->belongsTo(CartItem::class);
    }
    public function Wish()
    {
        return $this->belongsTo(Wish::class);
    }
}
