<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'asset_id', 'type', 'computer_name', 'model', 'brand', 'sn', 'mac_1', 'mac_2', 'os_version', 'os_key', 'purchase_at',
        'warranty_status', 'warranty_expiry_at', 'remark'
    ];

    public function setPurchaseAtAttribute($purchase_at){
        $this->attributes['purchase_at'] = $this->formatDate($purchase_at);
    }

    public function setWarrantyExpiryAtAttribute($warranty_expiry_at){
        $this->attributes['warranty_expiry_at'] = $this->formatDate($warranty_expiry_at);
    }

    public function asset(){
        return $this->belongsTo('App\Asset');
    }

    private function formatDate($date){
        if(empty($date) || $date == ''){
            return NULL;
        }else{
            $tari = Carbon::createFromFormat('d-m-Y H:i:s', $date.' 00:00:00');
            return $tari->format('Y-m-d H:i:s');
        }
    }
}
