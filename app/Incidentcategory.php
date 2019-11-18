<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidentcategory extends Model
{
    protected $fillable = ['incident_group_name', 'inc_cat_group_member'];
}
