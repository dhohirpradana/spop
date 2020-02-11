<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSubjekPajak extends Model
{
    protected $fillable = [
        "nama_subjek_pajak",
        "nama_jalan",
        "rt",
        "rw",
        "nomor_ktp",
        "status_id",
        "pekerjaan_id",
        "desa_id"
    ];

    public function status()
    {
        return $this->belongsTo("App\Models\Status");
    }

    public function pekerjaan()
    {
        return $this->belongsTo("App\Models\Pekerjaan");
    }

    public function desa()
    {
        return $this->belongsTo("App\Models\Desa");
    }
}
