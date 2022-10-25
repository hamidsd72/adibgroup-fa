<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Employment extends Model
{
	
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category()
    {
       return $this->belongsTo('App\EmploymentCategory');
    }

    public function attachment()
    {
        return $this->morphOne('App\Attachment', 'attachments');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($item) {
            $item->attachment()->get()
                ->each(function ($photo) {
                    $path = $photo->path;
                    File::delete($path);
                    $photo->delete();
                });
        });
    }

}