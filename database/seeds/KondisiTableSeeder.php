<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KondisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("kondisis")->insert([
            [
                "id"    => 1,
                "nama"  => "sangat baik"
            ],
            [
                "id"    => 2,
                "nama"  => "baik"
            ],
            [
                "id"    => 3,
                "nama"  => "sedang"
            ],
            [
                "id"    => 4,
                "nama"  => "jelek"
            ],
        ]);
    }
}
