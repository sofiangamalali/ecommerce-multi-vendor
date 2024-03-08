<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
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
        'is_on_sale',
        'category_id',
        'cart_id',
        'descreption',
        'averageRating'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
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
    public function rating()
    {
        return $this->hasMany(Rating::class, 'product_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected static function newFactory(): Factory
    {
        return ProductFactory::new();
    }

    // public function getAverageRating()
    // {
    //     return $this->rating->avg('rate');
    // }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saved(function ($product) {
    //         $product->update(['averageRating' => $product->averageRating]);
    //     });
    // }

    public function getRatingCount()
    {
        return $this->rating()->groupBy('user_id')->count();
    }
}
