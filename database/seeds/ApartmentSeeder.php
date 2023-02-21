<?php

use App\Apartment;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $user = User::all('id')->all();

        for ($i = 0 ; $i < 50 ; $i++) {
            $title = $faker->words(rand(3, 7), true);

            $apartment = Apartment::create([
                'user_id'            => $faker->randomElement($user)->id,
                'slug'               => Apartment::getSlug($title),
                'title'              => $title,
                'n_rooms'            => $faker->numberBetween(0, 10),
                'n_beds'             => $faker->numberBetween(0, 10),
                'n_bathrooms'        => $faker->numberBetween(0, 10),
                'square_metres'      => $faker->numberBetween(50, 100),
                'picture'            => 'https://picsum.photos/id/' . rand(0, 1000) . '/500/400',
                // 'uploaded_image'     => $faker->,
                'visibility'         => $faker->numberBetween(0, 1),
                'latitude'           => $faker->latitude($min = -90, $max = 90),
                'longitude'          => $faker->longitude($min = -180, $max = 180),
                'state'              => $faker->state(),
                'city'               => $faker->city(),
                'address'            => $faker->streetAddress(),
                'apartment_number'   => $faker->buildingNumber(),
            ]);

        }
    }
}
