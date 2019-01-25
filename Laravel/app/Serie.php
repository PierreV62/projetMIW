<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Serie extends Model
{
//    protected $table = '';
    public function seasons()
    {
        return $this->hasMany(Season::class)->orderBy('season_number');
    }
}