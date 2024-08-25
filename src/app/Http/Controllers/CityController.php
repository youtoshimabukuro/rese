<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function shops() {
        $this -> hasMany('App\Models\Shop');
    }
}
