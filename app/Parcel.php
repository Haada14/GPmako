<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    //
    protected $guarded = []; //on liste les champs qui ne doivent pas etre remplis s'il n'y a en pas on laisse vide

   //protected $fillable = []; on liste les champs a remplir 
   public function Carrier(){
       return $this->belongs("App\Carrier");
   }
}
