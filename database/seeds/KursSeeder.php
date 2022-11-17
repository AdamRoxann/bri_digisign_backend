<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kurs')->insert([
            'board_id' => 1,
            'flag_icon' => 'usa.png',
            'kurs_name' => 'USD',
            'sell_price' => '15663',
            'buy_price' => '15593',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs')->insert([
            'board_id' => 1,
            'flag_icon' => 'singapore.png',
            'kurs_name' => 'SGD',
            'sell_price' => '11439',
            'buy_price' => '11379',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs')->insert([
            'board_id' => 1,
            'flag_icon' => 'europe.png',
            'kurs_name' => 'EUR',
            'sell_price' => '16304',
            'buy_price' => '16210',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs')->insert([
            'board_id' => 1,
            'flag_icon' => 'australia.png',
            'kurs_name' => 'AUD',
            'sell_price' => '10581',
            'buy_price' => '10511',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs')->insert([
            'board_id' => 1,
            'flag_icon' => 'england.png',
            'kurs_name' => 'GBP',
            'sell_price' => '18632',
            'buy_price' => '18518',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('kurs')->insert([
            'board_id' => 1,
            'flag_icon' => 'japan.png',
            'kurs_name' => 'JPY',
            'sell_price' => '112',
            'buy_price' => '111',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
