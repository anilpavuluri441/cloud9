<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quickcontact extends Model
{
    public $fillable=['name','email','city','state','zip','message','mobile_number'];
    protected $table ="quickcontacts";
}
  