<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("langits")->insert([
            [
                "id"    => 1,
                "nama"  => "akustik/jati"
            ],
            [
                "id"    => 2,
                "nama"  => "triplek/asbes bambu"
            ],
            [
                "id"    => 3,
                "nama"  => "tidak ada"
            ]
        ]);
    }
}
