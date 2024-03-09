<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;


class   Vendor extends Model implements Authenticatable, JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, AuthenticatableTrait;
    protected $table = 'vendors';
    protected $guarded = ["id"];
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at',

    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }

    public function products()
    {
        return $this->hasMany(Product::class, "vendor_id", "id");
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, "vendor_id", "id");
    }

}
