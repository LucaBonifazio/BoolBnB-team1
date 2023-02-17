<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(ApartmentSeeder::class);
        // $this->call(ServiceSeeder::class);
        $this->call(ViewSeeder::class);
        $this->call(MessageSeeder::class);
        // $this->call(SponsorshipSeeder::class);
    }
}
