<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $fillable = ["id", "nama", "kecamatan_id"];

    public function kecamatan()
    {
        return $this->belongsTo("App\Models\Kecamatan");
    }
}
