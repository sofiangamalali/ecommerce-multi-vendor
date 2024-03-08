<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'name',
        'n_of_products',
        'trans_fee',
    ];

    public function vendors()
    {
        return $this->hasMany(Vendor::class, "vendor_id", "id");
    }

}
