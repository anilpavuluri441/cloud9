<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    //
     public $fillable=['service_type','service_image','description','is_active','image'];

      public function attachments()
    {
        return $this->morphMany('App\Attachments', 'attachmentable');
    }
     public function serviceType()
   {
    return $this->hasOne('App\Services','service_type_id','id');
   }
}
