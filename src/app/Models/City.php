<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function shops()
    {
        return $this->hasMany('App\Models\Shop');
    }
}
