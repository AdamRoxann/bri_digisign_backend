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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DeviceSeeder::class);
        $this->call(BoardSeeder::class);
        $this->call(KursSeeder::class);
        $this->call(InterestRateSeeder::class);
        $this->call(SukuGiroSeeder::class);
        $this->call(MasterDataSeeder::class);
    }
}
