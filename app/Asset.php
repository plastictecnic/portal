<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'sn', 'remark'
    ];

    public function computer(){
        return $this->hasOne('App\Computer');
    }

    public function printer(){
        return $this->hasOne('App\Printer');
    }

    public function softwares(){
        return $this->hasMany('App\Software');
    }
}
