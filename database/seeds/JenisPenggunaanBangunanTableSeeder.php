<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPenggunaanBangunanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("jenis_penggunaan_bangunans")->insert([
            [
                "id"    => 1,
                "nama"  => "perumahan"
            ],
            [
                "id"    => 2,
                "nama"  => "perkantoran swasta"
            ],
            [
                "id"    => 3,
                "nama"  => "pabrik"
            ],
            [
                "id"    => 4,
                "nama"  => "toko/apotik/pasar/ruko"
            ],
            [
                "id"    => 5,
                "nama"  => "rumah sakit klinik"
            ],
            [
                "id"    => 6,
                "nama"  => "olahraga / rekreasi"
            ],
            [
                "id"    => 7,
                "nama"  => "hotel/wisma"
            ],
            [
                "id"    => 8,
                "nama"  => "bengkel/gudang/pertanian"
            ],
            [
                "id"    => 9,
                "nama"  => "gedung pemerintahan"
            ],
            [
                "id"    => 10,
                "nama"  => "lain lain"
            ],
            [
                "id"    => 11,
                "nama"  => "bng tidak kena pajak"
            ],
            [
                "id"    => 12,
                "nama"  => "bangunan parkir"
            ],
            [
                "id"    => 13,
                "nama"  => "apartement"
            ],
            [
                "id"    => 14,
                "nama"  => "pompa bensin"
            ],
            [
                "id"    => 15,
                "nama"  => "tangki minyak"
            ],
            [
                "id"    => 16,
                "nama"  => "gedung sekolah"
            ],
        ]);
    }
}
