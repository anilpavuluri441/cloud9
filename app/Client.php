<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     public $fillable=['client_name','client_image','client_role','client_about_me','is_active'];
}
