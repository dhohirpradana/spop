<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LantaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("lantais")->insert([
            [
                "id"    => 1,
                "nama"  => "marmer"
            ],
            [
                "id"    => 2,
                "nama"  => "keramik"
            ],
            [
                "id"    => 3,
                "nama"  => "teraso"
            ],
            [
                "id"    => 4,
                "nama"  => "ubin PC/papan"
            ],
            [
                "id"    => 5,
                "nama"  => "semen"
            ],
        ]);
    }
}
