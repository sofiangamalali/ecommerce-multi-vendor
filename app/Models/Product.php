<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vendor_id',
        'product_name',
        'price',
        'discount',
        'stock',
        'is_on_sale'
    ];

    public function images()
    {
        return $this->hasMany(Product_image::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function cart()
    {
        return $this->belongsToMany(Cart::class, 'cart_items')->withPivot('quantity');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
