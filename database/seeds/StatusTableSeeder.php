<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statuses")->insert([
            [
                "id"    => 1,
                "nama"  => "pemilik"
            ],
            [
                "id"    => 2,
                "nama"  => "penyewa",
            ],
            [
                "id"    => 3,
                "nama"  => "pengelola",
            ],
            [
                "id"    => 4,
                "nama"  => "pemakai"
            ],
            [
                "id"    => 5,
                "nama"  => "sengketa"
            ]
        ]);
    }
}
