<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    //
    public function Parcel(){
        return $this->hasMany("App\Parcel");
    }
}
