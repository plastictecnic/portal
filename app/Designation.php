<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = ['name', 'description'];

    public function profiles(){
        return $this->hasMany('App\Profile');
    }
}
