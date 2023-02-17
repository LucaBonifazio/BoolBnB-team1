<?php

use App\View;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ViewSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        for($i = 0 ; $i < 100 ; $i++) {
            $view = View::create([
                'IP'   => $faker->localIpv4(),
                'date' => $faker->dateTime(),
            ]);
        }
    }
}
