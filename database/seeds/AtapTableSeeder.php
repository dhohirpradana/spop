<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("ataps")->insert([
            [
                "id"    => 1,
                "nama"  => "decrabon/beton/gtg glazur"
            ],
            [
                "id"    => 2,
                "nama"  => "gtng beton/alumunium"
            ],
            [
                "id"    => 3,
                "nama"  => "gntn biasa"
            ],
            [
                "id"    => 4,
                "nama"  => "asbes"
            ],
            [
                "id"    => 5,
                "nama"  => "seng"
            ]
        ]);
    }
}
