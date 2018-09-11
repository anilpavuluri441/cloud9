<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $fillable =[ 'name', 'attachment_path', 'attachment_type', 'attachment_title', 'attachment_url', 'attachment_url_target', 'attachment_description', 'attachmentable_id', 'attachmentable_type', 'created_at', 'updated_at'];

    public function attachmentable()
    {
        return $this->morphTo();
    }
}





