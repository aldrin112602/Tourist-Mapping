<?php

namespace App\Models;
use Illuminate\{
    Database\Eloquent\Factories\HasFactory,
    Foundation\Auth\User as Authenticatable,
    Notifications\Notifiable,
    Contracts\Auth\CanResetPassword,
    Auth\Passwords\CanResetPassword as ResetPasswordTrait,
    Support\Facades\Hash
};

class Admin extends Authenticatable implements CanResetPassword
{
    use HasFactory, Notifiable, ResetPasswordTrait;



    protected $fillable = [
        'name',
        'gender',
        'username',
        'password',
        'email',
        'profile',
        'address',
        'phone_number',
        'extension_name'
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
