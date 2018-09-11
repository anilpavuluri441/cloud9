<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     public $fillable=['parent_id','page_title','page_description','short_description','image'];
}
