<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ["nama"];

    public function dataSubjekPajaks()
    {
        return $this->hasMany("App\Models\DataSubjekPajak");
    }
}
