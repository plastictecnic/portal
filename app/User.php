<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    // use Notifiable;
    use HasRoles;

    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Encrypting the user password
    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function department(){
        return $this->belongsToMany('App\Department');
    }
}
