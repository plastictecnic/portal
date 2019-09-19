<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $fillable = [
        'name', 'version', 'licience', 'expiry', 'supplier', 'remark'
    ];

    public function asset(){
        return $this->belongsTo('App\Asset');
    }
}
