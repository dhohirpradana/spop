<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisTanah extends Model
{
    protected $fillable = ["id", "nama"];

    public function dataTanahs()
    {
        return $this->hasMany("App\Models\DataTanah");
    }
}
