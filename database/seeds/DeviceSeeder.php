<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            'device_name' => 'tester',
            'licence_codes' => Str::random(100),
            'registered_at' => now(),
            'last_login' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
