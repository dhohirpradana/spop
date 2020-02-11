<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = ["id", "nama"];

    public function desas()
    {
        return $this->hasMany("App\Models\Kecamatan");
    }
}
