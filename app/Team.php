<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   public $fillable=['team_name','team_image','team_role','experiance','team_about_me','is_active'];
    protected $table='teams';
}
