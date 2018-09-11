<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    public $fillable=['service_type_id','service_name','description','is_active'];
   

   public function serviceType()
   {
    return $this->hasOne('App\ServiceType','id','service_type_id');
   }
   
}
