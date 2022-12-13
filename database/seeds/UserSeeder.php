<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'demo',
            'password' => \Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
