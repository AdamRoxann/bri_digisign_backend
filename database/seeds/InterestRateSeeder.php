<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interest_rates')->insert([
            'board_id' => 1,
            'deposito_month' => 1,
            'interest_rate' => 2.25,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rates')->insert([
            'board_id' => 1,
            'deposito_month' => 3,
            'interest_rate' => 2.5,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rates')->insert([
            'board_id' => 1,
            'deposito_month' => 6,
            'interest_rate' => 2.75,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rates')->insert([
            'board_id' => 1,
            'deposito_month' => 12,
            'interest_rate' => 3.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rates')->insert([
            'board_id' => 1,
            'deposito_month' => 24,
            'interest_rate' => 3.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rates')->insert([
            'board_id' => 1,
            'deposito_month' => 36,
            'interest_rate' => 3.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
