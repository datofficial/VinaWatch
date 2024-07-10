<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'password', 'PhoneUser', 'email', 'DOBUser', 'RoleUser', 'IDCity', 'IDDistrict', 'IDWard', 'Address',
    ];

    protected $hidden = [
        'password',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'IDCity');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'IDDistrict');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'IDWard');
    }
    public function isAdmin()
    {
        return $this->RoleUser;
    }
}
