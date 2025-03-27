<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $clients = Client::all();
        for ($i = 0; $i < 10; $i++) {
            $newPost = new Post();
            $newPost->client_id = $clients->random()->id;
            $newPost->title =  $faker->sentence();
            $newPost->description  = $faker->paragraph();
            $newPost->save();
        }
    }
}
