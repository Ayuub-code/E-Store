<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
    public function cartItem()
    {
        return $this->hasMany(CartItem::class);
    }
}
