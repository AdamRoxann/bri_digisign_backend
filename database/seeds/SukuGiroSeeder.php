<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SukuGiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suku_bunga_giros')->insert([
            'board_id' => 1,
            'start' => '0',
            'end' => '< 5 Juta',
            'percent' => 0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giros')->insert([
            'board_id' => 1,
            'start' => '5 Juta',
            'end' => '25 Juta',
            'percent' => 0.5,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giros')->insert([
            'board_id' => 1,
            'start' => '> 25 Juta',
            'end' => '100 Juta',
            'percent' => 1.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giros')->insert([
            'board_id' => 1,
            'start' => '> 100 Juta',
            'end' => '1 M',
            'percent' => 1.5,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giros')->insert([
            'board_id' => 1,
            // 'start' => '> 100 Juta',
            'end' => '> 1 M',
            'percent' => 2.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
