<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'user_id',
        'total_price'
    ];

    protected $table = 'cart';
    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_items')->withPivot('quantity');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
