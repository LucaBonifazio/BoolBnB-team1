<?php

use App\Sponsorship;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    public function run()
    {
        $sponsorships = [
            [
                'type' => 'Bronze Sponsorship',
                'price' => 2.99,
                'sponsor_time' => 24,
            ],
            [
                'type' => 'Silver Sponsorship',
                'price' => 5.99,
                'sponsor_time' => 72,
            ],
            [
                'type' => 'Gold Sponsorship',
                'price' => 9.99,
                'sponsor_time' => 144,
            ]
        ];

        foreach ($sponsorships as $sponsorship) {
            Sponsorship::create($sponsorship);
        };
    }
}
