<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataLetakObjek extends Model
{
    protected $fillable = [
        "nama_jalan",
        "desa_id",
        "blok/kav nomor",
        "rw",
        "rt"
    ];
}
