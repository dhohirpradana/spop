<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dinding extends Model
{
    protected $fillable = ["nama"];

    public function rincianDataBangunans()
    {
        return $this->hasMany("App\Models\RincianDataBangunan");
    }
}
