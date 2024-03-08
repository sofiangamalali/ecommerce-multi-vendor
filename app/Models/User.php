<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'fname',
        'lname',
        'role',
        'email',
        'password',
        'phone_number',
        'address',
        'birth_date'
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
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


    public function cards()
    {
        return $this->hasMany(card::class);
    }


    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
