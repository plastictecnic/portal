<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'type', 'computer_name', 'model', 'brand', 'sn', 'mac_1', 'mac_2', 'os_version', 'os_key', 'purchase_at',
        'warranty_status', 'warranty_expiry_at', 'remark'
    ];

    public function asset(){
        return $this->belongsTo('App\Asset');
    }
}
