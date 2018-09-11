<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryType extends Model
{
    
     public $fillable=['type'];
     
      public function gallerys()
   {
    return $this->hasMany('App\Gallery','gallery_type_id','id');
   }
}
