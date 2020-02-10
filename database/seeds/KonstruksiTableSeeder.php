<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonstruksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("konstruksis")->insert([
            [
                "id"    => 1,
                "nama"  => "baja"
            ],
            [
                "id"    => 2,
                "nama"  => "beton"
            ],
            [
                "id"    => 3,
                "nama"  => "batu bata"
            ],
            [
                "id"    => 4,
                "nama"  => "kayu"
            ]
        ]);
    }
}
