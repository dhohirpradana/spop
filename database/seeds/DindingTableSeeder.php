<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DindingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("dindings")->insert([
            [
                "id"    => 1,
                "nama"  => "kaca/alumunium"
            ],
            [
                "id"    => 2,
                "nama"  => "beton"
            ],
            [
                "id"    => 3,
                "nama"  => "batu bata / conblok"
            ],
            [
                "id"    => 4,
                "nama"  => "kayu"
            ],
            [
                "id"    => 5,
                "nama"  => "seng"
            ],
        ]);
    }
}
