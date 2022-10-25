<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Notifications\Notifiable;

class Team extends Model
{
    use Notifiable;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public $timestamps = true;

    public function photo()
    {
        return $this->morphOne('App\Photo', 'pictures');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($item) {
            $item->photo()->get()
                ->each(function ($photo) {
                    $path = $photo->path;
                    File::delete($path);
                    $photo->delete();
                });
        });
    }

}
