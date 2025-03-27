<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $newClient = new Client();
            $newClient->name = $faker->word();
            $newClient->email = $faker->email();
            $newClient->save();
        }
    }
}
