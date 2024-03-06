<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    public $incrementing = false;

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
