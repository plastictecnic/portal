<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'department_id', 'designation_id', 'emp_id', 'remark', 'picture_path', 'mobile', 'ext_num'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function designation(){
        return $this->belongsTo('App\Designation');
    }

    // Changing employer ID to caps
    public function setEmpIdAttribute($emp_id){
        $this->attributes['emp_id'] = strtoupper($emp_id);
    }
}
