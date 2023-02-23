<?php

use App\User;
use App\Apartment;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ApartmentSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $user = User::all('id')->all();
        
        for ($i = 0 ; $i < 50 ; $i++) {
            $title = $faker->words(rand(3, 7), true);
            //$img_path = null;
            //$img_path = Storage::put('uploads', $contents);

            $apartment = Apartment::create([
                'user_id'            => $faker->randomElement($user)->id,
                'slug'               => Apartment::getSlug($title),
                'title'              => $title,
                'n_rooms'            => $faker->numberBetween(1, 10),
                'n_beds'             => $faker->numberBetween(1, 10),
                'n_bathrooms'        => $faker->numberBetween(1, 10),
                'square_meters'      => $faker->numberBetween(10, 1000),
                'picture'            => 'https://picsum.photos/id/' . rand(0, 1000) . '/500/400',
                //'uploaded_image'     => $img_path,
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

// $number = rand(0, 276);
            // if ($number) {
            //     $contents = new File(DIR . '/../../storage/app/lorempicsum/picsum' . $number . '.jpg');
            //     
            // } else {
            //     
            // }
//