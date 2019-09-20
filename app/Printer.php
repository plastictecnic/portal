<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $fillable = [
        'asset_id', 'brand', 'model', 'sn', 'connection_type', 'printer_type', 'remark'
    ];

    public function asset(){
        return $this->belongsTo('App\Asset');
    }
}
