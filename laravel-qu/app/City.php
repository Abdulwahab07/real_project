<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city_name' , 'region_id'
    ];

    public function regions(){

        return $this->belongsTo(Regions::class);
    }

    public function district(){

        return $this->hasMany(District::class);
    }

}
