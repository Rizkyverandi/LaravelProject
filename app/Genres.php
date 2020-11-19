<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    public function movie()
    {
        return $this->belongsTo(Movies::class);
    }
}
