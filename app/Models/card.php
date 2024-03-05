<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "card_number",
        "holder_name",
        "expired_date",
    ];


    protected $casts = [
        "expired_date" => "datetime"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
