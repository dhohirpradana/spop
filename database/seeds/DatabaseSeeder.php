<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AtapTableSeeder::class,
            DindingTableSeeder::class,
            JenisPenggunaanBangunanTableSeeder::class,
            KondisiTableSeeder::class,
            KonstruksiTableSeeder::class,
            LangitTableSeeder::class,
            LantaiTableSeeder::class,
            PekerjaanTableSeeder::class,
            StatusTableSeeder::class,
        ]);
    }
}
