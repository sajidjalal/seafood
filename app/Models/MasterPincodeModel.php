<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterPincodeModel extends Model
{
    protected $table = 'master_pincode';
    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo('App\Models\MasterStateModel', 'state_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\MasterCityModel', 'city_id', 'id');
    }
}
