<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public function attachments()
    {
        return $this->morphTo();
    }
}
