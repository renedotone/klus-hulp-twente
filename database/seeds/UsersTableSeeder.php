<?php

use Illuminate\Database\Seeder;
use\App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([
            'name' => 'Augustus',
            'adres' => 'Boswinkel',
            'huisnummer' => '42',
            'postcode' => '7500',
            'gemeente' => 'Enschede',
            'telefoonnummer' => '5556667770',
            'email' => 'augustus@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
        User::create
        ([
            'name' => 'Cicero',
            'adres' => 'Bijlmerlaan',
            'huisnummer' => '12',
            'postcode' => '7510',
            'gemeente' => 'Hengelo',
            'telefoonnummer' => '5556667771',
            'email' => 'cicero@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
        User::create
        ([
            'name' => 'Agrippa',
            'adres' => 'Spoorhoek',
            'huisnummer' => '22',
            'postcode' => '7520',
            'gemeente' => 'Almelo',
            'telefoonnummer' => '5556667772',
            'email' => 'agrippa@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
        User::create
        ([
            'name' => 'Lepidus',
            'adres' => 'Turfwoude',
            'huisnummer' => '112',
            'postcode' => '7530',
            'gemeente' => 'Haaksbergen',
            'telefoonnummer' => '5556667773',
            'email' => 'lepidus@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
    }
}