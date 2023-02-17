<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            'WiFi', 'Car Spot', 'Pool', 'Sauna', 'Porter', 'Concierge', 'Smoking', 'Anlimales', 'Air Condtioning', 'Laundry Service', 'Breakfast Service', 'Tv', 'Hair Dryer', 'Workspace'
        ];

        foreach ($services as $service) {
            Service::create([
                'slug' => Service::getSlug($service),
                'name' => $service
            ]);
        }
    }
}
