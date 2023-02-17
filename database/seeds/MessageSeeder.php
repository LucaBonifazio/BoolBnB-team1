<?php

use App\Message;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 100; $i++) {
            $message = Message::create([ //TODO: capire cosa fare della variabile
                'message' => $faker->text(100),
                'date'    => $faker->dateTime(),
            ]);
        }
    }
}
