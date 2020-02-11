<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $fillable = ["nama"];

    public function dataSubjekPajaks()
    {
        return $this->hasMany("App\Models\DataSubjekPajak");
    }
}
