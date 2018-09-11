<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    public $fillable=['image','gallery_type_id','image_tilte','description'];
    protected $table='gallerys';

    public function galleryType(){
   	return $this->hasOne('App\GalleryType','id','gallery_type_id');
   }
}
