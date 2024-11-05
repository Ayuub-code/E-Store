<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_email',
    ];
    public function User()
    {
        return $this->hasMany(User::class);
    }
    public function CartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
