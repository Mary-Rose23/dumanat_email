<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Dumanat',
                'first_name' => 'Mary Rose',
                'middle_name' => 'Oracion',
                'address' => 'Potohan, Tubigon, Bohol',
                'birth_date' => '2001-12-16',
                'phone_number' => '09462399516',
                'email' => 'dumanatmaryrose@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Palao',
                'first_name' => 'Phillip Joshua',
                'middle_name' => 'Conrada',
                'address' => ' Potohan, Tubigon, Bohol',
                'birth_date' => '2000-07-21',
                'phone_number' => '09462177356',
                'email' => 'dumanatmaryrose@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
