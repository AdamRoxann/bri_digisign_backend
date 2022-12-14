<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kurs_masters')->insert([
            'flag_icon' => 'usa.png',
            'kurs_name' => 'USD',
            'sell_price' => '15663',
            'buy_price' => '15593',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs_masters')->insert([
            'flag_icon' => 'singapore.png',
            'kurs_name' => 'SGD',
            'sell_price' => '11439',
            'buy_price' => '11379',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs_masters')->insert([
            'flag_icon' => 'europe.png',
            'kurs_name' => 'EUR',
            'sell_price' => '16304',
            'buy_price' => '16210',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs_masters')->insert([
            'flag_icon' => 'australia.png',
            'kurs_name' => 'AUD',
            'sell_price' => '10581',
            'buy_price' => '10511',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs_masters')->insert([
            'flag_icon' => 'england.png',
            'kurs_name' => 'GBP',
            'sell_price' => '18632',
            'buy_price' => '18518',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs_masters')->insert([
            'flag_icon' => 'japan.png',
            'kurs_name' => 'JPY',
            'sell_price' => '112',
            'buy_price' => '111',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('interest_rate_masters')->insert([
            'deposito_month' => 1,
            'interest_rate' => 2.25,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rate_masters')->insert([
            'deposito_month' => 3,
            'interest_rate' => 2.5,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rate_masters')->insert([
            'deposito_month' => 6,
            'interest_rate' => 2.75,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rate_masters')->insert([
            'deposito_month' => 12,
            'interest_rate' => 3.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rate_masters')->insert([
            'deposito_month' => 24,
            'interest_rate' => 3.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('interest_rate_masters')->insert([
            'deposito_month' => 36,
            'interest_rate' => 3.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('suku_bunga_giro_masters')->insert([
            'start' => '0',
            'end' => '< 5 Juta',
            'percent' => 0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giro_masters')->insert([
            'start' => '5 Juta',
            'end' => '25 Juta',
            'percent' => 0.5,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giro_masters')->insert([
            'start' => '> 25 Juta',
            'end' => '100 Juta',
            'percent' => 1.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giro_masters')->insert([
            'start' => '> 100 Juta',
            'end' => '1 M',
            'percent' => 1.5,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suku_bunga_giro_masters')->insert([
            // 'start' => '> 100 Juta',
            'end' => '> 1 M',
            'percent' => 2.0,
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
