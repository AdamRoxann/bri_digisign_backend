<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
            'device_id' => 1,
            'board_name' => 'default',
            'orientation' => 'landscape',
            'scroll_text' => 'PT Bank Rakyat Indonesia, Tbk. adalah salah satu bank terbesar dan tertua milik BUMN di Indonesia.',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
