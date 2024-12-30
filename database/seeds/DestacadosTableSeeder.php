<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestacadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destacados')->insert([
            'r1' => 1,
            'r2' => 2,
            'r3' => 3,
            'r4' => 4,
            'r5' => 5,
            'r6' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
