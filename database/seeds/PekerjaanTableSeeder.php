<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pekerjaans")->insert([
            [
                "id"    => 1,
                "nama"  => "PNS"
            ],
            [
                "id"    => 2,
                "nama"  => "ABRI",
            ],
            [
                "id"    => 3,
                "nama"  => "pensiunan",
            ],
            [
                "id"    => 4,
                "nama"  => "badan"
            ],
            [
                "id"    => 5,
                "nama"  => "lainnya"
            ]
        ]);
    }
}
