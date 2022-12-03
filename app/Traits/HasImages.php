<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

class HasImages extends Model
{
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
