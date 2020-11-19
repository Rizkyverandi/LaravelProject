<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public function episode ()
    {
        return $this->hasMany(Episodes::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genres::class);
    }
}
