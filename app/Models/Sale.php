<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User()
    {
        return $this->hasMany(User::class);
    }
    public function Payment()
    {
        return $this->hasMany(Payment::class);
    }
}
