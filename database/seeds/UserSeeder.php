<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Paperino',
                'surname' => 'Paperino',
                'birthdate' => '2001-01-01',
                'email' => 'paperino@gmail.com',
                'password' => Hash::make('paperino'),
            ],
            [
                'name' => 'Pippo',
                'surname' => 'Pippo',
                'birthdate' => '2001-01-01',
                'email' => 'pippo@gmail.com',
                'password' => Hash::make('pippo'),
            ],
            [
                'name' => 'Topolino',
                'surname' => 'Topolino',
                'birthdate' => '2001-01-01',
                'email' => 'topolino@gmail.com',
                'password' => Hash::make('topolino'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        };
    }
}
