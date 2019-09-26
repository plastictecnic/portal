<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $fillable = [
        'asset_id', 'name', 'version', 'licience', 'expiry', 'supplier', 'remark'
    ];

    public function setExpiryAttribute($expiry){
        $this->attributes['expiry'] = $this->formatDate($expiry);
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
